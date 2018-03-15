<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanRiesgos_Has_TipoCultivosRequest;
use App\Http\Requests\UpdatePlanRiesgos_Has_TipoCultivosRequest;
use App\Repositories\PlanRiesgos_Has_TipoCultivosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanRiesgos_Has_TipoCultivosController extends AppBaseController
{
    /** @var  PlanRiesgos_Has_TipoCultivosRepository */
    private $planRiesgosHasTipoCultivosRepository;

    public function __construct(PlanRiesgos_Has_TipoCultivosRepository $planRiesgosHasTipoCultivosRepo)
    {
        $this->planRiesgosHasTipoCultivosRepository = $planRiesgosHasTipoCultivosRepo;
    }

    /**
     * Display a listing of the PlanRiesgos_Has_TipoCultivos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosHasTipoCultivosRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->all();

        return view('plan_riesgos__has__tipo_cultivos.index')
            ->with('planRiesgosHasTipoCultivos', $planRiesgosHasTipoCultivos);
    }

    /**
     * Show the form for creating a new PlanRiesgos_Has_TipoCultivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_riesgos__has__tipo_cultivos.create');
    }

    /**
     * Store a newly created PlanRiesgos_Has_TipoCultivos in storage.
     *
     * @param CreatePlanRiesgos_Has_TipoCultivosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgos_Has_TipoCultivosRequest $request)
    {
        $input = $request->all();

        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->create($input);

        Flash::success('Plan Riesgos  Has  Tipo Cultivos
guardado exitosamente.');

        return redirect(route('planRiesgosHasTipoCultivos.index'));
    }

    /**
     * Display the specified PlanRiesgos_Has_TipoCultivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoCultivos)) {
            Flash::error('Plan Riesgos  Has  Tipo Cultivos not found');

            return redirect(route('planRiesgosHasTipoCultivos.index'));
        }

        return view('plan_riesgos__has__tipo_cultivos.show')->with('planRiesgosHasTipoCultivos', $planRiesgosHasTipoCultivos);
    }

    /**
     * Show the form for editing the specified PlanRiesgos_Has_TipoCultivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoCultivos)) {
            Flash::error('Plan Riesgos  Has  Tipo Cultivos not found');

            return redirect(route('planRiesgosHasTipoCultivos.index'));
        }

        return view('plan_riesgos__has__tipo_cultivos.edit')->with('planRiesgosHasTipoCultivos', $planRiesgosHasTipoCultivos);
    }

    /**
     * Update the specified PlanRiesgos_Has_TipoCultivos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgos_Has_TipoCultivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgos_Has_TipoCultivosRequest $request)
    {
        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoCultivos)) {
            Flash::error('Plan Riesgos  Has  Tipo Cultivos not found');

            return redirect(route('planRiesgosHasTipoCultivos.index'));
        }

        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos  Has  Tipo Cultivos updated successfully.');

        return redirect(route('planRiesgosHasTipoCultivos.index'));
    }

    /**
     * Remove the specified PlanRiesgos_Has_TipoCultivos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgosHasTipoCultivos = $this->planRiesgosHasTipoCultivosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoCultivos)) {
            Flash::error('Plan Riesgos  Has  Tipo Cultivos not found');

            return redirect(route('planRiesgosHasTipoCultivos.index'));
        }

        $this->planRiesgosHasTipoCultivosRepository->delete($id);

        Flash::success('Plan Riesgos  Has  Tipo Cultivos deleted successfully.');

        return redirect(route('planRiesgosHasTipoCultivos.index'));
    }
}
