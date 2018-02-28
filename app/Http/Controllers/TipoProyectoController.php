<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoProyectoRequest;
use App\Http\Requests\UpdateTipoProyectoRequest;
use App\Repositories\TipoProyectoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoProyectoController extends AppBaseController
{
    /** @var  TipoProyectoRepository */
    private $tipoProyectoRepository;

    public function __construct(TipoProyectoRepository $tipoProyectoRepo)
    {
        $this->tipoProyectoRepository = $tipoProyectoRepo;
    }

    /**
     * Display a listing of the TipoProyecto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoProyectoRepository->pushCriteria(new RequestCriteria($request));
        $tipoProyectos = $this->tipoProyectoRepository->all();

        return view('tipo_proyectos.index')
            ->with('tipoProyectos', $tipoProyectos);
    }

    /**
     * Show the form for creating a new TipoProyecto.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_proyectos.create');
    }

    /**
     * Store a newly created TipoProyecto in storage.
     *
     * @param CreateTipoProyectoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoProyectoRequest $request)
    {
        $input = $request->all();

        $tipoProyecto = $this->tipoProyectoRepository->create($input);

        Flash::success('Tipo Proyecto saved successfully.');

        return redirect(route('tipoProyectos.index'));
    }

    /**
     * Display the specified TipoProyecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoProyecto = $this->tipoProyectoRepository->findWithoutFail($id);

        if (empty($tipoProyecto)) {
            Flash::error('Tipo Proyecto not found');

            return redirect(route('tipoProyectos.index'));
        }

        return view('tipo_proyectos.show')->with('tipoProyecto', $tipoProyecto);
    }

    /**
     * Show the form for editing the specified TipoProyecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoProyecto = $this->tipoProyectoRepository->findWithoutFail($id);

        if (empty($tipoProyecto)) {
            Flash::error('Tipo Proyecto not found');

            return redirect(route('tipoProyectos.index'));
        }

        return view('tipo_proyectos.edit')->with('tipoProyecto', $tipoProyecto);
    }

    /**
     * Update the specified TipoProyecto in storage.
     *
     * @param  int              $id
     * @param UpdateTipoProyectoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoProyectoRequest $request)
    {
        $tipoProyecto = $this->tipoProyectoRepository->findWithoutFail($id);

        if (empty($tipoProyecto)) {
            Flash::error('Tipo Proyecto not found');

            return redirect(route('tipoProyectos.index'));
        }

        $tipoProyecto = $this->tipoProyectoRepository->update($request->all(), $id);

        Flash::success('Tipo Proyecto updated successfully.');

        return redirect(route('tipoProyectos.index'));
    }

    /**
     * Remove the specified TipoProyecto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoProyecto = $this->tipoProyectoRepository->findWithoutFail($id);

        if (empty($tipoProyecto)) {
            Flash::error('Tipo Proyecto not found');

            return redirect(route('tipoProyectos.index'));
        }

        $this->tipoProyectoRepository->delete($id);

        Flash::success('Tipo Proyecto deleted successfully.');

        return redirect(route('tipoProyectos.index'));
    }
}
