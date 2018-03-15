<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoControlPlagaRequest;
use App\Http\Requests\UpdateTipoControlPlagaRequest;
use App\Repositories\TipoControlPlagaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoControlPlagaController extends AppBaseController
{
    /** @var  TipoControlPlagaRepository */
    private $tipoControlPlagaRepository;

    public function __construct(TipoControlPlagaRepository $tipoControlPlagaRepo)
    {
        $this->tipoControlPlagaRepository = $tipoControlPlagaRepo;
    }

    /**
     * Display a listing of the TipoControlPlaga.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoControlPlagaRepository->pushCriteria(new RequestCriteria($request));
        $tipoControlPlagas = $this->tipoControlPlagaRepository->all();

        return view('tipo_control_plagas.index')
            ->with('tipoControlPlagas', $tipoControlPlagas);
    }

    /**
     * Show the form for creating a new TipoControlPlaga.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_control_plagas.create');
    }

    /**
     * Store a newly created TipoControlPlaga in storage.
     *
     * @param CreateTipoControlPlagaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoControlPlagaRequest $request)
    {
        $input = $request->all();

        $tipoControlPlaga = $this->tipoControlPlagaRepository->create($input);

        Flash::success('Tipo Control Plaga
guardado exitosamente.');

        return redirect(route('tipoControlPlagas.index'));
    }

    /**
     * Display the specified TipoControlPlaga.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoControlPlaga = $this->tipoControlPlagaRepository->findWithoutFail($id);

        if (empty($tipoControlPlaga)) {
            Flash::error('Tipo Control Plaga not found');

            return redirect(route('tipoControlPlagas.index'));
        }

        return view('tipo_control_plagas.show')->with('tipoControlPlaga', $tipoControlPlaga);
    }

    /**
     * Show the form for editing the specified TipoControlPlaga.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoControlPlaga = $this->tipoControlPlagaRepository->findWithoutFail($id);

        if (empty($tipoControlPlaga)) {
            Flash::error('Tipo Control Plaga not found');

            return redirect(route('tipoControlPlagas.index'));
        }

        return view('tipo_control_plagas.edit')->with('tipoControlPlaga', $tipoControlPlaga);
    }

    /**
     * Update the specified TipoControlPlaga in storage.
     *
     * @param  int              $id
     * @param UpdateTipoControlPlagaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoControlPlagaRequest $request)
    {
        $tipoControlPlaga = $this->tipoControlPlagaRepository->findWithoutFail($id);

        if (empty($tipoControlPlaga)) {
            Flash::error('Tipo Control Plaga not found');

            return redirect(route('tipoControlPlagas.index'));
        }

        $tipoControlPlaga = $this->tipoControlPlagaRepository->update($request->all(), $id);

        Flash::success('Tipo Control Plaga updated successfully.');

        return redirect(route('tipoControlPlagas.index'));
    }

    /**
     * Remove the specified TipoControlPlaga from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoControlPlaga = $this->tipoControlPlagaRepository->findWithoutFail($id);

        if (empty($tipoControlPlaga)) {
            Flash::error('Tipo Control Plaga not found');

            return redirect(route('tipoControlPlagas.index'));
        }

        $this->tipoControlPlagaRepository->delete($id);

        Flash::success('Tipo Control Plaga deleted successfully.');

        return redirect(route('tipoControlPlagas.index'));
    }
}
