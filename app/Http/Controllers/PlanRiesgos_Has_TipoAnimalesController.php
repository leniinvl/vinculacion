<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanRiesgos_Has_TipoAnimalesRequest;
use App\Http\Requests\UpdatePlanRiesgos_Has_TipoAnimalesRequest;
use App\Repositories\PlanRiesgos_Has_TipoAnimalesRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanRiesgos_Has_TipoAnimalesController extends AppBaseController
{
    /** @var  PlanRiesgos_Has_TipoAnimalesRepository */
    private $planRiesgosHasTipoAnimalesRepository;

    public function __construct(PlanRiesgos_Has_TipoAnimalesRepository $planRiesgosHasTipoAnimalesRepo)
    {
        $this->planRiesgosHasTipoAnimalesRepository = $planRiesgosHasTipoAnimalesRepo;
    }

    /**
     * Display a listing of the PlanRiesgos_Has_TipoAnimales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosHasTipoAnimalesRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->all();

        return view('plan_riesgos__has__tipo_animales.index')
            ->with('planRiesgosHasTipoAnimales', $planRiesgosHasTipoAnimales);
    }

    /**
     * Show the form for creating a new PlanRiesgos_Has_TipoAnimales.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_riesgos__has__tipo_animales.create');
    }

    /**
     * Store a newly created PlanRiesgos_Has_TipoAnimales in storage.
     *
     * @param CreatePlanRiesgos_Has_TipoAnimalesRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgos_Has_TipoAnimalesRequest $request)
    {
        $input = $request->all();

        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->create($input);

        Flash::success('Plan Riesgos  Has  Tipo Animales saved successfully.');

        return redirect(route('planRiesgosHasTipoAnimales.index'));
    }

    /**
     * Display the specified PlanRiesgos_Has_TipoAnimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAnimales)) {
            Flash::error('Plan Riesgos  Has  Tipo Animales not found');

            return redirect(route('planRiesgosHasTipoAnimales.index'));
        }

        return view('plan_riesgos__has__tipo_animales.show')->with('planRiesgosHasTipoAnimales', $planRiesgosHasTipoAnimales);
    }

    /**
     * Show the form for editing the specified PlanRiesgos_Has_TipoAnimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAnimales)) {
            Flash::error('Plan Riesgos  Has  Tipo Animales not found');

            return redirect(route('planRiesgosHasTipoAnimales.index'));
        }

        return view('plan_riesgos__has__tipo_animales.edit')->with('planRiesgosHasTipoAnimales', $planRiesgosHasTipoAnimales);
    }

    /**
     * Update the specified PlanRiesgos_Has_TipoAnimales in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgos_Has_TipoAnimalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgos_Has_TipoAnimalesRequest $request)
    {
        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAnimales)) {
            Flash::error('Plan Riesgos  Has  Tipo Animales not found');

            return redirect(route('planRiesgosHasTipoAnimales.index'));
        }

        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos  Has  Tipo Animales updated successfully.');

        return redirect(route('planRiesgosHasTipoAnimales.index'));
    }

    /**
     * Remove the specified PlanRiesgos_Has_TipoAnimales from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgosHasTipoAnimales = $this->planRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAnimales)) {
            Flash::error('Plan Riesgos  Has  Tipo Animales not found');

            return redirect(route('planRiesgosHasTipoAnimales.index'));
        }

        $this->planRiesgosHasTipoAnimalesRepository->delete($id);

        Flash::success('Plan Riesgos  Has  Tipo Animales deleted successfully.');

        return redirect(route('planRiesgosHasTipoAnimales.index'));
    }
}
