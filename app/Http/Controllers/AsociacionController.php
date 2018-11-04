<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAsociacionRequest;
use App\Http\Requests\UpdateAsociacionRequest;
use App\Models\TipoAsociacion;
use App\Repositories\AsociacionRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
class AsociacionController extends AppBaseController
{
  /** @var  AsociacionRepository */
  private $asociacionRepository;

  public function __construct(AsociacionRepository $asociacionRepo)
  {
    $this->asociacionRepository = $asociacionRepo;
  }

  /**
  * Display a listing of the Asociacion.
  *
  * @param Request $request
  * @return Response
  */
  public function index(Request $request)
  {
    $this->asociacionRepository->pushCriteria(new RequestCriteria($request));
    $asociacions = $this->asociacionRepository->all();

    return view('asociacions.index')
    ->with('asociacions', $asociacions)->with('chart',$this->createChart($asociacions));
  }

  /**
  * Show the form for creating a new Asociacion.
  *
  * @return Response
  */
  public function create()
  {
    $tiposasociacion = TipoAsociacion::all()->pluck('nombre', 'id');
    return view('asociacions.create', [
      'tiposasociacion' => $tiposasociacion,
    ]);
  }

  /**
  * Store a newly created Asociacion in storage.
  *
  * @param CreateAsociacionRequest $request
  *
  * @return Response
  */
  public function store(CreateAsociacionRequest $request)
  {
    $input = $request->all();

    $asociacion = $this->asociacionRepository->create($input);

    Flash::success('Asociación guardada exitosamente.');

    return redirect(route('asociacions.index'));
  }

  /**
  * Display the specified Asociacion.
  *web
  * @param  int $id
  *
  * @return Response
  */
  public function show($id)
  {
    $asociacion = $this->asociacionRepository->findWithoutFail($id);

    if (empty($asociacion)) {
      Flash::error('Asociacion no encontrada');

      return redirect(route('asociacions.index'));
    }

    return view('asociacions.show')->with('asociacion', $asociacion);
  }

  /**
  * Show the form for editing the specified Asociacion.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function edit($id)
  {
    $asociacion      = $this->asociacionRepository->findWithoutFail($id);
    $tiposasociacion = TipoAsociacion::all()->pluck('nombre', 'id');

    if (empty($asociacion)) {
      Flash::error('Asociacion no encontrada');

      return redirect(route('asociacions.index'));
    }

    return view('asociacions.edit')->with('asociacion', $asociacion)
    ->with('tiposasociacion', $tiposasociacion);
  }

  /**
  * Update the specified Asociacion in storage.
  *
  * @param  int              $id
  * @param UpdateAsociacionRequest $request
  *
  * @return Response
  */
  public function update($id, UpdateAsociacionRequest $request)
  {
    $asociacion = $this->asociacionRepository->findWithoutFail($id);

    if (empty($asociacion)) {
      Flash::error('Asociacion not found');

      return redirect(route('asociacions.index'));
    }

    $asociacion = $this->asociacionRepository->update($request->all(), $id);

    Flash::success('Asociacion updated successfully.');

    return redirect(route('asociacions.index'));
  }

  /**
  * Remove the specified Asociacion from storage.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function destroy($id)
  {
    $asociacion = $this->asociacionRepository->findWithoutFail($id);

    if (empty($asociacion)) {
      Flash::error('Asociacion not found');

      return redirect(route('asociacions.index'));
    }

    $this->asociacionRepository->delete($id);

    Flash::success('Asociacion deleted successfully.');

    return redirect(route('asociacions.index'));
  }

  public function createChart($asociacions) {

    $preprocessedDataset = $asociacions->sortBy('nombre');

    $dataset = collect();
    foreach ($preprocessedDataset as $asociacion) {
      $temp = [
        'nombre' => (string)$asociacion->nombre,
        'personaEncargada' =>(string) $asociacion->personaEncargada,
        'TipoAsociacion' =>(string)$asociacion->tipoasociacion->nombre
      ];
      $dataset->push($temp);
    }
    $dataset = $dataset->groupBy('TipoAsociacion');
    $dataset = $dataset->map(function ($item) {
      return $item->groupBy('nombre')->map(function ($item2){
        return $item2->count('personaEncargada');
      });
    });
    //dd($asociacions);
    $labels = $dataset->collapse()->toArray();
    $dataset = $dataset->toArray();
    $labels = array_fill_keys(array_keys($labels), 0);
    $chart = new DefaultChart;
    foreach ($dataset as $key => $item) {
      $chart->dataset($key, 'column', array_values(array_merge($labels,$item)));
    }
    $chart->labels(array_keys($labels));
    $chart->title('Número de Personas por Asociación y Tipo');
    $chart->label("Número de Personas");
    return $chart;
  }
    public function asociacionHTMLPDF(Request $request)
    {
        $productos = $this->asociacionRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('asociacions',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaAsociaciones',compact('productos'));//CARGO LA VISTA
            return $pdf->stream('Asociaciones.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('asociacion-pdf');//RETORNO A MI VISTA
    }
 
   
  }


