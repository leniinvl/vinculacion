<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoSueloRequest;
use App\Http\Requests\UpdateTipoSueloRequest;
use App\Repositories\TipoSueloRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoSueloController extends AppBaseController
{
    /** @var  TipoSueloRepository */
    private $tipoSueloRepository;

    public function __construct(TipoSueloRepository $tipoSueloRepo)
    {
        $this->tipoSueloRepository = $tipoSueloRepo;
    }

    /**
     * Display a listing of the TipoSuelo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoSueloRepository->pushCriteria(new RequestCriteria($request));
        $tipoSuelos = $this->tipoSueloRepository->all();

        return view('tipo_suelos.index')
            ->with('tipoSuelos', $tipoSuelos);
    }

    /**
     * Show the form for creating a new TipoSuelo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_suelos.create');
    }

    /**
     * Store a newly created TipoSuelo in storage.
     *
     * @param CreateTipoSueloRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoSueloRequest $request)
    {
        $input = $request->all();

        $tipoSuelo = $this->tipoSueloRepository->create($input);

        Flash::success('Tipo Suelo
guardado exitosamente.');

        return redirect(route('tipoSuelos.index'));
    }

    /**
     * Display the specified TipoSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoSuelo = $this->tipoSueloRepository->findWithoutFail($id);

        if (empty($tipoSuelo)) {
            Flash::error('Tipo Suelo not found');

            return redirect(route('tipoSuelos.index'));
        }

        return view('tipo_suelos.show')->with('tipoSuelo', $tipoSuelo);
    }

    /**
     * Show the form for editing the specified TipoSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoSuelo = $this->tipoSueloRepository->findWithoutFail($id);

        if (empty($tipoSuelo)) {
            Flash::error('Tipo Suelo not found');

            return redirect(route('tipoSuelos.index'));
        }

        return view('tipo_suelos.edit')->with('tipoSuelo', $tipoSuelo);
    }

    /**
     * Update the specified TipoSuelo in storage.
     *
     * @param  int              $id
     * @param UpdateTipoSueloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoSueloRequest $request)
    {
        $tipoSuelo = $this->tipoSueloRepository->findWithoutFail($id);

        if (empty($tipoSuelo)) {
            Flash::error('Tipo Suelo not found');

            return redirect(route('tipoSuelos.index'));
        }

        $tipoSuelo = $this->tipoSueloRepository->update($request->all(), $id);

        Flash::success('Tipo Suelo updated successfully.');

        return redirect(route('tipoSuelos.index'));
    }

    /**
     * Remove the specified TipoSuelo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoSuelo = $this->tipoSueloRepository->findWithoutFail($id);

        if (empty($tipoSuelo)) {
            Flash::error('Tipo Suelo not found');

            return redirect(route('tipoSuelos.index'));
        }

        $this->tipoSueloRepository->delete($id);

        Flash::success('Tipo Suelo deleted successfully.');

        return redirect(route('tipoSuelos.index'));
    }
}
