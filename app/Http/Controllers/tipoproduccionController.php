<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoProduccionRequest;
use App\Http\Requests\UpdateTipoProduccionRequest;
use App\Repositories\TipoProduccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoProduccionController extends AppBaseController
{
    /** @var  TipoProduccionRepository */
    private $tipoProduccionRepository;

    public function __construct(TipoProduccionRepository $tipoProduccionRepo)
    {
        $this->tipoProduccionRepository = $tipoProduccionRepo;
    }

    /**
     * Display a listing of the TipoProduccion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoProduccionRepository->pushCriteria(new RequestCriteria($request));
        $tipoProduccions = $this->tipoProduccionRepository->all();

        return view('tipo_produccions.index')
            ->with('tipoProduccions', $tipoProduccions);
    }

    /**
     * Show the form for creating a new TipoProduccion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_produccions.create');
    }

    /**
     * Store a newly created TipoProduccion in storage.
     *
     * @param CreateTipoProduccionRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoProduccionRequest $request)
    {
        $input = $request->all();

        $tipoProduccion = $this->tipoProduccionRepository->create($input);

        Flash::success('Tipo Produccion saved successfully.');

        return redirect(route('tipoProduccions.index'));
    }

    /**
     * Display the specified TipoProduccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoProduccion = $this->tipoProduccionRepository->findWithoutFail($id);

        if (empty($tipoProduccion)) {
            Flash::error('Tipo Produccion not found');

            return redirect(route('tipoProduccions.index'));
        }

        return view('tipo_produccions.show')->with('tipoProduccion', $tipoProduccion);
    }

    /**
     * Show the form for editing the specified TipoProduccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoProduccion = $this->tipoProduccionRepository->findWithoutFail($id);

        if (empty($tipoProduccion)) {
            Flash::error('Tipo Produccion not found');

            return redirect(route('tipoProduccions.index'));
        }

        return view('tipo_produccions.edit')->with('tipoProduccion', $tipoProduccion);
    }

    /**
     * Update the specified TipoProduccion in storage.
     *
     * @param  int              $id
     * @param UpdateTipoProduccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoProduccionRequest $request)
    {
        $tipoProduccion = $this->tipoProduccionRepository->findWithoutFail($id);

        if (empty($tipoProduccion)) {
            Flash::error('Tipo Produccion not found');

            return redirect(route('tipoProduccions.index'));
        }

        $tipoProduccion = $this->tipoProduccionRepository->update($request->all(), $id);

        Flash::success('Tipo Produccion updated successfully.');

        return redirect(route('tipoProduccions.index'));
    }

    /**
     * Remove the specified TipoProduccion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoProduccion = $this->tipoProduccionRepository->findWithoutFail($id);

        if (empty($tipoProduccion)) {
            Flash::error('Tipo Produccion not found');

            return redirect(route('tipoProduccions.index'));
        }

        $this->tipoProduccionRepository->delete($id);

        Flash::success('Tipo Produccion deleted successfully.');

        return redirect(route('tipoProduccions.index'));
    }
}
