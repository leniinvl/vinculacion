<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateareainfluenciaRequest;
use App\Http\Requests\UpdateareainfluenciaRequest;
use App\Models\RecirculacionAire;
use App\Models\Ruido;
use App\Repositories\areainfluenciaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\ManejoAmbiental;
use App\Models\TipoTerreno;
use App\Models\Calidadsuelo;
use App\Models\NivelDeTrafico;
use App\Models\Clima;
use App\Models\Ecosistema;
use App\Models\TendenciaTierra;
use App\Models\EvacuacionAguaLluvia;
use App\Models\ConsolidacionAreaInfluencia;
use App\Models\CalidadAire;
use App\Models\TipoSuelo;
use App\Models\Precipitaciones;
use App\Models\PermeabilidadSuelo;
use App\Models\CondicionesDrenaje;
use App\Models\OrganizacionSocial;
use App\Models\Abastecimientoagua;
use App\Models\CaracteristicasEtnicas;
use App\Models\EvacuacionAguasServidas;


class areainfluenciaController extends AppBaseController
{
    /** @var  areainfluenciaRepository */
    private $areainfluenciaRepository;

    public function __construct(areainfluenciaRepository $areainfluenciaRepo)
    {
        $this->areainfluenciaRepository = $areainfluenciaRepo;
    }

    /**
     * Display a listing of the areainfluencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainfluenciaRepository->pushCriteria(new RequestCriteria($request));
        $areainfluencias = $this->areainfluenciaRepository->all();

        return view('areainfluencias.index')
            ->with('areainfluencias', $areainfluencias);
    }

    /**
     * Show the form for creating a new areainfluencia.
     *
     * @return Response
     */
    public function create()
    {
        $ruidos             = Ruido::all()->pluck('nombre', 'id');
        $recirculacionaires = RecirculacionAire::all()->pluck('nombre', 'id');

        $manejoambiental = ManejoAmbiental::all()->pluck('nombre', 'id');
        $tipoterreno = TipoTerreno::all()->pluck('nombre', 'id');
        $calidadsuelo = Calidadsuelo::all()->pluck('nombre', 'id');
        $nivelfratico = NivelDeTrafico::all()->pluck('nombre', 'id');
        $clima = Clima::all()->pluck('nombre', 'id');
        $ecosistema = Ecosistema::all()->pluck('nombre', 'id');
        $tendenciatierra = TendenciaTierra::all()->pluck('nombre', 'id');
        $evacuacionagualluvia = EvacuacionAguaLluvia::all()->pluck('nombre', 'id');
        $consolidacionareainfluencia = ConsolidacionAreaInfluencia::all()->pluck('nombre', 'id');
        $calidadaire = CalidadAire::all()->pluck('nombre', 'id');
        $tiposuelo = TipoSuelo::all()->pluck('nombre', 'id');
        $precipitaciones = Precipitaciones::all()->pluck('nombre', 'id');
        $permeabilidadsuelo = PermeabilidadSuelo::all()->pluck('nombre', 'id');
        $condicionesdrenaje = CondicionesDrenaje::all()->pluck('nombre', 'id');
        $organizacionsocial = OrganizacionSocial::all()->pluck('nombre', 'id');
        $abastecimientoagua = Abastecimientoagua::all()->pluck('nombre', 'id');
        $caracteristicasetnicas = CaracteristicasEtnicas::all()->pluck('nombre', 'id');
        $evacuacionaguasservidas = EvacuacionAguasServidas::all()->pluck('nombre', 'id');

        return view('areainfluencias.create', [
            'ruidos' => $ruidos,
            'recirculacionaires' => $recirculacionaires,
            'manejoambiental' => $manejoambiental,
            'tipoterreno' => $tipoterreno,
            'calidadsuelo' => $calidadsuelo,
            'nivelfratico' => $nivelfratico,
            'clima' => $clima,
            'ecosistema' => $ecosistema,
            'tendenciatierra' => $tendenciatierra,
            'evacuacionagualluvia' => $evacuacionagualluvia,
            'consolidacionareainfluencia' => $consolidacionareainfluencia,
            'calidadaire' => $calidadaire,
            'tiposuelo' => $tiposuelo,
            'precipitaciones' => $precipitaciones,
            'permeabilidadsuelo' => $permeabilidadsuelo,
            'condicionesdrenaje' => $condicionesdrenaje,
            'organizacionsocial' => $organizacionsocial,
            'abastecimientoagua' => $abastecimientoagua,
            'caracteristicasetnicas' => $caracteristicasetnicas,
            'evacuacionaguasservidas' => $evacuacionaguasservidas
        ]);
    }

