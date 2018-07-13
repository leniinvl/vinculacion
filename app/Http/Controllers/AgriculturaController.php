<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAgriculturaRequest;
use App\Http\Requests\UpdateAgriculturaRequest;
use App\Repositories\AgriculturaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use \App\Models\unidadproduccion;
use \App\Models\UsoSuelo;
use Barryvdh\DomPDF\Facade as PDF;
class AgriculturaController extends AppBaseController
{
    /** @var  AgriculturaRepository */
    private $agriculturaRepository;

    public function __construct(AgriculturaRepository $agriculturaRepo)
    {
        $this->agriculturaRepository = $agriculturaRepo;
    }

    /**
     * Display a listing of the Agricultura.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->agriculturaRepository->pushCriteria(new RequestCriteria($request));
        $agriculturas = $this->agriculturaRepository->all();

        return view('agriculturas.index')
            ->with('agriculturas', $agriculturas)
            ->with('chart',$this->createChart($agriculturas));
    }

    /**
     * Show the form for creating a new Agricultura.
     *
     * @return Response
     */
    public function create()
    {
        $UsoSuelo         = UsoSuelo::all()->pluck('nombre', 'id');
        $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        return view('agriculturas.create', ['UsoSuelo' => $UsoSuelo, 'unidadproduccion' => $unidadproduccion]);
    }

    /**
     * Store a newly created Agricultura in storage.
     *
     * @param CreateAgriculturaRequest $request
     *
     * @return Response
     */
    public function store(CreateAgriculturaRequest $request)
    {
        $input = $request->all();

        $agricultura = $this->agriculturaRepository->create($input);

        Flash::success('Agricultura guardado exitosamente.');

        return redirect(route('agriculturas.index'));
    }

    /**
     * Display the specified Agricultura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agricultura = $this->agriculturaRepository->findWithoutFail($id);

        if (empty($agricultura)) {
            Flash::error('Agricultura not found');

            return redirect(route('agriculturas.index'));
        }

        return view('agriculturas.show')->with('agricultura', $agricultura);
    }

    /**
     * Show the form for editing the specified Agricultura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $UsoSuelo         = UsoSuelo::all()->pluck('nombre', 'id');
        $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        $agricultura      = $this->agriculturaRepository->findWithoutFail($id);

        if (empty($agricultura)) {
            Flash::error('Agricultura not found');

            return redirect(route('agriculturas.index'));
        }

        return view('agriculturas.edit')->with('agricultura', $agricultura)->with('UsoSuelo', $UsoSuelo)->with('unidadproduccion', $unidadproduccion);
    }

    /**
     * Update the specified Agricultura in storage.
     *
     * @param  int              $id
     * @param UpdateAgriculturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgriculturaRequest $request)
    {
        $agricultura = $this->agriculturaRepository->findWithoutFail($id);

        if (empty($agricultura)) {
            Flash::error('Agricultura not found');

            return redirect(route('agriculturas.index'));
        }

        $agricultura = $this->agriculturaRepository->update($request->all(), $id);

        Flash::success('Agricultura updated successfully.');

        return redirect(route('agriculturas.index'));
    }

    /**
     * Remove the specified Agricultura from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agricultura = $this->agriculturaRepository->findWithoutFail($id);

        if (empty($agricultura)) {
            Flash::error('Agricultura not found');

            return redirect(route('agriculturas.index'));
        }

        $this->agriculturaRepository->delete($id);

        Flash::success('Agricultura deleted successfully.');

        return redirect(route('agriculturas.index'));
    }

    public function AgriculturaHTMLPDF(Request $request)
    {
        $productos = $this->agriculturaRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('agriculturas',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaAgricultura',compact('productos'));//CARGO LA VISTA
            return $pdf->download('Agriculturas.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('Agricultura-pdf');//RETORNO A MI VISTA


    public function createChart($agriculturas) {

      $preprocessedDataset = $agriculturas->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $agricultura) {
        $temp = [
          'nombre' => (string)$agricultura->nombre,
          'unidadProduccion' =>(string) $agricultura->unidadproduccion->nombre,
          'usoSuelo' =>(string)$agricultura->usosuelo->nombre
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('unidadProduccion');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('usoSuelo')->map(function ($item2){
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
      $chart->title('Agriculturas por Unidades de Producción y Uso de Suelo');
      $chart->label("Unidades de Producción");
      return $chart;

    }
}
