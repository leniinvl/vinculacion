<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoAlimentosRequest;
use App\Http\Requests\UpdateTipoAlimentosRequest;
use App\Repositories\TipoAlimentosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoAlimentosController extends AppBaseController
{
    /** @var  TipoAlimentosRepository */
    private $tipoAlimentosRepository;

    public function __construct(TipoAlimentosRepository $tipoAlimentosRepo)
    {
        $this->tipoAlimentosRepository = $tipoAlimentosRepo;
    }

    /**
     * Display a listing of the TipoAlimentos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoAlimentosRepository->pushCriteria(new RequestCriteria($request));
        $tipoAlimentos = $this->tipoAlimentosRepository->all();

        return view('tipo_alimentos.index')
            ->with('tipoAlimentos', $tipoAlimentos);
    }

    /**
     * Show the form for creating a new TipoAlimentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_alimentos.create');
    }

    /**
     * Store a newly created TipoAlimentos in storage.
     *
     * @param CreateTipoAlimentosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAlimentosRequest $request)
    {
        $input = $request->all();

        $tipoAlimentos = $this->tipoAlimentosRepository->create($input);

        Flash::success('Tipo Alimentos saved successfully.');

        return redirect(route('tipoAlimentos.index'));
    }

    /**
     * Display the specified TipoAlimentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAlimentos = $this->tipoAlimentosRepository->findWithoutFail($id);

        if (empty($tipoAlimentos)) {
            Flash::error('Tipo Alimentos not found');

            return redirect(route('tipoAlimentos.index'));
        }

        return view('tipo_alimentos.show')->with('tipoAlimentos', $tipoAlimentos);
    }

    /**
     * Show the form for editing the specified TipoAlimentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAlimentos = $this->tipoAlimentosRepository->findWithoutFail($id);

        if (empty($tipoAlimentos)) {
            Flash::error('Tipo Alimentos not found');

            return redirect(route('tipoAlimentos.index'));
        }

        return view('tipo_alimentos.edit')->with('tipoAlimentos', $tipoAlimentos);
    }

    /**
     * Update the specified TipoAlimentos in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAlimentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAlimentosRequest $request)
    {
        $tipoAlimentos = $this->tipoAlimentosRepository->findWithoutFail($id);

        if (empty($tipoAlimentos)) {
            Flash::error('Tipo Alimentos not found');

            return redirect(route('tipoAlimentos.index'));
        }

        $tipoAlimentos = $this->tipoAlimentosRepository->update($request->all(), $id);

        Flash::success('Tipo Alimentos updated successfully.');

        return redirect(route('tipoAlimentos.index'));
    }

    /**
     * Remove the specified TipoAlimentos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAlimentos = $this->tipoAlimentosRepository->findWithoutFail($id);

        if (empty($tipoAlimentos)) {
            Flash::error('Tipo Alimentos not found');

            return redirect(route('tipoAlimentos.index'));
        }

        $this->tipoAlimentosRepository->delete($id);

        Flash::success('Tipo Alimentos deleted successfully.');

        return redirect(route('tipoAlimentos.index'));
    }
}
