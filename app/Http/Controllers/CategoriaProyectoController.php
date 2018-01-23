<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaProyectoRequest;
use App\Http\Requests\UpdateCategoriaProyectoRequest;
use App\Repositories\CategoriaProyectoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CategoriaProyectoController extends AppBaseController
{
    /** @var  CategoriaProyectoRepository */
    private $categoriaProyectoRepository;

    public function __construct(CategoriaProyectoRepository $categoriaProyectoRepo)
    {
        $this->categoriaProyectoRepository = $categoriaProyectoRepo;
    }

    /**
     * Display a listing of the CategoriaProyecto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->categoriaProyectoRepository->pushCriteria(new RequestCriteria($request));
        $categoriaProyectos = $this->categoriaProyectoRepository->all();

        return view('categoria_proyectos.index')
            ->with('categoriaProyectos', $categoriaProyectos);
    }

    /**
     * Show the form for creating a new CategoriaProyecto.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoria_proyectos.create');
    }

    /**
     * Store a newly created CategoriaProyecto in storage.
     *
     * @param CreateCategoriaProyectoRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaProyectoRequest $request)
    {
        $input = $request->all();

        $categoriaProyecto = $this->categoriaProyectoRepository->create($input);

        Flash::success('Categoria Proyecto saved successfully.');

        return redirect(route('categoriaProyectos.index'));
    }

    /**
     * Display the specified CategoriaProyecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriaProyecto = $this->categoriaProyectoRepository->findWithoutFail($id);

        if (empty($categoriaProyecto)) {
            Flash::error('Categoria Proyecto not found');

            return redirect(route('categoriaProyectos.index'));
        }

        return view('categoria_proyectos.show')->with('categoriaProyecto', $categoriaProyecto);
    }

    /**
     * Show the form for editing the specified CategoriaProyecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriaProyecto = $this->categoriaProyectoRepository->findWithoutFail($id);

        if (empty($categoriaProyecto)) {
            Flash::error('Categoria Proyecto not found');

            return redirect(route('categoriaProyectos.index'));
        }

        return view('categoria_proyectos.edit')->with('categoriaProyecto', $categoriaProyecto);
    }

    /**
     * Update the specified CategoriaProyecto in storage.
     *
     * @param  int              $id
     * @param UpdateCategoriaProyectoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaProyectoRequest $request)
    {
        $categoriaProyecto = $this->categoriaProyectoRepository->findWithoutFail($id);

        if (empty($categoriaProyecto)) {
            Flash::error('Categoria Proyecto not found');

            return redirect(route('categoriaProyectos.index'));
        }

        $categoriaProyecto = $this->categoriaProyectoRepository->update($request->all(), $id);

        Flash::success('Categoria Proyecto updated successfully.');

        return redirect(route('categoriaProyectos.index'));
    }

    /**
     * Remove the specified CategoriaProyecto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriaProyecto = $this->categoriaProyectoRepository->findWithoutFail($id);

        if (empty($categoriaProyecto)) {
            Flash::error('Categoria Proyecto not found');

            return redirect(route('categoriaProyectos.index'));
        }

        $this->categoriaProyectoRepository->delete($id);

        Flash::success('Categoria Proyecto deleted successfully.');

        return redirect(route('categoriaProyectos.index'));
    }
}
