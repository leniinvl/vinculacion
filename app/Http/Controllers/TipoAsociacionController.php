<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoAsociacionRequest;
use App\Http\Requests\UpdateTipoAsociacionRequest;
use App\Repositories\TipoAsociacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoAsociacionController extends AppBaseController
{
    /** @var  TipoAsociacionRepository */
    private $tipoAsociacionRepository;

    public function __construct(TipoAsociacionRepository $tipoAsociacionRepo)
    {
        $this->tipoAsociacionRepository = $tipoAsociacionRepo;
    }

    /**
     * Display a listing of the TipoAsociacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoAsociacionRepository->pushCriteria(new RequestCriteria($request));
        $tipoAsociacions = $this->tipoAsociacionRepository->paginate(10);

        return view('tipo_asociacions.index')
            ->with('tipoAsociacions', $tipoAsociacions);
    }

    /**
     * Show the form for creating a new TipoAsociacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_asociacions.create');
    }

    /**
     * Store a newly created TipoAsociacion in storage.
     *
     * @param CreateTipoAsociacionRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAsociacionRequest $request)
    {
        $input = $request->all();

        $tipoAsociacion = $this->tipoAsociacionRepository->create($input);

        Flash::success('Tipo Asociacion saved successfully.');

        return redirect(route('tipoAsociacions.index'));
    }

    /**
     * Display the specified TipoAsociacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAsociacion = $this->tipoAsociacionRepository->findWithoutFail($id);

        if (empty($tipoAsociacion)) {
            Flash::error('Tipo Asociacion not found');

            return redirect(route('tipoAsociacions.index'));
        }

        return view('tipo_asociacions.show')->with('tipoAsociacion', $tipoAsociacion);
    }

    /**
     * Show the form for editing the specified TipoAsociacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAsociacion = $this->tipoAsociacionRepository->findWithoutFail($id);

        if (empty($tipoAsociacion)) {
            Flash::error('Tipo Asociacion not found');

            return redirect(route('tipoAsociacions.index'));
        }

        return view('tipo_asociacions.edit')->with('tipoAsociacion', $tipoAsociacion);
    }

    /**
     * Update the specified TipoAsociacion in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAsociacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAsociacionRequest $request)
    {
        $tipoAsociacion = $this->tipoAsociacionRepository->findWithoutFail($id);

        if (empty($tipoAsociacion)) {
            Flash::error('Tipo Asociacion not found');

            return redirect(route('tipoAsociacions.index'));
        }

        $tipoAsociacion = $this->tipoAsociacionRepository->update($request->all(), $id);

        Flash::success('Tipo Asociacion updated successfully.');

        return redirect(route('tipoAsociacions.index'));
    }

    /**
     * Remove the specified TipoAsociacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAsociacion = $this->tipoAsociacionRepository->findWithoutFail($id);

        if (empty($tipoAsociacion)) {
            Flash::error('Tipo Asociacion not found');

            return redirect(route('tipoAsociacions.index'));
        }

        $this->tipoAsociacionRepository->delete($id);

        Flash::success('Tipo Asociacion deleted successfully.');

        return redirect(route('tipoAsociacions.index'));
    }
}
