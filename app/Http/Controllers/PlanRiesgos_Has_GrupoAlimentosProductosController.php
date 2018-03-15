<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanRiesgos_Has_GrupoAlimentosProductosRequest;
use App\Http\Requests\UpdatePlanRiesgos_Has_GrupoAlimentosProductosRequest;
use App\Repositories\PlanRiesgos_Has_GrupoAlimentosProductosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanRiesgos_Has_GrupoAlimentosProductosController extends AppBaseController
{
    /** @var  PlanRiesgos_Has_GrupoAlimentosProductosRepository */
    private $planRiesgosHasGrupoAlimentosProductosRepository;

    public function __construct(PlanRiesgos_Has_GrupoAlimentosProductosRepository $planRiesgosHasGrupoAlimentosProductosRepo)
    {
        $this->planRiesgosHasGrupoAlimentosProductosRepository = $planRiesgosHasGrupoAlimentosProductosRepo;
    }

    /**
     * Display a listing of the PlanRiesgos_Has_GrupoAlimentosProductos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planRiesgosHasGrupoAlimentosProductosRepository->pushCriteria(new RequestCriteria($request));
        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->all();

        return view('plan_riesgos__has__grupo_alimentos_productos.index')
            ->with('planRiesgosHasGrupoAlimentosProductos', $planRiesgosHasGrupoAlimentosProductos);
    }

    /**
     * Show the form for creating a new PlanRiesgos_Has_GrupoAlimentosProductos.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_riesgos__has__grupo_alimentos_productos.create');
    }

    /**
     * Store a newly created PlanRiesgos_Has_GrupoAlimentosProductos in storage.
     *
     * @param CreatePlanRiesgos_Has_GrupoAlimentosProductosRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanRiesgos_Has_GrupoAlimentosProductosRequest $request)
    {
        $input = $request->all();

        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->create($input);

        Flash::success('Plan Riesgos  Has  Grupo Alimentos Productos
guardado exitosamente.');

        return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
    }

    /**
     * Display the specified PlanRiesgos_Has_GrupoAlimentosProductos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasGrupoAlimentosProductos)) {
            Flash::error('Plan Riesgos  Has  Grupo Alimentos Productos not found');

            return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
        }

        return view('plan_riesgos__has__grupo_alimentos_productos.show')->with('planRiesgosHasGrupoAlimentosProductos', $planRiesgosHasGrupoAlimentosProductos);
    }

    /**
     * Show the form for editing the specified PlanRiesgos_Has_GrupoAlimentosProductos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasGrupoAlimentosProductos)) {
            Flash::error('Plan Riesgos  Has  Grupo Alimentos Productos not found');

            return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
        }

        return view('plan_riesgos__has__grupo_alimentos_productos.edit')->with('planRiesgosHasGrupoAlimentosProductos', $planRiesgosHasGrupoAlimentosProductos);
    }

    /**
     * Update the specified PlanRiesgos_Has_GrupoAlimentosProductos in storage.
     *
     * @param  int              $id
     * @param UpdatePlanRiesgos_Has_GrupoAlimentosProductosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanRiesgos_Has_GrupoAlimentosProductosRequest $request)
    {
        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasGrupoAlimentosProductos)) {
            Flash::error('Plan Riesgos  Has  Grupo Alimentos Productos not found');

            return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
        }

        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->update($request->all(), $id);

        Flash::success('Plan Riesgos  Has  Grupo Alimentos Productos updated successfully.');

        return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
    }

    /**
     * Remove the specified PlanRiesgos_Has_GrupoAlimentosProductos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planRiesgosHasGrupoAlimentosProductos = $this->planRiesgosHasGrupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($planRiesgosHasGrupoAlimentosProductos)) {
            Flash::error('Plan Riesgos  Has  Grupo Alimentos Productos not found');

            return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
        }

        $this->planRiesgosHasGrupoAlimentosProductosRepository->delete($id);

        Flash::success('Plan Riesgos  Has  Grupo Alimentos Productos deleted successfully.');

        return redirect(route('planRiesgosHasGrupoAlimentosProductos.index'));
    }
}
