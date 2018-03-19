<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest;
use App\Http\Requests\UpdatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest;
use App\Repositories\PlanDeGestionDeRiesgos_Has_TipoAnimalesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlanDeGestionDeRiesgos_Has_TipoAnimalesController extends AppBaseController
{
    /** @var  PlanDeGestionDeRiesgos_Has_TipoAnimalesRepository */
    private $planDeGestionDeRiesgosHasTipoAnimalesRepository;

    public function __construct(PlanDeGestionDeRiesgos_Has_TipoAnimalesRepository $planDeGestionDeRiesgosHasTipoAnimalesRepo)
    {
        $this->planDeGestionDeRiesgosHasTipoAnimalesRepository = $planDeGestionDeRiesgosHasTipoAnimalesRepo;
    }

    /**
     * Display a listing of the PlanDeGestionDeRiesgos_Has_TipoAnimales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->pushCriteria(new RequestCriteria($request));
        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->all();

        return view('plan_de_gestion_de_riesgos__has__tipo_animales.index')
            ->with('planDeGestionDeRiesgosHasTipoAnimales', $planDeGestionDeRiesgosHasTipoAnimales);
    }

    /**
     * Show the form for creating a new PlanDeGestionDeRiesgos_Has_TipoAnimales.
     *
     * @return Response
     */
    public function create()
    {
        return view('plan_de_gestion_de_riesgos__has__tipo_animales.create');
    }

    /**
     * Store a newly created PlanDeGestionDeRiesgos_Has_TipoAnimales in storage.
     *
     * @param CreatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest $request)
    {
        $input = $request->all();

        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->create($input);

        Flash::success('Plan De Gestion De Riesgos  Has  Tipo Animales saved successfully.');

        return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
    }

    /**
     * Display the specified PlanDeGestionDeRiesgos_Has_TipoAnimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planDeGestionDeRiesgosHasTipoAnimales)) {
            Flash::error('Plan De Gestion De Riesgos  Has  Tipo Animales not found');

            return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
        }

        return view('plan_de_gestion_de_riesgos__has__tipo_animales.show')->with('planDeGestionDeRiesgosHasTipoAnimales', $planDeGestionDeRiesgosHasTipoAnimales);
    }

    /**
     * Show the form for editing the specified PlanDeGestionDeRiesgos_Has_TipoAnimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planDeGestionDeRiesgosHasTipoAnimales)) {
            Flash::error('Plan De Gestion De Riesgos  Has  Tipo Animales not found');

            return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
        }

        return view('plan_de_gestion_de_riesgos__has__tipo_animales.edit')->with('planDeGestionDeRiesgosHasTipoAnimales', $planDeGestionDeRiesgosHasTipoAnimales);
    }

    /**
     * Update the specified PlanDeGestionDeRiesgos_Has_TipoAnimales in storage.
     *
     * @param  int              $id
     * @param UpdatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest $request)
    {
        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planDeGestionDeRiesgosHasTipoAnimales)) {
            Flash::error('Plan De Gestion De Riesgos  Has  Tipo Animales not found');

            return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
        }

        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->update($request->all(), $id);

        Flash::success('Plan De Gestion De Riesgos  Has  Tipo Animales updated successfully.');

        return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
    }

    /**
     * Remove the specified PlanDeGestionDeRiesgos_Has_TipoAnimales from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planDeGestionDeRiesgosHasTipoAnimales = $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->findWithoutFail($id);

        if (empty($planDeGestionDeRiesgosHasTipoAnimales)) {
            Flash::error('Plan De Gestion De Riesgos  Has  Tipo Animales not found');

            return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
        }

        $this->planDeGestionDeRiesgosHasTipoAnimalesRepository->delete($id);

        Flash::success('Plan De Gestion De Riesgos  Has  Tipo Animales deleted successfully.');

        return redirect(route('planDeGestionDeRiesgosHasTipoAnimales.index'));
    }
}
