<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanGestionRiesgosRequest;
use App\Http\Requests\UpdatePlanGestionRiesgosRequest;
use App\Repositories\PlanGestionRiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanGestionRiesgosController extends AppBaseController
{
    /** @var  PlanGestionRiesgosRepository */
    private $planGestionRiesgosRepository;

    public function __construct(PlanGestionRiesgosRepository $planGestionRiesgosRepo)
    {
        $this->planGestionRiesgosRepository = $planGestionRiesgosRepo;
    }

    /**
     * Display a listing of the PlanGestionRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planGestionRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $planGestionRiesgos = $this->planGestionRiesgosRepository->all();

        return view('plan_gestion_riesgos.index')
            ->with('planGestionRiesgos', $planGestionRiesgos);
    }

    /**
     * Show the form for creating a new PlanGestionRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_gestion_riesgos.create');
    }

    /**
     * Store a newly created PlanGestionRiesgos in storage.
     *
     * @param CreatePlanGestionRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanGestionRiesgosRequest $request)
    {
        $input = $request->all();

        $planGestionRiesgos = $this->planGestionRiesgosRepository->create($input);

        Flash::success('Plan Gestion Riesgos saved successfully.');

        return redirect(route('planGestionRiesgos.index'));
    }

    /**
     * Display the specified PlanGestionRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planGestionRiesgos = $this->planGestionRiesgosRepository->findWithoutFail($id);

        if (empty($planGestionRiesgos)) {
            Flash::error('Plan Gestion Riesgos not found');

            return redirect(route('planGestionRiesgos.index'));
        }

        return view('plan_gestion_riesgos.show')->with('planGestionRiesgos', $planGestionRiesgos);
    }

    /**
     * Show the form for editing the specified PlanGestionRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planGestionRiesgos = $this->planGestionRiesgosRepository->findWithoutFail($id);

        if (empty($planGestionRiesgos)) {
            Flash::error('Plan Gestion Riesgos not found');

            return redirect(route('planGestionRiesgos.index'));
        }

        return view('plan_gestion_riesgos.edit')->with('planGestionRiesgos', $planGestionRiesgos);
    }

    /**
     * Update the specified PlanGestionRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanGestionRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanGestionRiesgosRequest $request)
    {
        $planGestionRiesgos = $this->planGestionRiesgosRepository->findWithoutFail($id);

        if (empty($planGestionRiesgos)) {
            Flash::error('Plan Gestion Riesgos not found');

            return redirect(route('planGestionRiesgos.index'));
        }

        $planGestionRiesgos = $this->planGestionRiesgosRepository->update($request->all(), $id);

        Flash::success('Plan Gestion Riesgos updated successfully.');

        return redirect(route('planGestionRiesgos.index'));
    }

    /**
     * Remove the specified PlanGestionRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planGestionRiesgos = $this->planGestionRiesgosRepository->findWithoutFail($id);

        if (empty($planGestionRiesgos)) {
            Flash::error('Plan Gestion Riesgos not found');

            return redirect(route('planGestionRiesgos.index'));
        }

        $this->planGestionRiesgosRepository->delete($id);

        Flash::success('Plan Gestion Riesgos deleted successfully.');

        return redirect(route('planGestionRiesgos.index'));
    }
}
