<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoVegetalRequest;
use App\Http\Requests\UpdateTipoVegetalRequest;
use App\Repositories\TipoVegetalRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoVegetalController extends AppBaseController
{
    /** @var  TipoVegetalRepository */
    private $tipoVegetalRepository;

    public function __construct(TipoVegetalRepository $tipoVegetalRepo)
    {
        $this->tipoVegetalRepository = $tipoVegetalRepo;
    }

    /**
     * Display a listing of the TipoVegetal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoVegetalRepository->pushCriteria(new RequestCriteria($request));
        $tipoVegetals = $this->tipoVegetalRepository->all();

        return view('tipo_vegetals.index')
            ->with('tipoVegetals', $tipoVegetals);
    }

    /**
     * Show the form for creating a new TipoVegetal.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_vegetals.create');
    }

    /**
     * Store a newly created TipoVegetal in storage.
     *
     * @param CreateTipoVegetalRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoVegetalRequest $request)
    {
        $input = $request->all();

        $tipoVegetal = $this->tipoVegetalRepository->create($input);

        Flash::success('Tipo Vegetal
guardado exitosamente.');

        return redirect(route('tipoVegetals.index'));
    }

    /**
     * Display the specified TipoVegetal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoVegetal = $this->tipoVegetalRepository->findWithoutFail($id);

        if (empty($tipoVegetal)) {
            Flash::error('Tipo Vegetal not found');

            return redirect(route('tipoVegetals.index'));
        }

        return view('tipo_vegetals.show')->with('tipoVegetal', $tipoVegetal);
    }

    /**
     * Show the form for editing the specified TipoVegetal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoVegetal = $this->tipoVegetalRepository->findWithoutFail($id);

        if (empty($tipoVegetal)) {
            Flash::error('Tipo Vegetal not found');

            return redirect(route('tipoVegetals.index'));
        }

        return view('tipo_vegetals.edit')->with('tipoVegetal', $tipoVegetal);
    }

    /**
     * Update the specified TipoVegetal in storage.
     *
     * @param  int              $id
     * @param UpdateTipoVegetalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoVegetalRequest $request)
    {
        $tipoVegetal = $this->tipoVegetalRepository->findWithoutFail($id);

        if (empty($tipoVegetal)) {
            Flash::error('Tipo Vegetal not found');

            return redirect(route('tipoVegetals.index'));
        }

        $tipoVegetal = $this->tipoVegetalRepository->update($request->all(), $id);

        Flash::success('Tipo Vegetal updated successfully.');

        return redirect(route('tipoVegetals.index'));
    }

    /**
     * Remove the specified TipoVegetal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoVegetal = $this->tipoVegetalRepository->findWithoutFail($id);

        if (empty($tipoVegetal)) {
            Flash::error('Tipo Vegetal not found');

            return redirect(route('tipoVegetals.index'));
        }

        $this->tipoVegetalRepository->delete($id);

        Flash::success('Tipo Vegetal deleted successfully.');

        return redirect(route('tipoVegetals.index'));
    }
}
