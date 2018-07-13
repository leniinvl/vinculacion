<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTrabajadoresRequest;
use App\Http\Requests\UpdateTrabajadoresRequest;
use App\Models\Genero;
use App\Models\Pais;
use App\Models\PlanDeGestionDeRiesgos;
use App\Repositories\TrabajadoresRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
class TrabajadoresController extends AppBaseController
{
    /** @var  TrabajadoresRepository */
    private $trabajadoresRepository;

    public function __construct(TrabajadoresRepository $trabajadoresRepo)
    {
        $this->trabajadoresRepository = $trabajadoresRepo;
    }

    /**
     * Display a listing of the Trabajadores.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajadoresRepository->pushCriteria(new RequestCriteria($request));
        $trabajadores = $this->trabajadoresRepository->all();

        return view('trabajadores.index')
            ->with('trabajadores', $trabajadores)
            ->with('chart', $this->createChart($trabajadores));
    }

    /**
     * Show the form for creating a new Trabajadores.
     *
     * @return Response
     */
    public function create()
    {
        $paises                 = Pais::all()->pluck('nombre', 'id');
        $plandegestionderiesgos = PlanDeGestionDeRiesgos::all()->pluck('nombre', 'id');
        $generos                = Genero::all()->pluck('nombre', 'id');
        return view('trabajadores.create', ['generos' => $generos, 'paises' => $paises, 'plandegestionderiesgos' => $plandegestionderiesgos]);
    }

    /**
     * Store a newly created Trabajadores in storage.
     *
     * @param CreateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabajadoresRequest $request)
    {
        $input = $request->all();

        $trabajadores = $this->trabajadoresRepository->create($input);

        Flash::success('Trabajadores saved successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Display the specified Trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.show')->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for editing the specified Trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paises                 = Pais::all()->pluck('nombre', 'id');
        $plandegestionderiesgos = PlanDeGestionDeRiesgos::all()->pluck('nombre', 'id');
        $generos                = Genero::all()->pluck('nombre', 'id');
        $trabajadores           = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.edit')->with('trabajadores', $trabajadores)->with('paises', $paises)->with('plandegestionderiesgos', $plandegestionderiesgos)->with('generos', $generos);
    }

    /**
     * Update the specified Trabajadores in storage.
     *
     * @param  int              $id
     * @param UpdateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabajadoresRequest $request)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $trabajadores = $this->trabajadoresRepository->update($request->all(), $id);

        Flash::success('Trabajadores updated successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Remove the specified Trabajadores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $this->trabajadoresRepository->delete($id);

        Flash::success('Trabajadores deleted successfully.');

        return redirect(route('trabajadores.index'));
    }

    public function trabajadoresHTMLPDF(Request $request)
    {
        $productos = $this->trabajadoresRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('trabajadores',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaTrabajadores',compact('productos'));//CARGO LA VISTA
            return $pdf->download('Trabajadores.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('trabajadores-pdf');//RETORNO A MI VISTA


    public function createChart($trabajadores) {
        $dataset = collect();
        foreach ($trabajadores as $trabajador) {
            $temp = [
                'genero' => $trabajador->genero->nombre,
                'plan' => $trabajador->plandegestionderiesgos->nombre
            ];
            $dataset->push($temp);
        }
        $dataset = $dataset->groupBy('genero');
        $dataset = $dataset->map(function ($item) {
            return $item->groupBy('plan')->map(function ($item2){
                return $item2->count('genero');
            });
        });
        $labels = $dataset->collapse()->toArray();
        $labels = array_fill_keys(array_keys($labels), 0);

        $dataset = $dataset->toArray();
        $chart = new DefaultChart;
        foreach ($dataset as $key => $item) {
            $chart->dataset($key, 'column', array_values(array_merge($labels,$item)));
        }
        $chart->labels(array_keys($labels));
        $chart->title('Total de Trabajadores por Plan de Gestión de Riesgos');
        $chart->label("Cantidad de Trabajadores");
        return $chart;

    }
}
