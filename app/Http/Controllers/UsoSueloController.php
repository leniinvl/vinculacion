<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUsoSueloRequest;
use App\Http\Requests\UpdateUsoSueloRequest;
use App\Repositories\UsoSueloRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsoSueloController extends AppBaseController
{
    /** @var  UsoSueloRepository */
    private $usoSueloRepository;

    public function __construct(UsoSueloRepository $usoSueloRepo)
    {
        $this->usoSueloRepository = $usoSueloRepo;
    }

    /**
     * Display a listing of the UsoSuelo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usoSueloRepository->pushCriteria(new RequestCriteria($request));
        $usoSuelos = $this->usoSueloRepository->all();

        return view('uso_suelos.index')
            ->with('usoSuelos', $usoSuelos);
    }

    /**
     * Show the form for creating a new UsoSuelo.
     *
     * @return Response
     */
    public function create()
    {
        return view('uso_suelos.create');
    }

    /**
     * Store a newly created UsoSuelo in storage.
     *
     * @param CreateUsoSueloRequest $request
     *
     * @return Response
     */
    public function store(CreateUsoSueloRequest $request)
    {
        $input = $request->all();

        $usoSuelo = $this->usoSueloRepository->create($input);

        Flash::success('Uso Suelo
guardado exitosamente.');

        return redirect(route('usoSuelos.index'));
    }

    /**
     * Display the specified UsoSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usoSuelo = $this->usoSueloRepository->findWithoutFail($id);

        if (empty($usoSuelo)) {
            Flash::error('Uso Suelo not found');

            return redirect(route('usoSuelos.index'));
        }

        return view('uso_suelos.show')->with('usoSuelo', $usoSuelo);
    }

    /**
     * Show the form for editing the specified UsoSuelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usoSuelo = $this->usoSueloRepository->findWithoutFail($id);

        if (empty($usoSuelo)) {
            Flash::error('Uso Suelo not found');

            return redirect(route('usoSuelos.index'));
        }

        return view('uso_suelos.edit')->with('usoSuelo', $usoSuelo);
    }

    /**
     * Update the specified UsoSuelo in storage.
     *
     * @param  int              $id
     * @param UpdateUsoSueloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsoSueloRequest $request)
    {
        $usoSuelo = $this->usoSueloRepository->findWithoutFail($id);

        if (empty($usoSuelo)) {
            Flash::error('Uso Suelo not found');

            return redirect(route('usoSuelos.index'));
        }

        $usoSuelo = $this->usoSueloRepository->update($request->all(), $id);

        Flash::success('Uso Suelo updated successfully.');

        return redirect(route('usoSuelos.index'));
    }

    /**
     * Remove the specified UsoSuelo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usoSuelo = $this->usoSueloRepository->findWithoutFail($id);

        if (empty($usoSuelo)) {
            Flash::error('Uso Suelo not found');

            return redirect(route('usoSuelos.index'));
        }

        $this->usoSueloRepository->delete($id);

        Flash::success('Uso Suelo deleted successfully.');

        return redirect(route('usoSuelos.index'));
    }
}
