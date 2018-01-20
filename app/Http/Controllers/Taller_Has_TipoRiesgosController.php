<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaller_Has_TipoRiesgosRequest;
use App\Http\Requests\UpdateTaller_Has_TipoRiesgosRequest;
use App\Repositories\Taller_Has_TipoRiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Taller_Has_TipoRiesgosController extends AppBaseController
{
    /** @var  Taller_Has_TipoRiesgosRepository */
    private $tallerHasTipoRiesgosRepository;

    public function __construct(Taller_Has_TipoRiesgosRepository $tallerHasTipoRiesgosRepo)
    {
        $this->tallerHasTipoRiesgosRepository = $tallerHasTipoRiesgosRepo;
    }

    /**
     * Display a listing of the Taller_Has_TipoRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tallerHasTipoRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->all();

        return view('taller__has__tipo_riesgos.index')
            ->with('tallerHasTipoRiesgos', $tallerHasTipoRiesgos);
    }

    /**
     * Show the form for creating a new Taller_Has_TipoRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        return view('taller__has__tipo_riesgos.create');
    }

    /**
     * Store a newly created Taller_Has_TipoRiesgos in storage.
     *
     * @param CreateTaller_Has_TipoRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreateTaller_Has_TipoRiesgosRequest $request)
    {
        $input = $request->all();

        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->create($input);

        Flash::success('Taller  Has  Tipo Riesgos saved successfully.');

        return redirect(route('tallerHasTipoRiesgos.index'));
    }

    /**
     * Display the specified Taller_Has_TipoRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->findWithoutFail($id);

        if (empty($tallerHasTipoRiesgos)) {
            Flash::error('Taller  Has  Tipo Riesgos not found');

            return redirect(route('tallerHasTipoRiesgos.index'));
        }

        return view('taller__has__tipo_riesgos.show')->with('tallerHasTipoRiesgos', $tallerHasTipoRiesgos);
    }

    /**
     * Show the form for editing the specified Taller_Has_TipoRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->findWithoutFail($id);

        if (empty($tallerHasTipoRiesgos)) {
            Flash::error('Taller  Has  Tipo Riesgos not found');

            return redirect(route('tallerHasTipoRiesgos.index'));
        }

        return view('taller__has__tipo_riesgos.edit')->with('tallerHasTipoRiesgos', $tallerHasTipoRiesgos);
    }

    /**
     * Update the specified Taller_Has_TipoRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdateTaller_Has_TipoRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaller_Has_TipoRiesgosRequest $request)
    {
        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->findWithoutFail($id);

        if (empty($tallerHasTipoRiesgos)) {
            Flash::error('Taller  Has  Tipo Riesgos not found');

            return redirect(route('tallerHasTipoRiesgos.index'));
        }

        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->update($request->all(), $id);

        Flash::success('Taller  Has  Tipo Riesgos updated successfully.');

        return redirect(route('tallerHasTipoRiesgos.index'));
    }

    /**
     * Remove the specified Taller_Has_TipoRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tallerHasTipoRiesgos = $this->tallerHasTipoRiesgosRepository->findWithoutFail($id);

        if (empty($tallerHasTipoRiesgos)) {
            Flash::error('Taller  Has  Tipo Riesgos not found');

            return redirect(route('tallerHasTipoRiesgos.index'));
        }

        $this->tallerHasTipoRiesgosRepository->delete($id);

        Flash::success('Taller  Has  Tipo Riesgos deleted successfully.');

        return redirect(route('tallerHasTipoRiesgos.index'));
    }
}
