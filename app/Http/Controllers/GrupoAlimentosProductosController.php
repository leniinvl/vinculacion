<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateGrupoAlimentosProductosRequest;
use App\Http\Requests\UpdateGrupoAlimentosProductosRequest;
use App\Repositories\GrupoAlimentosProductosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GrupoAlimentosProductosController extends AppBaseController
{
    /** @var  GrupoAlimentosProductosRepository */
    private $grupoAlimentosProductosRepository;

    public function __construct(GrupoAlimentosProductosRepository $grupoAlimentosProductosRepo)
    {
        $this->grupoAlimentosProductosRepository = $grupoAlimentosProductosRepo;
    }

    /**
     * Display a listing of the GrupoAlimentosProductos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->grupoAlimentosProductosRepository->pushCriteria(new RequestCriteria($request));
        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->all();

        return view('grupo_alimentos_productos.index')
            ->with('grupoAlimentosProductos', $grupoAlimentosProductos);
    }

    /**
     * Show the form for creating a new GrupoAlimentosProductos.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_alimentos_productos.create');
    }

    /**
     * Store a newly created GrupoAlimentosProductos in storage.
     *
     * @param CreateGrupoAlimentosProductosRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoAlimentosProductosRequest $request)
    {
        $input = $request->all();

        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->create($input);

        Flash::success('Grupo Alimentos Productos saved successfully.');

        return redirect(route('grupoAlimentosProductos.index'));
    }

    /**
     * Display the specified GrupoAlimentosProductos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($grupoAlimentosProductos)) {
            Flash::error('Grupo Alimentos Productos not found');

            return redirect(route('grupoAlimentosProductos.index'));
        }

        return view('grupo_alimentos_productos.show')->with('grupoAlimentosProductos', $grupoAlimentosProductos);
    }

    /**
     * Show the form for editing the specified GrupoAlimentosProductos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($grupoAlimentosProductos)) {
            Flash::error('Grupo Alimentos Productos not found');

            return redirect(route('grupoAlimentosProductos.index'));
        }

        return view('grupo_alimentos_productos.edit')->with('grupoAlimentosProductos', $grupoAlimentosProductos);
    }

    /**
     * Update the specified GrupoAlimentosProductos in storage.
     *
     * @param  int              $id
     * @param UpdateGrupoAlimentosProductosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoAlimentosProductosRequest $request)
    {
        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($grupoAlimentosProductos)) {
            Flash::error('Grupo Alimentos Productos not found');

            return redirect(route('grupoAlimentosProductos.index'));
        }

        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->update($request->all(), $id);

        Flash::success('Grupo Alimentos Productos updated successfully.');

        return redirect(route('grupoAlimentosProductos.index'));
    }

    /**
     * Remove the specified GrupoAlimentosProductos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoAlimentosProductos = $this->grupoAlimentosProductosRepository->findWithoutFail($id);

        if (empty($grupoAlimentosProductos)) {
            Flash::error('Grupo Alimentos Productos not found');

            return redirect(route('grupoAlimentosProductos.index'));
        }

        $this->grupoAlimentosProductosRepository->delete($id);

        Flash::success('Grupo Alimentos Productos deleted successfully.');

        return redirect(route('grupoAlimentosProductos.index'));
    }
}
