<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaracteristicasEtnicasRequest;
use App\Http\Requests\UpdateCaracteristicasEtnicasRequest;
use App\Repositories\CaracteristicasEtnicasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CaracteristicasEtnicasController extends AppBaseController
{
    /** @var  CaracteristicasEtnicasRepository */
    private $caracteristicasEtnicasRepository;

    public function __construct(CaracteristicasEtnicasRepository $caracteristicasEtnicasRepo)
    {
        $this->caracteristicasEtnicasRepository = $caracteristicasEtnicasRepo;
    }

    /**
     * Display a listing of the CaracteristicasEtnicas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->caracteristicasEtnicasRepository->pushCriteria(new RequestCriteria($request));
        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->all();

        return view('caracteristicas_etnicas.index')
            ->with('caracteristicasEtnicas', $caracteristicasEtnicas);
    }

    /**
     * Show the form for creating a new CaracteristicasEtnicas.
     *
     * @return Response
     */
    public function create()
    {
        return view('caracteristicas_etnicas.create');
    }

    /**
     * Store a newly created CaracteristicasEtnicas in storage.
     *
     * @param CreateCaracteristicasEtnicasRequest $request
     *
     * @return Response
     */
    public function store(CreateCaracteristicasEtnicasRequest $request)
    {
        $input = $request->all();

        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->create($input);

        Flash::success('Caracteristicas Etnicas saved successfully.');

        return redirect(route('caracteristicasEtnicas.index'));
    }

    /**
     * Display the specified CaracteristicasEtnicas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->findWithoutFail($id);

        if (empty($caracteristicasEtnicas)) {
            Flash::error('Caracteristicas Etnicas not found');

            return redirect(route('caracteristicasEtnicas.index'));
        }

        return view('caracteristicas_etnicas.show')->with('caracteristicasEtnicas', $caracteristicasEtnicas);
    }

    /**
     * Show the form for editing the specified CaracteristicasEtnicas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->findWithoutFail($id);

        if (empty($caracteristicasEtnicas)) {
            Flash::error('Caracteristicas Etnicas not found');

            return redirect(route('caracteristicasEtnicas.index'));
        }

        return view('caracteristicas_etnicas.edit')->with('caracteristicasEtnicas', $caracteristicasEtnicas);
    }

    /**
     * Update the specified CaracteristicasEtnicas in storage.
     *
     * @param  int              $id
     * @param UpdateCaracteristicasEtnicasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaracteristicasEtnicasRequest $request)
    {
        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->findWithoutFail($id);

        if (empty($caracteristicasEtnicas)) {
            Flash::error('Caracteristicas Etnicas not found');

            return redirect(route('caracteristicasEtnicas.index'));
        }

        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->update($request->all(), $id);

        Flash::success('Caracteristicas Etnicas updated successfully.');

        return redirect(route('caracteristicasEtnicas.index'));
    }

    /**
     * Remove the specified CaracteristicasEtnicas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caracteristicasEtnicas = $this->caracteristicasEtnicasRepository->findWithoutFail($id);

        if (empty($caracteristicasEtnicas)) {
            Flash::error('Caracteristicas Etnicas not found');

            return redirect(route('caracteristicasEtnicas.index'));
        }

        $this->caracteristicasEtnicasRepository->delete($id);

        Flash::success('Caracteristicas Etnicas deleted successfully.');

        return redirect(route('caracteristicasEtnicas.index'));
    }
}
