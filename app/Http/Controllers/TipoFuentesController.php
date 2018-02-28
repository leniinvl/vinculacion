<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoFuentesRequest;
use App\Http\Requests\UpdateTipoFuentesRequest;
use App\Repositories\TipoFuentesRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoFuentesController extends AppBaseController
{
    /** @var  TipoFuentesRepository */
    private $tipoFuentesRepository;

    public function __construct(TipoFuentesRepository $tipoFuentesRepo)
    {
        $this->tipoFuentesRepository = $tipoFuentesRepo;
    }

    /**
     * Display a listing of the TipoFuentes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoFuentesRepository->pushCriteria(new RequestCriteria($request));
        $tipoFuentes = $this->tipoFuentesRepository->all();

        return view('tipo_fuentes.index')
            ->with('tipoFuentes', $tipoFuentes);
    }

    /**
     * Show the form for creating a new TipoFuentes.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_fuentes.create');
    }

    /**
     * Store a newly created TipoFuentes in storage.
     *
     * @param CreateTipoFuentesRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoFuentesRequest $request)
    {
        $input = $request->all();

        $tipoFuentes = $this->tipoFuentesRepository->create($input);

        Flash::success('Tipo Fuentes saved successfully.');

        return redirect(route('tipoFuentes.index'));
    }

    /**
     * Display the specified TipoFuentes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoFuentes = $this->tipoFuentesRepository->findWithoutFail($id);

        if (empty($tipoFuentes)) {
            Flash::error('Tipo Fuentes not found');

            return redirect(route('tipoFuentes.index'));
        }

        return view('tipo_fuentes.show')->with('tipoFuentes', $tipoFuentes);
    }

    /**
     * Show the form for editing the specified TipoFuentes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoFuentes = $this->tipoFuentesRepository->findWithoutFail($id);

        if (empty($tipoFuentes)) {
            Flash::error('Tipo Fuentes not found');

            return redirect(route('tipoFuentes.index'));
        }

        return view('tipo_fuentes.edit')->with('tipoFuentes', $tipoFuentes);
    }

    /**
     * Update the specified TipoFuentes in storage.
     *
     * @param  int              $id
     * @param UpdateTipoFuentesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoFuentesRequest $request)
    {
        $tipoFuentes = $this->tipoFuentesRepository->findWithoutFail($id);

        if (empty($tipoFuentes)) {
            Flash::error('Tipo Fuentes not found');

            return redirect(route('tipoFuentes.index'));
        }

        $tipoFuentes = $this->tipoFuentesRepository->update($request->all(), $id);

        Flash::success('Tipo Fuentes updated successfully.');

        return redirect(route('tipoFuentes.index'));
    }

    /**
     * Remove the specified TipoFuentes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoFuentes = $this->tipoFuentesRepository->findWithoutFail($id);

        if (empty($tipoFuentes)) {
            Flash::error('Tipo Fuentes not found');

            return redirect(route('tipoFuentes.index'));
        }

        $this->tipoFuentesRepository->delete($id);

        Flash::success('Tipo Fuentes deleted successfully.');

        return redirect(route('tipoFuentes.index'));
    }
}