    /**
     * Store a newly created areainfluencia in storage.
     *
     * @param CreateareainfluenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateareainfluenciaRequest $request)
    {
        $input = $request->all();

        $areainfluencia = $this->areainfluenciaRepository->create($input);

        Flash::success('Areainfluencia saved successfully.');

        return redirect(route('areainfluencias.index'));
    }

    /**
     * Display the specified areainfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        return view('areainfluencias.show')->with('areainfluencia', $areainfluencia);
    }

    /**
     * Show the form for editing the specified areainfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);
        $ruidos             = Ruido::all()->pluck('nombre', 'id');
        $recirculacionaires = RecirculacionAire::all()->pluck('nombre', 'id');
        $manejoambiental = ManejoAmbiental::all()->pluck('nombre', 'id');
        $tipoterreno = TipoTerreno::all()->pluck('nombre', 'id');
        $calidadsuelo = Calidadsuelo::all()->pluck('nombre', 'id');
        $nivelfratico = NivelDeTrafico::all()->pluck('nombre', 'id');
        $clima = Clima::all()->pluck('nombre', 'id');
        $ecosistema = Ecosistema::all()->pluck('nombre', 'id');
        $tendenciatierra = TendenciaTierra::all()->pluck('nombre', 'id');
        $evacuacionagualluvia = EvacuacionAguaLluvia::all()->pluck('nombre', 'id');
        $consolidacionareainfluencia = ConsolidacionAreaInfluencia::all()->pluck('nombre', 'id');
        $calidadaire = CalidadAire::all()->pluck('nombre', 'id');
        $tiposuelo = TipoSuelo::all()->pluck('nombre', 'id');
        $precipitaciones = Precipitaciones::all()->pluck('nombre', 'id');
        $permeabilidadsuelo = PermeabilidadSuelo::all()->pluck('nombre', 'id');
        $condicionesdrenaje = CondicionesDrenaje::all()->pluck('nombre', 'id');
        $organizacionsocial = OrganizacionSocial::all()->pluck('nombre', 'id');
        $abastecimientoagua = Abastecimientoagua::all()->pluck('nombre', 'id');
        $caracteristicasetnicas = CaracteristicasEtnicas::all()->pluck('nombre', 'id');
        $evacuacionaguasservidas = EvacuacionAguasServidas::all()->pluck('nombre', 'id');

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        return view('areainfluencias.edit')->with('areainfluencia', $areainfluencia)
          ->with('ruidos', $ruidos)
          ->with('recirculacionaires', $recirculacionaires)
          ->with('manejoambiental', $manejoambiental)
          ->with('tipoterreno', $tipoterreno)
          ->with('calidadsuelo', $calidadsuelo)
          ->with('nivelfratico', $nivelfratico)
          ->with('clima', $clima)
          ->with('ecosistema', $ecosistema)
          ->with('tendenciatierra', $tendenciatierra)
          ->with('evacuacionagualluvia', $evacuacionagualluvia)
          ->with('consolidacionareainfluencia', $consolidacionareainfluencia)
          ->with('calidadaire', $calidadaire)
          ->with('tiposuelo', $tiposuelo)
          ->with('precipitaciones', $precipitaciones)
          ->with('permeabilidadsuelo', $permeabilidadsuelo)
          ->with('condicionesdrenaje', $condicionesdrenaje)
          ->with('organizacionsocial', $organizacionsocial)
          ->with('abastecimientoagua', $abastecimientoagua)
          ->with('caracteristicasetnicas', $caracteristicasetnicas)
          ->with('evacuacionaguasservidas', $evacuacionaguasservidas);
    }

    /**
     * Update the specified areainfluencia in storage.
     *
     * @param  int              $id
     * @param UpdateareainfluenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateareainfluenciaRequest $request)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        $areainfluencia = $this->areainfluenciaRepository->update($request->all(), $id);

        Flash::success('Areainfluencia updated successfully.');

        return redirect(route('areainfluencias.index'));
    }

    /**
     * Remove the specified areainfluencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        $this->areainfluenciaRepository->delete($id);

        Flash::success('Areainfluencia deleted successfully.');

        return redirect(route('areainfluencias.index'));
    }
}
