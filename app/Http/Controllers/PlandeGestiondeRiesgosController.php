<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlandeGestiondeRiesgosRequest;
use App\Http\Requests\UpdatePlandeGestiondeRiesgosRequest;
use App\Repositories\PlandeGestiondeRiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoAbono;
use App\Models\TipoControlPlaga;
use App\Models\TipoCultivos;
use App\Models\TipoAnimales;
use App\Models\OrigenIngresos;
use App\Models\Agricultura;
use App\Models\amenazas;
use App\Models\vulnerabilidades;


class PlandeGestiondeRiesgosController extends AppBaseController
{
    /** @var  PlandeGestiondeRiesgosRepository */
    private $plandeGestiondeRiesgosRepository;

    public function __construct(PlandeGestiondeRiesgosRepository $plandeGestiondeRiesgosRepo)
    {
        $this->plandeGestiondeRiesgosRepository = $plandeGestiondeRiesgosRepo;
    }

    /**
     * Display a listing of the PlandeGestiondeRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->plandeGestiondeRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->all();

        return view('plande_gestionde_riesgos.index')
            ->with('plandeGestiondeRiesgos', $plandeGestiondeRiesgos);
    }

    /**
     * Show the form for creating a new PlandeGestiondeRiesgos.
     *
     * @return Response
     */
    public function create()
    {

        $abono = TipoAbono::all()->pluck('nombre', 'id');
        $controlPlaga = TipoControlPlaga::all()->pluck('nombre', 'id');
        $cultivo = TipoCultivos::all()->pluck('nombre', 'id');
        $animale = TipoAnimales::all()->pluck('nombre', 'id');
        $origenIngreso = OrigenIngresos::all()->pluck('nombre', 'id');
        $agricultura = Agricultura::all()->pluck('nombre', 'id');
        $amenaza = amenazas::all()->pluck('nombre', 'id');
        $vulnerabilidade = vulnerabilidades::all()->pluck('nombre', 'id');


        return view('plande_gestionde_riesgos.create', [
          'abono'                => $abono,
          'controlPlaga'         => $controlPlaga,
          'cultivo'             => $cultivo,
          'animale'             => $animale,
          'origenIngreso'       => $origenIngreso,
          'agricultura'          => $agricultura,
          'amenaza'             => $amenaza,
          'vulnerabilidade'     => $vulnerabilidade,
        ]);
    }

    /**
     * Store a newly created PlandeGestiondeRiesgos in storage.
     *
     * @param CreatePlandeGestiondeRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlandeGestiondeRiesgosRequest $request)
    {
        $input = $request->all();

        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->create($input);

        Flash::success('Plande Gestionde Riesgos saved successfully.');

        return redirect(route('plandeGestiondeRiesgos.index'));
    }

    /**
     * Display the specified PlandeGestiondeRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->findWithoutFail($id);

        if (empty($plandeGestiondeRiesgos)) {
            Flash::error('Plande Gestionde Riesgos not found');

            return redirect(route('plandeGestiondeRiesgos.index'));
        }

        return view('plande_gestionde_riesgos.show')->with('plandeGestiondeRiesgos', $plandeGestiondeRiesgos);
    }

    /**
     * Show the form for editing the specified PlandeGestiondeRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->findWithoutFail($id);
        $abono = TipoAbono::all()->pluck('nombre', 'id');
        $controlPlaga = TipoControlPlaga::all()->pluck('nombre', 'id');
        $cultivo = TipoCultivos::all()->pluck('nombre', 'id');
        $animale = TipoAnimales::all()->pluck('nombre', 'id');
        $origenIngreso = OrigenIngresos::all()->pluck('nombre', 'id');
        $agricultura = Agricultura::all()->pluck('nombre', 'id');
        $amenaza = amenazas::all()->pluck('nombre', 'id');
        $vulnerabilidade = vulnerabilidades::all()->pluck('nombre', 'id');

        if (empty($plandeGestiondeRiesgos)) {
            Flash::error('Plande Gestionde Riesgos not found');

            return redirect(route('plandeGestiondeRiesgos.index'));
        }

        return view('plande_gestionde_riesgos.edit')->with('plandeGestiondeRiesgos', $plandeGestiondeRiesgos)
        ->with('abono', $abono)
        ->with('controlPlaga', $controlPlaga)
        ->with('cultivos', $cultivos)
        ->with('animales', $animales)
        ->with('origenIngresos', $origenIngresos)
        ->with('agricultura', $agricultura)
        ->with('amenazas', $amenazas)
        ->with('vulnerabilidades', $vulnerabilidades);
    }



    /**
     * Update the specified PlandeGestiondeRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdatePlandeGestiondeRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlandeGestiondeRiesgosRequest $request)
    {
        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->findWithoutFail($id);

        if (empty($plandeGestiondeRiesgos)) {
            Flash::error('Plande Gestionde Riesgos not found');

            return redirect(route('plandeGestiondeRiesgos.index'));
        }

        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->update($request->all(), $id);

        Flash::success('Plande Gestionde Riesgos updated successfully.');

        return redirect(route('plandeGestiondeRiesgos.index'));
    }

    /**
     * Remove the specified PlandeGestiondeRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $plandeGestiondeRiesgos = $this->plandeGestiondeRiesgosRepository->findWithoutFail($id);

        if (empty($plandeGestiondeRiesgos)) {
            Flash::error('Plande Gestionde Riesgos not found');

            return redirect(route('plandeGestiondeRiesgos.index'));
        }

        $this->plandeGestiondeRiesgosRepository->delete($id);

        Flash::success('Plande Gestionde Riesgos deleted successfully.');

        return redirect(route('plandeGestiondeRiesgos.index'));
    }
}
