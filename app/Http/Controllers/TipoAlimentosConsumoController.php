<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoAlimentosConsumoRequest;
use App\Http\Requests\UpdateTipoAlimentosConsumoRequest;
use App\Repositories\TipoAlimentosConsumoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoAlimentosConsumoController extends AppBaseController
{
    /** @var  TipoAlimentosConsumoRepository */
    private $tipoAlimentosConsumoRepository;

    public function __construct(TipoAlimentosConsumoRepository $tipoAlimentosConsumoRepo)
    {
        $this->tipoAlimentosConsumoRepository = $tipoAlimentosConsumoRepo;
    }

    /**
     * Display a listing of the TipoAlimentosConsumo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoAlimentosConsumoRepository->pushCriteria(new RequestCriteria($request));
        $tipoAlimentosConsumos = $this->tipoAlimentosConsumoRepository->all();

        return view('tipo_alimentos_consumos.index')
            ->with('tipoAlimentosConsumos', $tipoAlimentosConsumos);
    }

    /**
     * Show the form for creating a new TipoAlimentosConsumo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_alimentos_consumos.create');
    }

    /**
     * Store a newly created TipoAlimentosConsumo in storage.
     *
     * @param CreateTipoAlimentosConsumoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAlimentosConsumoRequest $request)
    {
        $input = $request->all();

        $tipoAlimentosConsumo = $this->tipoAlimentosConsumoRepository->create($input);

        Flash::success('Tipo Alimentos Consumo saved successfully.');

        return redirect(route('tipoAlimentosConsumos.index'));
    }

    /**
     * Display the specified TipoAlimentosConsumo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAlimentosConsumo = $this->tipoAlimentosConsumoRepository->findWithoutFail($id);

        if (empty($tipoAlimentosConsumo)) {
            Flash::error('Tipo Alimentos Consumo not found');

            return redirect(route('tipoAlimentosConsumos.index'));
        }

        return view('tipo_alimentos_consumos.show')->with('tipoAlimentosConsumo', $tipoAlimentosConsumo);
    }

    /**
     * Show the form for editing the specified TipoAlimentosConsumo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAlimentosConsumo = $this->tipoAlimentosConsumoRepository->findWithoutFail($id);

        if (empty($tipoAlimentosConsumo)) {
            Flash::error('Tipo Alimentos Consumo not found');

            return redirect(route('tipoAlimentosConsumos.index'));
        }

        return view('tipo_alimentos_consumos.edit')->with('tipoAlimentosConsumo', $tipoAlimentosConsumo);
    }

    /**
     * Update the specified TipoAlimentosConsumo in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAlimentosConsumoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAlimentosConsumoRequest $request)
    {
        $tipoAlimentosConsumo = $this->tipoAlimentosConsumoRepository->findWithoutFail($id);

        if (empty($tipoAlimentosConsumo)) {
            Flash::error('Tipo Alimentos Consumo not found');

            return redirect(route('tipoAlimentosConsumos.index'));
        }

        $tipoAlimentosConsumo = $this->tipoAlimentosConsumoRepository->update($request->all(), $id);

        Flash::success('Tipo Alimentos Consumo updated successfully.');

        return redirect(route('tipoAlimentosConsumos.index'));
    }

    /**
     * Remove the specified TipoAlimentosConsumo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAlimentosConsumo = $this->tipoAlimentosConsumoRepository->findWithoutFail($id);

        if (empty($tipoAlimentosConsumo)) {
            Flash::error('Tipo Alimentos Consumo not found');

            return redirect(route('tipoAlimentosConsumos.index'));
        }

        $this->tipoAlimentosConsumoRepository->delete($id);

        Flash::success('Tipo Alimentos Consumo deleted successfully.');

        return redirect(route('tipoAlimentosConsumos.index'));
    }
}
