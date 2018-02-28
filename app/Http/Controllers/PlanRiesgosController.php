<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePlanRiesgosRequest;
use App\Http\Requests\UpdatePlanRiesgosRequest;
use App\Models\GrupoAlimentosProductos;
use App\Models\OrigenIngresos;
use App\Models\PlanRiesgos;
use App\Models\TipoAbono;
use App\Models\TipoAgricultura;
use App\Models\TipoAlimentos;
use App\Models\TipoAlimentosConsumo;
use App\Models\TipoAnimales;
use App\Models\TipoControlPlaga;
use App\Models\TipoCultivos;
use App\Models\unidadproduccion;
use App\Repositories\PlanRiesgosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

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
        $tiposabono         = TipoAbono::all()->pluck('nombre', 'id');
        $tiposcontrolplaga  = TipoControlPlaga::all()->pluck('nombre', 'id');
        $unidadesproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        return view('plan_riesgos.create', [
            'tiposabono'         => $tiposabono,
            'tiposcontrolplaga'  => $tiposcontrolplaga,
            'unidadesproduccion' => $unidadesproduccion,
        ]);
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
        $planRiesgos             = $this->planRiesgosRepository->findWithoutFail($id);
        $tipocultivos            = TipoCultivos::all()->pluck('nombre', 'id');
        $tipoalimentos           = TipoAlimentos::all()->pluck('nombre', 'id');
        $tipoanimales            = TipoAnimales::all()->pluck('nombre', 'id');
        $origeningresos          = OrigenIngresos::all()->pluck('nombre', 'id');
        $tipoalimentosconsumo    = TipoAlimentosConsumo::all()->pluck('nombre', 'id');
        $grupoalimentosproductos = GrupoAlimentosProductos::all()->pluck('nombre', 'id');
        $tipoagricultura         = TipoAgricultura::all()->pluck('nombre', 'id');

        if (empty($planRiesgos)) {
            Flash::error('Plan Riesgos not found');

            return redirect(route('planRiesgos.index'));
        }

        return view('plan_riesgos.show')->with('planRiesgos', $planRiesgos)
            ->with('tipocultivos', $tipocultivos)->with('tipoalimentos', $tipoalimentos)
            ->with('tipoalimentosconsumo', $tipoalimentosconsumo)->with('tipoanimales', $tipoanimales)->with('tipoagricultura', $tipoagricultura)
            ->with('origeningresos', $origeningresos)->with('grupoalimentosproductos', $grupoalimentosproductos);
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
        $tiposabono         = TipoAbono::all()->pluck('nombre', 'id');
        $tiposcontrolplaga  = TipoControlPlaga::all()->pluck('nombre', 'id');
        $unidadesproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        $planRiesgos        = $this->planRiesgosRepository->findWithoutFail($id);

        if (empty($planRiesgos)) {
            Flash::error('Plan Riesgos not found');

            return redirect(route('planRiesgos.index'));
        }

        return view('plan_riesgos.edit')->with('planRiesgos', $planRiesgos)->with('tiposabono', $tiposabono)->with('tiposcontrolplaga', $tiposcontrolplaga)->with('unidadesproduccion', $unidadesproduccion);
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

    public function storeTipoCultivos(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->tipoCultivos()->attach($request->TipoCultivos_id);

        Flash::success('PlanRiesgos  Has  Tipo Cultivos saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyTipoCultivos($idplanriesgos, $id)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->tipoCultivos()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function storeTipoAlimentos(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAlimentos()->attach($request->TipoAlimentos_id);

        Flash::success('PlanRiesgos  Has  Tipo Alimentos saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyTipoAlimentos($idplanriesgos, $id)
    {
        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAlimentos()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function storeTipoAlimentosConsumo(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAlimentosConsumos()->attach($request->TipoAlimentosConsumo_id);

        Flash::success('PlanRiesgos  Has  Tipo Alimentos Consumo saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyTipoAlimentosConsumo($idplanriesgos, $id)
    {
        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAlimentosConsumos()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function storeTipoAnimales(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAnimales()->attach($request->TipoAnimales_id);

        Flash::success('PlanRiesgos  Has  Tipo Animales saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyTipoAnimales($idplanriesgos, $id)
    {
        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAnimales()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function storeTipoAgricultura(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAgriculturas()->attach($request->TipoAgricultura_id);

        Flash::success('PlanRiesgos  Has  Tipo Agricultura saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyTipoAgricultura($idplanriesgos, $id)
    {
        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->TipoAgriculturas()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function storeOrigenIngresos(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->OrigenIngresos()->attach($request->OrigenIngresos_id);

        Flash::success('PlanRiesgos  Has  Origen Ingresos saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyOrigenIngresos($idplanriesgos, $id)
    {
        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->OrigenIngresos()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function storeGrupoAlimentosProductos(Request $request, $idplanriesgos)
    {

        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->GrupoAlimentosProductos()->attach($request->GrupoAlimentosProductos_id);

        Flash::success('PlanRiesgos  Has  Grupo Alimentos Productos saved successfully.');

        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

    public function destroyGrupoAlimentosProductos($idplanriesgos, $id)
    {
        $planriesgos = PlanRiesgos::find($idplanriesgos);
        $planriesgos->GrupoAlimentosProductos()->detach($id);
        return redirect(url('planRiesgos/' . $planriesgos->id));
    }

}
