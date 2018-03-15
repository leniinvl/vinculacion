<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermeabilidadSueloRequest;
use App\Http\Requests\UpdatePermeabilidadSueloRequest;
use App\Repositories\PermeabilidadSueloRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PermeabilidadSueloController extends AppBaseController
{
    /** @var  PermeabilidadSueloRepository */
    private $permeabilidadSueloRepository;

    public function __construct(PermeabilidadSueloRepository $permeabilidadSueloRepo)
    {
        $this->permeabilidadSueloRepository = $permeabilidadSueloRepo;
    }

    /**
     * Display a listing of the PermeabilidadSuelo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permeabilidadSueloRepository->pushCriteria(new RequestCriteria($request));
        $permeabilidadSuelos = $this->permeabilidadSueloRepository->all();

        return view('permeabilidad_suelos.index')
            ->with('permeabilidadSuelos', $permeabilidadSuelos);
    }

    /**
     * Show the form for creating a new PermeabilidadSuelo.
     *
     * @return Response
     */
    public function create()
    {
        return view('permeabilidad_suelos.create');
    }

    /**
     * Store a newly created PermeabilidadSuelo in storage.
     *
     * @param CreatePermeabilidadSueloRequest $request
     *
     * @return Response
     */
    public function store(CreatePermeabilidadSueloRequest $request)
    {
        $input = $request->all();

        $permeabilidadSuelo = $this->permeabilidadSueloRepository->create($input);

        Flash::success('Permeabilidad Suelo saved successfully.');

        return redirect(route('permeabilidadSuelos.index'));
    }

    /**
     * Display the specified PermeabilidadSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permeabilidadSuelo = $this->permeabilidadSueloRepository->findWithoutFail($id);

        if (empty($permeabilidadSuelo)) {
            Flash::error('Permeabilidad Suelo not found');

            return redirect(route('permeabilidadSuelos.index'));
        }

        return view('permeabilidad_suelos.show')->with('permeabilidadSuelo', $permeabilidadSuelo);
    }

    /**
     * Show the form for editing the specified PermeabilidadSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permeabilidadSuelo = $this->permeabilidadSueloRepository->findWithoutFail($id);

        if (empty($permeabilidadSuelo)) {
            Flash::error('Permeabilidad Suelo not found');

            return redirect(route('permeabilidadSuelos.index'));
        }

        return view('permeabilidad_suelos.edit')->with('permeabilidadSuelo', $permeabilidadSuelo);
    }

    /**
     * Update the specified PermeabilidadSuelo in storage.
     *
     * @param  int              $id
     * @param UpdatePermeabilidadSueloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermeabilidadSueloRequest $request)
    {
        $permeabilidadSuelo = $this->permeabilidadSueloRepository->findWithoutFail($id);

        if (empty($permeabilidadSuelo)) {
            Flash::error('Permeabilidad Suelo not found');

            return redirect(route('permeabilidadSuelos.index'));
        }

        $permeabilidadSuelo = $this->permeabilidadSueloRepository->update($request->all(), $id);

        Flash::success('Permeabilidad Suelo updated successfully.');

        return redirect(route('permeabilidadSuelos.index'));
    }

    /**
     * Remove the specified PermeabilidadSuelo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permeabilidadSuelo = $this->permeabilidadSueloRepository->findWithoutFail($id);

        if (empty($permeabilidadSuelo)) {
            Flash::error('Permeabilidad Suelo not found');

            return redirect(route('permeabilidadSuelos.index'));
        }

        $this->permeabilidadSueloRepository->delete($id);

        Flash::success('Permeabilidad Suelo deleted successfully.');

        return redirect(route('permeabilidadSuelos.index'));
    }
}
