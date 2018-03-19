<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanRiesgos_Has_OrigenIngresosRequest;
use App\Http\Requests\UpdatePlanRiesgos_Has_OrigenIngresosRequest;
use App\Repositories\PlanRiesgos_Has_OrigenIngresosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanRiesgos_Has_OrigenIngresosController extends AppBaseController
{
    /** @var  PlanRiesgos_Has_OrigenIngresosRepository */
    private $planRiesgosHasOrigenIngresosRepository;

    public function __construct(PlanRiesgos_Has_OrigenIngresosRepository $planRiesgosHasOrigenIngresosRepo)
    {
        $this->planRiesgosHasOrigenIngresosRepository = $planRiesgosHasOrigenIngresosRepo;
    }

    /**
     * Display a listing of the PlanRiesgos_Has_OrigenIngresos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosHasOrigenIngresosRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->all();

        return view('plan_riesgos__has__origen_ingresos.index')
            ->with('planRiesgosHasOrigenIngresos', $planRiesgosHasOrigenIngresos);
    }

    /**
     * Show the form for creating a new PlanRiesgos_Has_OrigenIngresos.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_riesgos__has__origen_ingresos.create');
    }

    /**
     * Store a newly created PlanRiesgos_Has_OrigenIngresos in storage.
     *
     * @param CreatePlanRiesgos_Has_OrigenIngresosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgos_Has_OrigenIngresosRequest $request)
    {
        $input = $request->all();

        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->create($input);

        Flash::success('Plan Riesgos  Has  Origen Ingresos saved successfully.');

        return redirect(route('planRiesgosHasOrigenIngresos.index'));
    }

    /**
     * Display the specified PlanRiesgos_Has_OrigenIngresos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasOrigenIngresos)) {
            Flash::error('Plan Riesgos  Has  Origen Ingresos not found');

            return redirect(route('planRiesgosHasOrigenIngresos.index'));
        }

        return view('plan_riesgos__has__origen_ingresos.show')->with('planRiesgosHasOrigenIngresos', $planRiesgosHasOrigenIngresos);
    }

    /**
     * Show the form for editing the specified PlanRiesgos_Has_OrigenIngresos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasOrigenIngresos)) {
            Flash::error('Plan Riesgos  Has  Origen Ingresos not found');

            return redirect(route('planRiesgosHasOrigenIngresos.index'));
        }

        return view('plan_riesgos__has__origen_ingresos.edit')->with('planRiesgosHasOrigenIngresos', $planRiesgosHasOrigenIngresos);
    }

    /**
     * Update the specified PlanRiesgos_Has_OrigenIngresos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgos_Has_OrigenIngresosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgos_Has_OrigenIngresosRequest $request)
    {
        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasOrigenIngresos)) {
            Flash::error('Plan Riesgos  Has  Origen Ingresos not found');

            return redirect(route('planRiesgosHasOrigenIngresos.index'));
        }

        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos  Has  Origen Ingresos updated successfully.');

        return redirect(route('planRiesgosHasOrigenIngresos.index'));
    }

    /**
     * Remove the specified PlanRiesgos_Has_OrigenIngresos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgosHasOrigenIngresos = $this->planRiesgosHasOrigenIngresosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasOrigenIngresos)) {
            Flash::error('Plan Riesgos  Has  Origen Ingresos not found');

            return redirect(route('planRiesgosHasOrigenIngresos.index'));
        }

        $this->planRiesgosHasOrigenIngresosRepository->delete($id);

        Flash::success('Plan Riesgos  Has  Origen Ingresos deleted successfully.');

        return redirect(route('planRiesgosHasOrigenIngresos.index'));
    }
}
