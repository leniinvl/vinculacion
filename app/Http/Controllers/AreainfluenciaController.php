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
use App\Models\TendenciaTierra;
use App\Models\Abastecimientoagua;
use App\Models\TipoTerreno;
use App\Models\CalidadAire;
use App\Models\Clima;
use App\Models\PermeabilidadSuelo;
use App\Models\TipoSuelo;
use App\Models\CalidadSuelo;

class AreainfluenciaController extends AppBaseController
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
    //cambio 1
    public function create()
    {
        $abastecimientoagua = Abastecimientoagua::all()->pluck('nombre','id');
        $tendenciatierra= TendenciaTierra::all()->pluck('nombre','id');
        $tipoterreno = TipoTerreno::all()->pluck('nombre','id');
        $calidadaire = CalidadAire::all()->pluck('nombre','id');
        $climas = Clima::all()->pluck('nombre','id');
        $permeabilidadsuelos = PermeabilidadSuelo::all()->pluck('nombre','id');
        $tiposuelo = TipoSuelo::all()->pluck('nombre','id');
        $calidadsuelo = CalidadSuelo::all()->pluck('nombre','id');
        $ruidos = Ruido::all()->pluck('nombre', 'id');
        $recirculacionaires = RecirculacionAire::all()->pluck('nombre', 'id');
      
        return view('areainfluencias.create', [
            'ruidos' => $ruidos,
            'recirculacionaires' => $recirculacionaires,
            'tiposuelo' => $tiposuelo,
            'calidadsuelo' => $calidadsuelo,
            'climas' => $climas,
            'permeabilidadsuelos' => $permeabilidadsuelos,
            'tipoterreno' => $tipoterreno,
            'calidadaire' => $calidadaire,
            'abastecimientoagua' => $abastecimientoagua,
            'tendenciatierra' => $tendenciatierra
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
    //2
    public function edit($id)
    {
        $areainfluencia = $this->areainfluenciaRepository->findWithoutFail($id);
        $abastecimientoagua= Abastecimientoagua::all()->pluck('nombre','id');
        $tendenciatierra= TendenciaTierra::all()->pluck('nombre','id');
        $tipoterreno = TipoTerreno::all()->pluck('nombre','id');
        $calidadaire = CalidadAire::all()->pluck('nombre','id');
        $ruidos = Ruido::all()->pluck('nombre', 'id');
        $recirculacionaires = RecirculacionAire::all()->pluck('nombre', 'id');
        $climas = Clima::all()->pluck('nombre','id');
        $permeabilidadsuelos = PermeabilidadSuelo::all()->pluck('nombre','id');
        $tiposuelo = TipoSuelo::all()->pluck('nombre','id');
        $calidadsuelo = CalidadSuelo::all()->pluck('nombre','id');

        if (empty($areainfluencia)) {
            Flash::error('Areainfluencia not found');

            return redirect(route('areainfluencias.index'));
        }

        return view('areainfluencias.edit')
          ->with('areainfluencia', $areainfluencia)
          ->with('tiposuelo', $tiposuelo)
          ->with('calidadsuelo', $calidadsuelo)
          ->with('climas', $climas)
          ->with('permeabilidadsuelos', $permeabilidadsuelos)
          ->with('ruidos', $ruidos)
          ->with('recirculacionaires', $recirculacionaires)
          ->with('tipoterreno', $tipoterreno)
          ->with('calidadaire', $calidadaire)
          ->with('abastecimientoagua', $abastecimientoagua)
          ->with('tendenciatierra', $tendenciatierra);
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
