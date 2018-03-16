<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanDeGestionDeRiesgosRequest;
use App\Http\Requests\UpdatePlanDeGestionDeRiesgosRequest;
use App\Models\TipoAbono;
use App\Models\TipoControlPlaga;
use App\Models\TipoCultivos;
use App\Repositories\PlanDeGestionDeRiesgosRepository;
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
            ->with('planDeGestionDeRiesgos', $planDeGestionDeRiesgos);
    }

    /**
     * Show the form for creating a new PlanDeGestionDeRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        $abono        = TipoAbono::all()->pluck('nombre', 'id');
        $controlPlaga = TipoControlPlaga::all()->pluck('nombre', 'id');
        $cultivo      = TipoCultivos::all()->pluck('nombre', 'id');
        return view('plan_de_gestion_de_riesgos.create', [
            'abono'        => $abono,
            'controlPlaga' => $controlPlaga,
            'cultivo'      => $cultivo,
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

        if (empty($planDeGestionDeRiesgos)) {
            Flash::error('Plan De Gestion De Riesgos not found');

            return redirect(route('planDeGestionDeRiesgos.index'));
        }

        return view('plan_de_gestion_de_riesgos.show')->with('planDeGestionDeRiesgos', $planDeGestionDeRiesgos);
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
        $abono                  = TipoAbono::all()->pluck('nombre', 'id');
        $controlPlaga           = TipoControlPlaga::all()->pluck('nombre', 'id');
        $cultivo                = TipoCultivos::all()->pluck('nombre', 'id');

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
}
