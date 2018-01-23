<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoAgriculturaRequest;
use App\Http\Requests\UpdateTipoAgriculturaRequest;
use App\Repositories\TipoAgriculturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoAgriculturaController extends AppBaseController
{
    /** @var  TipoAgriculturaRepository */
    private $tipoAgriculturaRepository;

    public function __construct(TipoAgriculturaRepository $tipoAgriculturaRepo)
    {
        $this->tipoAgriculturaRepository = $tipoAgriculturaRepo;
    }

    /**
     * Display a listing of the TipoAgricultura.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoAgriculturaRepository->pushCriteria(new RequestCriteria($request));
        $tipoAgriculturas = $this->tipoAgriculturaRepository->all();

        return view('tipo_agriculturas.index')
            ->with('tipoAgriculturas', $tipoAgriculturas);
    }

    /**
     * Show the form for creating a new TipoAgricultura.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_agriculturas.create');
    }

    /**
     * Store a newly created TipoAgricultura in storage.
     *
     * @param CreateTipoAgriculturaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAgriculturaRequest $request)
    {
        $input = $request->all();

        $tipoAgricultura = $this->tipoAgriculturaRepository->create($input);

        Flash::success('Tipo Agricultura saved successfully.');

        return redirect(route('tipoAgriculturas.index'));
    }

    /**
     * Display the specified TipoAgricultura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAgricultura = $this->tipoAgriculturaRepository->findWithoutFail($id);

        if (empty($tipoAgricultura)) {
            Flash::error('Tipo Agricultura not found');

            return redirect(route('tipoAgriculturas.index'));
        }

        return view('tipo_agriculturas.show')->with('tipoAgricultura', $tipoAgricultura);
    }

    /**
     * Show the form for editing the specified TipoAgricultura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAgricultura = $this->tipoAgriculturaRepository->findWithoutFail($id);

        if (empty($tipoAgricultura)) {
            Flash::error('Tipo Agricultura not found');

            return redirect(route('tipoAgriculturas.index'));
        }

        return view('tipo_agriculturas.edit')->with('tipoAgricultura', $tipoAgricultura);
    }

    /**
     * Update the specified TipoAgricultura in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAgriculturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAgriculturaRequest $request)
    {
        $tipoAgricultura = $this->tipoAgriculturaRepository->findWithoutFail($id);

        if (empty($tipoAgricultura)) {
            Flash::error('Tipo Agricultura not found');

            return redirect(route('tipoAgriculturas.index'));
        }

        $tipoAgricultura = $this->tipoAgriculturaRepository->update($request->all(), $id);

        Flash::success('Tipo Agricultura updated successfully.');

        return redirect(route('tipoAgriculturas.index'));
    }

    /**
     * Remove the specified TipoAgricultura from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAgricultura = $this->tipoAgriculturaRepository->findWithoutFail($id);

        if (empty($tipoAgricultura)) {
            Flash::error('Tipo Agricultura not found');

            return redirect(route('tipoAgriculturas.index'));
        }

        $this->tipoAgriculturaRepository->delete($id);

        Flash::success('Tipo Agricultura deleted successfully.');

        return redirect(route('tipoAgriculturas.index'));
    }
}
