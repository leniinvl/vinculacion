<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreainfluencia_has_lenguajeRequest;
use App\Http\Requests\UpdateAreainfluencia_has_lenguajeRequest;
use App\Repositories\Areainfluencia_has_lenguajeRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Areainfluencia_has_lenguajeController extends AppBaseController
{
    /** @var  Areainfluencia_has_lenguajeRepository */
    private $areainfluenciaHasLenguajeRepository;

    public function __construct(Areainfluencia_has_lenguajeRepository $areainfluenciaHasLenguajeRepo)
    {
        $this->areainfluenciaHasLenguajeRepository = $areainfluenciaHasLenguajeRepo;
    }

    /**
     * Display a listing of the Areainfluencia_has_lenguaje.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainfluenciaHasLenguajeRepository->pushCriteria(new RequestCriteria($request));
        $areainfluenciaHasLenguajes = $this->areainfluenciaHasLenguajeRepository->all();

        return view('areainfluencia_has_lenguajes.index')
            ->with('areainfluenciaHasLenguajes', $areainfluenciaHasLenguajes);
    }

    /**
     * Show the form for creating a new Areainfluencia_has_lenguaje.
     *
     * @return Response
     */
    public function create()
    {
        return view('areainfluencia_has_lenguajes.create');
    }

    /**
     * Store a newly created Areainfluencia_has_lenguaje in storage.
     *
     * @param CreateAreainfluencia_has_lenguajeRequest $request
     *
     * @return Response
     */
    public function store(CreateAreainfluencia_has_lenguajeRequest $request)
    {
        $input = $request->all();

        $areainfluenciaHasLenguaje = $this->areainfluenciaHasLenguajeRepository->create($input);

        Flash::success('Areainfluencia Has Lenguaje
guardado exitosamente.');

        return redirect(route('areainfluenciaHasLenguajes.index'));
    }

    /**
     * Display the specified Areainfluencia_has_lenguaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainfluenciaHasLenguaje = $this->areainfluenciaHasLenguajeRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasLenguaje)) {
            Flash::error('Areainfluencia Has Lenguaje not found');

            return redirect(route('areainfluenciaHasLenguajes.index'));
        }

        return view('areainfluencia_has_lenguajes.show')->with('areainfluenciaHasLenguaje', $areainfluenciaHasLenguaje);
    }

    /**
     * Show the form for editing the specified Areainfluencia_has_lenguaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areainfluenciaHasLenguaje = $this->areainfluenciaHasLenguajeRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasLenguaje)) {
            Flash::error('Areainfluencia Has Lenguaje not found');

            return redirect(route('areainfluenciaHasLenguajes.index'));
        }

        return view('areainfluencia_has_lenguajes.edit')->with('areainfluenciaHasLenguaje', $areainfluenciaHasLenguaje);
    }

    /**
     * Update the specified Areainfluencia_has_lenguaje in storage.
     *
     * @param  int              $id
     * @param UpdateAreainfluencia_has_lenguajeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreainfluencia_has_lenguajeRequest $request)
    {
        $areainfluenciaHasLenguaje = $this->areainfluenciaHasLenguajeRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasLenguaje)) {
            Flash::error('Areainfluencia Has Lenguaje not found');

            return redirect(route('areainfluenciaHasLenguajes.index'));
        }

        $areainfluenciaHasLenguaje = $this->areainfluenciaHasLenguajeRepository->update($request->all(), $id);

        Flash::success('Areainfluencia Has Lenguaje updated successfully.');

        return redirect(route('areainfluenciaHasLenguajes.index'));
    }

    /**
     * Remove the specified Areainfluencia_has_lenguaje from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainfluenciaHasLenguaje = $this->areainfluenciaHasLenguajeRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasLenguaje)) {
            Flash::error('Areainfluencia Has Lenguaje not found');

            return redirect(route('areainfluenciaHasLenguajes.index'));
        }

        $this->areainfluenciaHasLenguajeRepository->delete($id);

        Flash::success('Areainfluencia Has Lenguaje deleted successfully.');

        return redirect(route('areainfluenciaHasLenguajes.index'));
    }
}
