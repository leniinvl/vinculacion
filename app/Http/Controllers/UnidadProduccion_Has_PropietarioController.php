<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUnidadProduccion_Has_PropietarioRequest;
use App\Http\Requests\UpdateUnidadProduccion_Has_PropietarioRequest;
use App\Repositories\UnidadProduccion_Has_PropietarioRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UnidadProduccion_Has_PropietarioController extends AppBaseController
{
    /** @var  UnidadProduccion_Has_PropietarioRepository */
    private $unidadProduccionHasPropietarioRepository;

    public function __construct(UnidadProduccion_Has_PropietarioRepository $unidadProduccionHasPropietarioRepo)
    {
        $this->unidadProduccionHasPropietarioRepository = $unidadProduccionHasPropietarioRepo;
    }

    /**
     * Display a listing of the UnidadProduccion_Has_Propietario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->unidadProduccionHasPropietarioRepository->pushCriteria(new RequestCriteria($request));
        $unidadProduccionHasPropietarios = $this->unidadProduccionHasPropietarioRepository->all();

        return view('unidad_produccion__has__propietarios.index')
            ->with('unidadProduccionHasPropietarios', $unidadProduccionHasPropietarios);
    }

    /**
     * Show the form for creating a new UnidadProduccion_Has_Propietario.
     *
     * @return Response
     */
    public function create()
    {
        return view('unidad_produccion__has__propietarios.create');
    }

    /**
     * Store a newly created UnidadProduccion_Has_Propietario in storage.
     *
     * @param CreateUnidadProduccion_Has_PropietarioRequest $request
     *
     * @return Response
     */
    public function store(CreateUnidadProduccion_Has_PropietarioRequest $request)
    {
        $input = $request->all();

        $unidadProduccionHasPropietario = $this->unidadProduccionHasPropietarioRepository->create($input);

        Flash::success('Unidad Produccion  Has  Propietario
guardado exitosamente.');

        return redirect(route('unidadProduccionHasPropietarios.index'));
    }

    /**
     * Display the specified UnidadProduccion_Has_Propietario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unidadProduccionHasPropietario = $this->unidadProduccionHasPropietarioRepository->findWithoutFail($id);

        if (empty($unidadProduccionHasPropietario)) {
            Flash::error('Unidad Produccion  Has  Propietario not found');

            return redirect(route('unidadProduccionHasPropietarios.index'));
        }

        return view('unidad_produccion__has__propietarios.show')->with('unidadProduccionHasPropietario', $unidadProduccionHasPropietario);
    }

    /**
     * Show the form for editing the specified UnidadProduccion_Has_Propietario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unidadProduccionHasPropietario = $this->unidadProduccionHasPropietarioRepository->findWithoutFail($id);

        if (empty($unidadProduccionHasPropietario)) {
            Flash::error('Unidad Produccion  Has  Propietario not found');

            return redirect(route('unidadProduccionHasPropietarios.index'));
        }

        return view('unidad_produccion__has__propietarios.edit')->with('unidadProduccionHasPropietario', $unidadProduccionHasPropietario);
    }

    /**
     * Update the specified UnidadProduccion_Has_Propietario in storage.
     *
     * @param  int              $id
     * @param UpdateUnidadProduccion_Has_PropietarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUnidadProduccion_Has_PropietarioRequest $request)
    {
        $unidadProduccionHasPropietario = $this->unidadProduccionHasPropietarioRepository->findWithoutFail($id);

        if (empty($unidadProduccionHasPropietario)) {
            Flash::error('Unidad Produccion  Has  Propietario not found');

            return redirect(route('unidadProduccionHasPropietarios.index'));
        }

        $unidadProduccionHasPropietario = $this->unidadProduccionHasPropietarioRepository->update($request->all(), $id);

        Flash::success('Unidad Produccion  Has  Propietario updated successfully.');

        return redirect(route('unidadProduccionHasPropietarios.index'));
    }

    /**
     * Remove the specified UnidadProduccion_Has_Propietario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unidadProduccionHasPropietario = $this->unidadProduccionHasPropietarioRepository->findWithoutFail($id);

        if (empty($unidadProduccionHasPropietario)) {
            Flash::error('Unidad Produccion  Has  Propietario not found');

            return redirect(route('unidadProduccionHasPropietarios.index'));
        }

        $this->unidadProduccionHasPropietarioRepository->delete($id);

        Flash::success('Unidad Produccion  Has  Propietario deleted successfully.');

        return redirect(route('unidadProduccionHasPropietarios.index'));
    }
}
