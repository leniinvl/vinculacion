<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanRiesgos_Has_TipoAlimentosRequest;
use App\Http\Requests\UpdatePlanRiesgos_Has_TipoAlimentosRequest;
use App\Repositories\PlanRiesgos_Has_TipoAlimentosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanRiesgos_Has_TipoAlimentosController extends AppBaseController
{
    /** @var  PlanRiesgos_Has_TipoAlimentosRepository */
    private $planRiesgosHasTipoAlimentosRepository;

    public function __construct(PlanRiesgos_Has_TipoAlimentosRepository $planRiesgosHasTipoAlimentosRepo)
    {
        $this->planRiesgosHasTipoAlimentosRepository = $planRiesgosHasTipoAlimentosRepo;
    }

    /**
     * Display a listing of the PlanRiesgos_Has_TipoAlimentos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosHasTipoAlimentosRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->all();

        return view('plan_riesgos__has__tipo_alimentos.index')
            ->with('planRiesgosHasTipoAlimentos', $planRiesgosHasTipoAlimentos);
    }

    /**
     * Show the form for creating a new PlanRiesgos_Has_TipoAlimentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_riesgos__has__tipo_alimentos.create');
    }

    /**
     * Store a newly created PlanRiesgos_Has_TipoAlimentos in storage.
     *
     * @param CreatePlanRiesgos_Has_TipoAlimentosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgos_Has_TipoAlimentosRequest $request)
    {
        $input = $request->all();

        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->create($input);

        Flash::success('Plan Riesgos  Has  Tipo Alimentos saved successfully.');

        return redirect(route('planRiesgosHasTipoAlimentos.index'));
    }

    /**
     * Display the specified PlanRiesgos_Has_TipoAlimentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAlimentos)) {
            Flash::error('Plan Riesgos  Has  Tipo Alimentos not found');

            return redirect(route('planRiesgosHasTipoAlimentos.index'));
        }

        return view('plan_riesgos__has__tipo_alimentos.show')->with('planRiesgosHasTipoAlimentos', $planRiesgosHasTipoAlimentos);
    }

    /**
     * Show the form for editing the specified PlanRiesgos_Has_TipoAlimentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAlimentos)) {
            Flash::error('Plan Riesgos  Has  Tipo Alimentos not found');

            return redirect(route('planRiesgosHasTipoAlimentos.index'));
        }

        return view('plan_riesgos__has__tipo_alimentos.edit')->with('planRiesgosHasTipoAlimentos', $planRiesgosHasTipoAlimentos);
    }

    /**
     * Update the specified PlanRiesgos_Has_TipoAlimentos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgos_Has_TipoAlimentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgos_Has_TipoAlimentosRequest $request)
    {
        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAlimentos)) {
            Flash::error('Plan Riesgos  Has  Tipo Alimentos not found');

            return redirect(route('planRiesgosHasTipoAlimentos.index'));
        }

        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos  Has  Tipo Alimentos updated successfully.');

        return redirect(route('planRiesgosHasTipoAlimentos.index'));
    }

    /**
     * Remove the specified PlanRiesgos_Has_TipoAlimentos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgosHasTipoAlimentos = $this->planRiesgosHasTipoAlimentosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAlimentos)) {
            Flash::error('Plan Riesgos  Has  Tipo Alimentos not found');

            return redirect(route('planRiesgosHasTipoAlimentos.index'));
        }

        $this->planRiesgosHasTipoAlimentosRepository->delete($id);

        Flash::success('Plan Riesgos  Has  Tipo Alimentos deleted successfully.');

        return redirect(route('planRiesgosHasTipoAlimentos.index'));
    }
}
