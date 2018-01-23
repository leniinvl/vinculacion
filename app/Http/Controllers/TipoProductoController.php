<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoProductoRequest;
use App\Http\Requests\UpdateTipoProductoRequest;
use App\Repositories\TipoProductoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoProductoController extends AppBaseController
{
    /** @var  TipoProductoRepository */
    private $tipoProductoRepository;

    public function __construct(TipoProductoRepository $tipoProductoRepo)
    {
        $this->tipoProductoRepository = $tipoProductoRepo;
    }

    /**
     * Display a listing of the TipoProducto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoProductoRepository->pushCriteria(new RequestCriteria($request));
        $tipoProductos = $this->tipoProductoRepository->all();

        return view('tipo_productos.index')
            ->with('tipoProductos', $tipoProductos);
    }

    /**
     * Show the form for creating a new TipoProducto.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_productos.create');
    }

    /**
     * Store a newly created TipoProducto in storage.
     *
     * @param CreateTipoProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoProductoRequest $request)
    {
        $input = $request->all();

        $tipoProducto = $this->tipoProductoRepository->create($input);

        Flash::success('Tipo Producto saved successfully.');

        return redirect(route('tipoProductos.index'));
    }

    /**
     * Display the specified TipoProducto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoProducto = $this->tipoProductoRepository->findWithoutFail($id);

        if (empty($tipoProducto)) {
            Flash::error('Tipo Producto not found');

            return redirect(route('tipoProductos.index'));
        }

        return view('tipo_productos.show')->with('tipoProducto', $tipoProducto);
    }

    /**
     * Show the form for editing the specified TipoProducto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoProducto = $this->tipoProductoRepository->findWithoutFail($id);

        if (empty($tipoProducto)) {
            Flash::error('Tipo Producto not found');

            return redirect(route('tipoProductos.index'));
        }

        return view('tipo_productos.edit')->with('tipoProducto', $tipoProducto);
    }

    /**
     * Update the specified TipoProducto in storage.
     *
     * @param  int              $id
     * @param UpdateTipoProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoProductoRequest $request)
    {
        $tipoProducto = $this->tipoProductoRepository->findWithoutFail($id);

        if (empty($tipoProducto)) {
            Flash::error('Tipo Producto not found');

            return redirect(route('tipoProductos.index'));
        }

        $tipoProducto = $this->tipoProductoRepository->update($request->all(), $id);

        Flash::success('Tipo Producto updated successfully.');

        return redirect(route('tipoProductos.index'));
    }

    /**
     * Remove the specified TipoProducto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoProducto = $this->tipoProductoRepository->findWithoutFail($id);

        if (empty($tipoProducto)) {
            Flash::error('Tipo Producto not found');

            return redirect(route('tipoProductos.index'));
        }

        $this->tipoProductoRepository->delete($id);

        Flash::success('Tipo Producto deleted successfully.');

        return redirect(route('tipoProductos.index'));
    }
}
