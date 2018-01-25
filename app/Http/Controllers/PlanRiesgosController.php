<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanRiesgosRequest;
use App\Http\Requests\UpdatePlanRiesgosRequest;
use App\Repositories\PlanRiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoAbono;
use App\Models\TipoControlPlaga;

class PlanRiesgosController extends AppBaseController
{
    /** @var  PlanRiesgosRepository */
    private $planRiesgosRepository;

    public function __construct(PlanRiesgosRepository $planRiesgosRepo)
    {
        $this->planRiesgosRepository = $planRiesgosRepo;
    }

    /**
     * Display a listing of the PlanRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgos = $this->planRiesgosRepository->all();

        return view('plan_riesgos.index')
            ->with('planRiesgos', $planRiesgos);
    }

    /**
     * Show the form for creating a new PlanRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        $tiposabono=TipoAbono::all()->pluck('nombre','id');
        $tiposcontrolplaga=TipoControlPlaga::all()->pluck('nombre','id');
        return view('plan_riesgos.create',['tiposabono'=>$tiposabono],['tiposcontrolplaga'=>$tiposcontrolplaga]);
    }

    /**
     * Store a newly created PlanRiesgos in storage.
     *
     * @param CreatePlanRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgosRequest $request)
    {
        $input = $request->all();

        $planRiesgos = $this->planRiesgosRepository->create($input);

        Flash::success('Plan Riesgos saved successfully.');

        return redirect(route('planRiesgos.index'));
    }

    /**
     * Display the specified PlanRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgos = $this->planRiesgosRepository->findWithoutFail($id);

        if (empty($planRiesgos)) {
            Flash::error('Plan Riesgos not found');

            return redirect(route('planRiesgos.index'));
        }

        return view('plan_riesgos.show')->with('planRiesgos', $planRiesgos);
    }

    /**
     * Show the form for editing the specified PlanRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tiposabono=TipoAbono::all()->pluck('nombre','id');
        $tiposcontrolplaga=TipoControlPlaga::all()->pluck('nombre','id');
        $planRiesgos = $this->planRiesgosRepository->findWithoutFail($id);

        if (empty($planRiesgos)) {
            Flash::error('Plan Riesgos not found');

            return redirect(route('planRiesgos.index'));
        }

        return view('plan_riesgos.edit')->with('planRiesgos', $planRiesgos)->with('tiposabono', $tiposabono)->with('tiposcontrolplaga', $tiposcontrolplaga);
    }

    /**
     * Update the specified PlanRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgosRequest $request)
    {
        $planRiesgos = $this->planRiesgosRepository->findWithoutFail($id);

        if (empty($planRiesgos)) {
            Flash::error('Plan Riesgos not found');

            return redirect(route('planRiesgos.index'));
        }

        $planRiesgos = $this->planRiesgosRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos updated successfully.');

        return redirect(route('planRiesgos.index'));
    }

    /**
     * Remove the specified PlanRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgos = $this->planRiesgosRepository->findWithoutFail($id);

        if (empty($planRiesgos)) {
            Flash::error('Plan Riesgos not found');

            return redirect(route('planRiesgos.index'));
        }

        $this->planRiesgosRepository->delete($id);

        Flash::success('Plan Riesgos deleted successfully.');

        return redirect(route('planRiesgos.index'));
    }
}
