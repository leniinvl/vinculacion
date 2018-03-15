<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTaller_Has_TipoDesechoRequest;
use App\Http\Requests\UpdateTaller_Has_TipoDesechoRequest;
use App\Repositories\Taller_Has_TipoDesechoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Taller_Has_TipoDesechoController extends AppBaseController
{
    /** @var  Taller_Has_TipoDesechoRepository */
    private $tallerHasTipoDesechoRepository;

    public function __construct(Taller_Has_TipoDesechoRepository $tallerHasTipoDesechoRepo)
    {
        $this->tallerHasTipoDesechoRepository = $tallerHasTipoDesechoRepo;
    }

    /**
     * Display a listing of the Taller_Has_TipoDesecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tallerHasTipoDesechoRepository->pushCriteria(new RequestCriteria($request));
        $tallerHasTipoDesechos = $this->tallerHasTipoDesechoRepository->all();

        return view('taller__has__tipo_desechos.index')
            ->with('tallerHasTipoDesechos', $tallerHasTipoDesechos);
    }

    /**
     * Show the form for creating a new Taller_Has_TipoDesecho.
     *
     * @return Response
     */
    public function create()
    {
        return view('taller__has__tipo_desechos.create');
    }

    /**
     * Store a newly created Taller_Has_TipoDesecho in storage.
     *
     * @param CreateTaller_Has_TipoDesechoRequest $request
     *
     * @return Response
     */
    public function store(CreateTaller_Has_TipoDesechoRequest $request)
    {
        $input = $request->all();

        $tallerHasTipoDesecho = $this->tallerHasTipoDesechoRepository->create($input);

        Flash::success('Taller  Has  Tipo Desecho
guardado exitosamente.');

        return redirect(route('tallerHasTipoDesechos.index'));
    }

    /**
     * Display the specified Taller_Has_TipoDesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tallerHasTipoDesecho = $this->tallerHasTipoDesechoRepository->findWithoutFail($id);

        if (empty($tallerHasTipoDesecho)) {
            Flash::error('Taller  Has  Tipo Desecho not found');

            return redirect(route('tallerHasTipoDesechos.index'));
        }

        return view('taller__has__tipo_desechos.show')->with('tallerHasTipoDesecho', $tallerHasTipoDesecho);
    }

    /**
     * Show the form for editing the specified Taller_Has_TipoDesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tallerHasTipoDesecho = $this->tallerHasTipoDesechoRepository->findWithoutFail($id);

        if (empty($tallerHasTipoDesecho)) {
            Flash::error('Taller  Has  Tipo Desecho not found');

            return redirect(route('tallerHasTipoDesechos.index'));
        }

        return view('taller__has__tipo_desechos.edit')->with('tallerHasTipoDesecho', $tallerHasTipoDesecho);
    }

    /**
     * Update the specified Taller_Has_TipoDesecho in storage.
     *
     * @param  int              $id
     * @param UpdateTaller_Has_TipoDesechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaller_Has_TipoDesechoRequest $request)
    {
        $tallerHasTipoDesecho = $this->tallerHasTipoDesechoRepository->findWithoutFail($id);

        if (empty($tallerHasTipoDesecho)) {
            Flash::error('Taller  Has  Tipo Desecho not found');

            return redirect(route('tallerHasTipoDesechos.index'));
        }

        $tallerHasTipoDesecho = $this->tallerHasTipoDesechoRepository->update($request->all(), $id);

        Flash::success('Taller  Has  Tipo Desecho updated successfully.');

        return redirect(route('tallerHasTipoDesechos.index'));
    }

    /**
     * Remove the specified Taller_Has_TipoDesecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tallerHasTipoDesecho = $this->tallerHasTipoDesechoRepository->findWithoutFail($id);

        if (empty($tallerHasTipoDesecho)) {
            Flash::error('Taller  Has  Tipo Desecho not found');

            return redirect(route('tallerHasTipoDesechos.index'));
        }

        $this->tallerHasTipoDesechoRepository->delete($id);

        Flash::success('Taller  Has  Tipo Desecho deleted successfully.');

        return redirect(route('tallerHasTipoDesechos.index'));
    }
}
