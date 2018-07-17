<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateOrigenIngresosRequest;
use App\Http\Requests\UpdateOrigenIngresosRequest;
use App\Models\Propietario;
use App\Models\unidadproduccion;
use App\Repositories\OrigenIngresosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
class OrigenIngresosController extends AppBaseController
{
  /** @var  OrigenIngresosRepository */
  private $origenIngresosRepository;

  public function __construct(OrigenIngresosRepository $origenIngresosRepo)
  {
    $this->origenIngresosRepository = $origenIngresosRepo;
  }

  /**
  * Display a listing of the OrigenIngresos.
  *
  * @param Request $request
  * @return Response
  */
  public function index(Request $request)
  {
    $this->origenIngresosRepository->pushCriteria(new RequestCriteria($request));
    $origenIngresos = $this->origenIngresosRepository->all();

    return view('origen_ingresos.index')
    ->with('origenIngresos', $origenIngresos)
    ->with('chart',$this->createChart($origenIngresos));
  }

  /**
  * Show the form for creating a new OrigenIngresos.
  *
  * @return Response
  */
  public function create()
  {
    $propietario      = Propietario::all()->pluck('nombre', 'id');
    $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');
    return view('origen_ingresos.create', [
      'propietario'      => $propietario,
      'unidadproduccion' => $unidadproduccion,
    ]);
  }

  /**
  * Store a newly created OrigenIngresos in storage.
  *
  * @param CreateOrigenIngresosRequest $request
  *
  * @return Response
  */
  public function store(CreateOrigenIngresosRequest $request)
  {
    $input = $request->all();

    $origenIngresos = $this->origenIngresosRepository->create($input);

    Flash::success('Origen Ingresos saved successfully.');

    return redirect(route('origenIngresos.index'));
  }

  /**
  * Display the specified OrigenIngresos.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function show($id)
  {
    $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

    if (empty($origenIngresos)) {
      Flash::error('Origen Ingresos not found');

      return redirect(route('origenIngresos.index'));
    }

    return view('origen_ingresos.show')->with('origenIngresos', $origenIngresos);
  }

  /**
  * Show the form for editing the specified OrigenIngresos.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function edit($id)
  {
    $origenIngresos   = $this->origenIngresosRepository->findWithoutFail($id);
    $propietario      = Propietario::all()->pluck('nombre', 'id');
    $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');

    if (empty($origenIngresos)) {
      Flash::error('Origen Ingresos not found');

      return redirect(route('origenIngresos.index'));
    }

    return view('origen_ingresos.edit')->with('origenIngresos', $origenIngresos)
    ->with('propietario', $propietario)
    ->with('unidadproduccion', $unidadproduccion);
  }

  /**
  * Update the specified OrigenIngresos in storage.
  *
  * @param  int              $id
  * @param UpdateOrigenIngresosRequest $request
  *
  * @return Response
  */
  public function update($id, UpdateOrigenIngresosRequest $request)
  {
    $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

    if (empty($origenIngresos)) {
      Flash::error('Origen Ingresos not found');

      return redirect(route('origenIngresos.index'));
    }

    $origenIngresos = $this->origenIngresosRepository->update($request->all(), $id);

    Flash::success('Origen Ingresos updated successfully.');

    return redirect(route('origenIngresos.index'));
  }

  /**
  * Remove the specified OrigenIngresos from storage.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function destroy($id)
  {
    $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

    if (empty($origenIngresos)) {
      Flash::error('Origen Ingresos not found');

      return redirect(route('origenIngresos.index'));
    }

    $this->origenIngresosRepository->delete($id);

    Flash::success('Origen Ingresos deleted successfully.');

    return redirect(route('origenIngresos.index'));
  }

  public function createChart($origenIngresos) {

    $preprocessedDataset = $origenIngresos->sortBy('nombre');

    $dataset = collect();
    foreach ($preprocessedDataset as $origeningresos) {
      $temp = [
        'nombre' => (string)$origeningresos->nombre,
        'unidadProduccion' =>(string) $origeningresos->unidadproduccion->nombre,
        'propietario' =>(string)$origeningresos->propietario->nombre
      ];
      $dataset->push($temp);
    }
    $dataset = $dataset->groupBy('unidadProduccion');
    $dataset = $dataset->map(function ($item) {
      return $item->groupBy('propietario')->map(function ($item2){
        return $item2->count('nombre');
      });
    });
    
    $labels = $dataset->collapse()->toArray();
    $dataset = $dataset->toArray();
    $labels = array_fill_keys(array_keys($labels), 0);
    $chart = new DefaultChart;
    foreach ($dataset as $key => $item) {
      $chart->dataset($key, 'column', array_values(array_merge($labels,$item)));
    }
    $chart->labels(array_keys($labels));
    $chart->title('Origenes de Ingreso por Unidades de Producción y Propietarios');
    $chart->label("Unidades de Producción");
    return $chart;
  }

    public function origenIngresoHTMLPDF(Request $request)
    {
        $productos = $this->origenIngresosRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('origenIngresos',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaIngresos',compact('productos'));//CARGO LA VISTA
            return $pdf->stream('Ingresos.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('origenIngreso-pdf');//RETORNO A MI VISTA
    }

  

}
