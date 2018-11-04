<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanDeGestionDeRiesgosRequest;
use App\Http\Requests\UpdatePlanDeGestionDeRiesgosRequest;
use App\Models\Agricultura;
use App\Models\Amenazas;
use App\Models\OrigenIngresos;
use App\Models\PlanDeGestionDeRiesgos;
use App\Models\TipoAbono;
use App\Models\TipoAnimales;
use App\Models\TipoControlPlaga;
use App\Models\TipoCultivos;
use App\Models\Vulnerabilidades;
use App\Repositories\PlanDeGestionDeRiesgosRepository;
use Barryvdh\DomPDF\Facade as PDF;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanDeGestionDeRiesgosController extends AppBaseController
{
    /** @var  PlanDeGestionDeRiesgosRepository */
    private $planDeGestionDeRiesgosRepository;

    public function __construct(PlanDeGestionDeRiesgosRepository $planDeGestionDeRiesgosRepo)
    {
        $this->planDeGestionDeRiesgosRepository = $planDeGestionDeRiesgosRepo;
    }

    /**
     * Display a listing of the PlanDeGestionDeRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planDeGestionDeRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->all();

        return view('plan_de_gestion_de_riesgos.index')
            ->with('planDeGestionDeRiesgos', $planDeGestionDeRiesgos)
            ->with('chart', $this->createChart($planDeGestionDeRiesgos, $request->get('selectPlanGestion')));
    }

    /**
     * Show the form for creating a new PlanDeGestionDeRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        $abono = TipoAbono::all()->pluck('nombre', 'id');
        $controlPlaga = TipoControlPlaga::all()->pluck('nombre', 'id');
        $cultivo = TipoCultivos::all()->pluck('nombre', 'id');
        return view('plan_de_gestion_de_riesgos.create', [
            'abono' => $abono,
            'controlPlaga' => $controlPlaga,
            'cultivo' => $cultivo,
        ]);
    }

    /**
     * Store a newly created PlanDeGestionDeRiesgos in storage.
     *
     * @param CreatePlanDeGestionDeRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanDeGestionDeRiesgosRequest $request)
    {
        $input = $request->all();

        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->create($input);

        Flash::success('Plan De Gestion De Riesgos saved successfully.');

        return redirect(route('planDeGestionDeRiesgos.index'));
    }

    /**
     * Display the specified PlanDeGestionDeRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->findWithoutFail($id);
        $tipoanimales = TipoAnimales::all()->pluck('nombre', 'id');
        $origeningresos = OrigenIngresos::all()->pluck('nombre', 'id');
        $amenazas = Amenazas::all()->pluck('nombre', 'id');
        $vulnerabilidades = Vulnerabilidades::all()->pluck('nombre', 'id');
        $agriculturas = Agricultura::all()->pluck('nombre', 'id');

        if (empty($planDeGestionDeRiesgos)) {
            Flash::error('Plan De Gestion De Riesgos not found');

            return redirect(route('planDeGestionDeRiesgos.index'));
        }

        return view('plan_de_gestion_de_riesgos.show')
            ->with('planDeGestionDeRiesgos', $planDeGestionDeRiesgos)
            ->with('tipoanimales', $tipoanimales)
            ->with('origeningresos', $origeningresos)
            ->with('amenazas', $amenazas)
            ->with('vulnerabilidades', $vulnerabilidades)
            ->with('agriculturas', $agriculturas);
    }

    /**
     * Show the form for editing the specified PlanDeGestionDeRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->findWithoutFail($id);
        $abono = TipoAbono::all()->pluck('nombre', 'id');
        $controlPlaga = TipoControlPlaga::all()->pluck('nombre', 'id');
        $cultivo = TipoCultivos::all()->pluck('nombre', 'id');

        if (empty($planDeGestionDeRiesgos)) {
            Flash::error('Plan De Gestion De Riesgos not found');

            return redirect(route('planDeGestionDeRiesgos.index'));
        }

        return view('plan_de_gestion_de_riesgos.edit')->with('planDeGestionDeRiesgos', $planDeGestionDeRiesgos)
            ->with('abono', $abono)
            ->with('controlPlaga', $controlPlaga)
            ->with('cultivo', $cultivo);
    }

    /**
     * Update the specified PlanDeGestionDeRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanDeGestionDeRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanDeGestionDeRiesgosRequest $request)
    {
        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->findWithoutFail($id);

        if (empty($planDeGestionDeRiesgos)) {
            Flash::error('Plan De Gestion De Riesgos not found');

            return redirect(route('planDeGestionDeRiesgos.index'));
        }

        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->update($request->all(), $id);

        Flash::success('Plan De Gestion De Riesgos updated successfully.');

        return redirect(route('planDeGestionDeRiesgos.index'));
    }

    /**
     * Remove the specified PlanDeGestionDeRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planDeGestionDeRiesgos = $this->planDeGestionDeRiesgosRepository->findWithoutFail($id);

        if (empty($planDeGestionDeRiesgos)) {
            Flash::error('Plan De Gestion De Riesgos not found');

            return redirect(route('planDeGestionDeRiesgos.index'));
        }

        $this->planDeGestionDeRiesgosRepository->delete($id);

        Flash::success('Plan De Gestion De Riesgos deleted successfully.');

        return redirect(route('planDeGestionDeRiesgos.index'));
    }

    public function storeTipoAnimales(Request $request, $idplanriesgos)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->TipoAnimales()->attach($request->TipoAnimales_id);
        Flash::success('PlanRiesgos  Has  Tipo Animales saved successfully.');
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function destroyTipoAnimales($idplanriesgos, $id)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->TipoAnimales()->detach($id);
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }

    public function storeOrigenIngresos(Request $request, $idplanriesgos)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->OrigenIngresos()->attach($request->OrigenIngresos_id);
        Flash::success('PlanRiesgos  Has  Origen Ingresos saved successfully.');
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function destroyOrigenIngresos($idplanriesgos, $id)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->OrigenIngresos()->detach($id);
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function storeAmenazas(Request $request, $idplanriesgos)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->amenazas()->attach($request->amenazas_id);
        Flash::success('Amenaza saved successfully.');
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function destroyAmenazas($idplanriesgos, $id)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->amenazas()->detach($id);
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function storeVulnerabilidades(Request $request, $idplanriesgos)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->vulnerabilidades()->attach($request->vulnerabilidades_id);
        Flash::success('Vulnerabilidad guardada exitosamente.');
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function destroyVulnerabilidades($idplanriesgos, $id)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->vulnerabilidades()->detach($id);
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function storeAgriculturas(Request $request, $idplanriesgos)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->agriculturas()->attach($request->agricultura_id);
        Flash::success('Agricultura agregada exitosamente.');
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }
    public function destroyAgriculturas($idplanriesgos, $id)
    {
        $planriesgos = PlanDeGestionDeRiesgos::find($idplanriesgos);
        $planriesgos->agriculturas()->detach($id);
        return redirect(url('planDeGestionDeRiesgos/' . $planriesgos->id));
    }

    public function planGestionRiesgosHTMLPDF(Request $request)
    {
        $productos = $this->planDeGestionDeRiesgosRepository->all(); //OBTENGO TODOS MIS PRODUCTO
        view()->share('planDeGestionDeRiesgos', $productos); //VARIABLE GLOBAL PRODUCTOS
        if ($request->has('descargar')) {
            $pdf = PDF::loadView('pdf.tablaGestionRiesgos', compact('productos'))->setPaper('a4', 'landscape');//CARGO LA VISTA
            return $pdf->stream('PlanGestionRiesgos.pdf'); //SUGERIR NOMBRE A DESCARGAR
        }
        return view('planGestionRiesgos-pdf'); //RETORNO A MI VISTA
    }

    public function createChart($planDeGestionDeRiesgos, $tipoVariable){

        $preprocessedDataset = $planDeGestionDeRiesgos->sortBy('nombre');

        $dataset = collect();
        foreach ($preprocessedDataset as $plandegestionderiesgos) {
            $temp = [
                'nombre' => (string) $plandegestionderiesgos->nombre,
                'tipoabono' => (string) $plandegestionderiesgos->tipoabono->nombre,
                'tipocontrolplaga' => (string) $plandegestionderiesgos->tipocontrolplaga->nombre,
                'tipocultivos' => (string) $plandegestionderiesgos->tipocultivos->nombre,

            ];
            $dataset->push($temp);
        }
        switch ($tipoVariable) {
            case '0':
                $dataset = $dataset->groupBy('tipoabono');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('tipoabono')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });

                break;

            case '1':
                $dataset = $dataset->groupBy('tipocontrolplaga');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('tipocontrolplaga')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });

                break;

            case '2':
                $dataset = $dataset->groupBy('tipocultivos');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('tipocultivos')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });

                break;

            default:
                $dataset = $dataset->groupBy('tipoabono');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('tipoabono')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });

                break;

        }
        //dd($asociacions);
        $labels = $dataset->collapse()->toArray();
        $dataset = $dataset->toArray();
        $labels = array_fill_keys(array_keys($labels), 0);
        $chart = new DefaultChart;
        foreach ($dataset as $key => $item) {
            $chart->dataset($key, 'column', array_values(array_merge($labels, $item)));
        }
        $chart->labels(array_keys($labels));
        $chart->title('Plan de Gestion de Riesgos');
        $chart->label("Número de Planes de Riesgo");
        return $chart;
    }

}
