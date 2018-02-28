<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCalidadSueloRequest;
use App\Http\Requests\UpdateCalidadSueloRequest;
use App\Repositories\CalidadSueloRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CalidadSueloController extends AppBaseController
{
    /** @var  CalidadSueloRepository */
    private $calidadSueloRepository;

    public function __construct(CalidadSueloRepository $calidadSueloRepo)
    {
        $this->calidadSueloRepository = $calidadSueloRepo;
    }

    /**
     * Display a listing of the CalidadSuelo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->calidadSueloRepository->pushCriteria(new RequestCriteria($request));
        $calidadSuelos = $this->calidadSueloRepository->all();

        return view('calidad_suelos.index')
            ->with('calidadSuelos', $calidadSuelos);
    }

    /**
     * Show the form for creating a new CalidadSuelo.
     *
     * @return Response
     */
    public function create()
    {
        return view('calidad_suelos.create');
    }

    /**
     * Store a newly created CalidadSuelo in storage.
     *
     * @param CreateCalidadSueloRequest $request
     *
     * @return Response
     */
    public function store(CreateCalidadSueloRequest $request)
    {
        $input = $request->all();

        $calidadSuelo = $this->calidadSueloRepository->create($input);

        Flash::success('Calidad Suelo saved successfully.');

        return redirect(route('calidadSuelos.index'));
    }

    /**
     * Display the specified CalidadSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $calidadSuelo = $this->calidadSueloRepository->findWithoutFail($id);

        if (empty($calidadSuelo)) {
            Flash::error('Calidad Suelo not found');

            return redirect(route('calidadSuelos.index'));
        }

        return view('calidad_suelos.show')->with('calidadSuelo', $calidadSuelo);
    }

    /**
     * Show the form for editing the specified CalidadSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $calidadSuelo = $this->calidadSueloRepository->findWithoutFail($id);

        if (empty($calidadSuelo)) {
            Flash::error('Calidad Suelo not found');

            return redirect(route('calidadSuelos.index'));
        }

        return view('calidad_suelos.edit')->with('calidadSuelo', $calidadSuelo);
    }

    /**
     * Update the specified CalidadSuelo in storage.
     *
     * @param  int              $id
     * @param UpdateCalidadSueloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCalidadSueloRequest $request)
    {
        $calidadSuelo = $this->calidadSueloRepository->findWithoutFail($id);

        if (empty($calidadSuelo)) {
            Flash::error('Calidad Suelo not found');

            return redirect(route('calidadSuelos.index'));
        }

        $calidadSuelo = $this->calidadSueloRepository->update($request->all(), $id);

        Flash::success('Calidad Suelo updated successfully.');

        return redirect(route('calidadSuelos.index'));
    }

    /**
     * Remove the specified CalidadSuelo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $calidadSuelo = $this->calidadSueloRepository->findWithoutFail($id);

        if (empty($calidadSuelo)) {
            Flash::error('Calidad Suelo not found');

            return redirect(route('calidadSuelos.index'));
        }

        $this->calidadSueloRepository->delete($id);

        Flash::success('Calidad Suelo deleted successfully.');

        return redirect(route('calidadSuelos.index'));
    }
}
