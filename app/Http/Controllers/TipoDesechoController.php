<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoDesechoRequest;
use App\Http\Requests\UpdateTipoDesechoRequest;
use App\Repositories\TipoDesechoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoDesechoController extends AppBaseController
{
    /** @var  TipoDesechoRepository */
    private $tipoDesechoRepository;

    public function __construct(TipoDesechoRepository $tipoDesechoRepo)
    {
        $this->tipoDesechoRepository = $tipoDesechoRepo;
    }

    /**
     * Display a listing of the TipoDesecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoDesechoRepository->pushCriteria(new RequestCriteria($request));
        $tipoDesechos = $this->tipoDesechoRepository->all();

        return view('tipo_desechos.index')
            ->with('tipoDesechos', $tipoDesechos);
    }

    /**
     * Show the form for creating a new TipoDesecho.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_desechos.create');
    }

    /**
     * Store a newly created TipoDesecho in storage.
     *
     * @param CreateTipoDesechoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoDesechoRequest $request)
    {
        $input = $request->all();

        $tipoDesecho = $this->tipoDesechoRepository->create($input);

        Flash::success('Tipo Desecho saved successfully.');

        return redirect(route('tipoDesechos.index'));
    }

    /**
     * Display the specified TipoDesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoDesecho = $this->tipoDesechoRepository->findWithoutFail($id);

        if (empty($tipoDesecho)) {
            Flash::error('Tipo Desecho not found');

            return redirect(route('tipoDesechos.index'));
        }

        return view('tipo_desechos.show')->with('tipoDesecho', $tipoDesecho);
    }

    /**
     * Show the form for editing the specified TipoDesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoDesecho = $this->tipoDesechoRepository->findWithoutFail($id);

        if (empty($tipoDesecho)) {
            Flash::error('Tipo Desecho not found');

            return redirect(route('tipoDesechos.index'));
        }

        return view('tipo_desechos.edit')->with('tipoDesecho', $tipoDesecho);
    }

    /**
     * Update the specified TipoDesecho in storage.
     *
     * @param  int              $id
     * @param UpdateTipoDesechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoDesechoRequest $request)
    {
        $tipoDesecho = $this->tipoDesechoRepository->findWithoutFail($id);

        if (empty($tipoDesecho)) {
            Flash::error('Tipo Desecho not found');

            return redirect(route('tipoDesechos.index'));
        }

        $tipoDesecho = $this->tipoDesechoRepository->update($request->all(), $id);

        Flash::success('Tipo Desecho updated successfully.');

        return redirect(route('tipoDesechos.index'));
    }

    /**
     * Remove the specified TipoDesecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoDesecho = $this->tipoDesechoRepository->findWithoutFail($id);

        if (empty($tipoDesecho)) {
            Flash::error('Tipo Desecho not found');

            return redirect(route('tipoDesechos.index'));
        }

        $this->tipoDesechoRepository->delete($id);

        Flash::success('Tipo Desecho deleted successfully.');

        return redirect(route('tipoDesechos.index'));
    }
}
