<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanRiesgos_Has_TipoAgriculturaRequest;
use App\Http\Requests\UpdatePlanRiesgos_Has_TipoAgriculturaRequest;
use App\Repositories\PlanRiesgos_Has_TipoAgriculturaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanRiesgos_Has_TipoAgriculturaController extends AppBaseController
{
    /** @var  PlanRiesgos_Has_TipoAgriculturaRepository */
    private $planRiesgosHasTipoAgriculturaRepository;

    public function __construct(PlanRiesgos_Has_TipoAgriculturaRepository $planRiesgosHasTipoAgriculturaRepo)
    {
        $this->planRiesgosHasTipoAgriculturaRepository = $planRiesgosHasTipoAgriculturaRepo;
    }

    /**
     * Display a listing of the PlanRiesgos_Has_TipoAgricultura.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosHasTipoAgriculturaRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgosHasTipoAgriculturas = $this->planRiesgosHasTipoAgriculturaRepository->all();

        return view('plan_riesgos__has__tipo_agriculturas.index')
            ->with('planRiesgosHasTipoAgriculturas', $planRiesgosHasTipoAgriculturas);
    }

    /**
     * Show the form for creating a new PlanRiesgos_Has_TipoAgricultura.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_riesgos__has__tipo_agriculturas.create');
    }

    /**
     * Store a newly created PlanRiesgos_Has_TipoAgricultura in storage.
     *
     * @param CreatePlanRiesgos_Has_TipoAgriculturaRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgos_Has_TipoAgriculturaRequest $request)
    {
        $input = $request->all();

        $planRiesgosHasTipoAgricultura = $this->planRiesgosHasTipoAgriculturaRepository->create($input);

        Flash::success('Plan Riesgos  Has  Tipo Agricultura saved successfully.');

        return redirect(route('planRiesgosHasTipoAgriculturas.index'));
    }

    /**
     * Display the specified PlanRiesgos_Has_TipoAgricultura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgosHasTipoAgricultura = $this->planRiesgosHasTipoAgriculturaRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAgricultura)) {
            Flash::error('Plan Riesgos  Has  Tipo Agricultura not found');

            return redirect(route('planRiesgosHasTipoAgriculturas.index'));
        }

        return view('plan_riesgos__has__tipo_agriculturas.show')->with('planRiesgosHasTipoAgricultura', $planRiesgosHasTipoAgricultura);
    }

    /**
     * Show the form for editing the specified PlanRiesgos_Has_TipoAgricultura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planRiesgosHasTipoAgricultura = $this->planRiesgosHasTipoAgriculturaRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAgricultura)) {
            Flash::error('Plan Riesgos  Has  Tipo Agricultura not found');

            return redirect(route('planRiesgosHasTipoAgriculturas.index'));
        }

        return view('plan_riesgos__has__tipo_agriculturas.edit')->with('planRiesgosHasTipoAgricultura', $planRiesgosHasTipoAgricultura);
    }

    /**
     * Update the specified PlanRiesgos_Has_TipoAgricultura in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgos_Has_TipoAgriculturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgos_Has_TipoAgriculturaRequest $request)
    {
        $planRiesgosHasTipoAgricultura = $this->planRiesgosHasTipoAgriculturaRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAgricultura)) {
            Flash::error('Plan Riesgos  Has  Tipo Agricultura not found');

            return redirect(route('planRiesgosHasTipoAgriculturas.index'));
        }

        $planRiesgosHasTipoAgricultura = $this->planRiesgosHasTipoAgriculturaRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos  Has  Tipo Agricultura updated successfully.');

        return redirect(route('planRiesgosHasTipoAgriculturas.index'));
    }

    /**
     * Remove the specified PlanRiesgos_Has_TipoAgricultura from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgosHasTipoAgricultura = $this->planRiesgosHasTipoAgriculturaRepository->findWithoutFail($id);

        if (empty($planRiesgosHasTipoAgricultura)) {
            Flash::error('Plan Riesgos  Has  Tipo Agricultura not found');

            return redirect(route('planRiesgosHasTipoAgriculturas.index'));
        }

        $this->planRiesgosHasTipoAgriculturaRepository->delete($id);

        Flash::success('Plan Riesgos  Has  Tipo Agricultura deleted successfully.');

        return redirect(route('planRiesgosHasTipoAgriculturas.index'));
    }
}
