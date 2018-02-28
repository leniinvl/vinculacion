<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateunidadproduccionRequest;
use App\Http\Requests\UpdateunidadproduccionRequest;
use App\Models\Asociacion;
use App\Models\Producto;
use App\Repositories\unidadproduccionRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class unidadproduccionController extends AppBaseController
{
    /** @var  unidadproduccionRepository */
    private $unidadproduccionRepository;

    public function __construct(unidadproduccionRepository $unidadproduccionRepo)
    {
        $this->unidadproduccionRepository = $unidadproduccionRepo;
    }

    /**
     * Display a listing of the unidadproduccion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->unidadproduccionRepository->pushCriteria(new RequestCriteria($request));
        $unidadproduccions = $this->unidadproduccionRepository->all();

        return view('unidadproduccions.index')
            ->with('unidadproduccions', $unidadproduccions);
    }

    /**
     * Show the form for creating a new unidadproduccion.
     *
     * @return Response
     */
    public function create()
    {
        $asociacion = Asociacion::all()->pluck('nombre', 'id');
        $producto   = Producto::all()->pluck('nombre', 'id');
        return view('unidadproduccions.create', [
            'asociacion' => $asociacion,
            'producto'   => $producto,
        ]);
    }

    /**
     * Store a newly created unidadproduccion in storage.
     *
     * @param CreateunidadproduccionRequest $request
     *
     * @return Response
     */
    public function store(CreateunidadproduccionRequest $request)
    {
        $input = $request->all();

        $unidadproduccion = $this->unidadproduccionRepository->create($input);

        Flash::success('Unidadproduccion saved successfully.');

        return redirect(route('unidadproduccions.index'));
    }

    /**
     * Display the specified unidadproduccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unidadproduccion = $this->unidadproduccionRepository->findWithoutFail($id);

        if (empty($unidadproduccion)) {
            Flash::error('Unidadproduccion not found');

            return redirect(route('unidadproduccions.index'));
        }

        return view('unidadproduccions.show')->with('unidadproduccion', $unidadproduccion);
    }

    /**
     * Show the form for editing the specified unidadproduccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asociacion       = Asociacion::all()->pluck('nombre', 'id');
        $producto         = Producto::all()->pluck('nombre', 'id');
        $unidadproduccion = $this->unidadproduccionRepository->findWithoutFail($id);

        if (empty($unidadproduccion)) {
            Flash::error('Unidadproduccion not found');

            return redirect(route('unidadproduccions.index'));
        }

        return view('unidadproduccions.edit')->with('unidadproduccion', $unidadproduccion)->with('asociacion', $asociacion)->with('producto', $producto);
    }

    /**
     * Update the specified unidadproduccion in storage.
     *
     * @param  int              $id
     * @param UpdateunidadproduccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateunidadproduccionRequest $request)
    {
        $unidadproduccion = $this->unidadproduccionRepository->findWithoutFail($id);

        if (empty($unidadproduccion)) {
            Flash::error('Unidadproduccion not found');

            return redirect(route('unidadproduccions.index'));
        }

        $unidadproduccion = $this->unidadproduccionRepository->update($request->all(), $id);

        Flash::success('Unidadproduccion updated successfully.');

        return redirect(route('unidadproduccions.index'));
    }

    /**
     * Remove the specified unidadproduccion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unidadproduccion = $this->unidadproduccionRepository->findWithoutFail($id);

        if (empty($unidadproduccion)) {
            Flash::error('Unidadproduccion not found');

            return redirect(route('unidadproduccions.index'));
        }

        $this->unidadproduccionRepository->delete($id);

        Flash::success('Unidadproduccion deleted successfully.');

        return redirect(route('unidadproduccions.index'));
    }
}
