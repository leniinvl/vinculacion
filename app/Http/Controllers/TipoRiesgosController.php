<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoRiesgosRequest;
use App\Http\Requests\UpdateTipoRiesgosRequest;
use App\Repositories\TipoRiesgosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoRiesgosController extends AppBaseController
{
    /** @var  TipoRiesgosRepository */
    private $tipoRiesgosRepository;

    public function __construct(TipoRiesgosRepository $tipoRiesgosRepo)
    {
        $this->tipoRiesgosRepository = $tipoRiesgosRepo;
    }

    /**
     * Display a listing of the TipoRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $tipoRiesgos = $this->tipoRiesgosRepository->all();

        return view('tipo_riesgos.index')
            ->with('tipoRiesgos', $tipoRiesgos);
    }

    /**
     * Show the form for creating a new TipoRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_riesgos.create');
    }

    /**
     * Store a newly created TipoRiesgos in storage.
     *
     * @param CreateTipoRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoRiesgosRequest $request)
    {
        $input = $request->all();

        $tipoRiesgos = $this->tipoRiesgosRepository->create($input);

        Flash::success('Tipo Riesgos saved successfully.');

        return redirect(route('tipoRiesgos.index'));
    }

    /**
     * Display the specified TipoRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoRiesgos = $this->tipoRiesgosRepository->findWithoutFail($id);

        if (empty($tipoRiesgos)) {
            Flash::error('Tipo Riesgos not found');

            return redirect(route('tipoRiesgos.index'));
        }

        return view('tipo_riesgos.show')->with('tipoRiesgos', $tipoRiesgos);
    }

    /**
     * Show the form for editing the specified TipoRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoRiesgos = $this->tipoRiesgosRepository->findWithoutFail($id);

        if (empty($tipoRiesgos)) {
            Flash::error('Tipo Riesgos not found');

            return redirect(route('tipoRiesgos.index'));
        }

        return view('tipo_riesgos.edit')->with('tipoRiesgos', $tipoRiesgos);
    }

    /**
     * Update the specified TipoRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdateTipoRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoRiesgosRequest $request)
    {
        $tipoRiesgos = $this->tipoRiesgosRepository->findWithoutFail($id);

        if (empty($tipoRiesgos)) {
            Flash::error('Tipo Riesgos not found');

            return redirect(route('tipoRiesgos.index'));
        }

        $tipoRiesgos = $this->tipoRiesgosRepository->update($request->all(), $id);

        Flash::success('Tipo Riesgos updated successfully.');

        return redirect(route('tipoRiesgos.index'));
    }

    /**
     * Remove the specified TipoRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoRiesgos = $this->tipoRiesgosRepository->findWithoutFail($id);

        if (empty($tipoRiesgos)) {
            Flash::error('Tipo Riesgos not found');

            return redirect(route('tipoRiesgos.index'));
        }

        $this->tipoRiesgosRepository->delete($id);

        Flash::success('Tipo Riesgos deleted successfully.');

        return redirect(route('tipoRiesgos.index'));
    }
}
