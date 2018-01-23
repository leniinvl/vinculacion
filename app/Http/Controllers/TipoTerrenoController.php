<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoTerrenoRequest;
use App\Http\Requests\UpdateTipoTerrenoRequest;
use App\Repositories\TipoTerrenoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoTerrenoController extends AppBaseController
{
    /** @var  TipoTerrenoRepository */
    private $tipoTerrenoRepository;

    public function __construct(TipoTerrenoRepository $tipoTerrenoRepo)
    {
        $this->tipoTerrenoRepository = $tipoTerrenoRepo;
    }

    /**
     * Display a listing of the TipoTerreno.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoTerrenoRepository->pushCriteria(new RequestCriteria($request));
        $tipoTerrenos = $this->tipoTerrenoRepository->all();

        return view('tipo_terrenos.index')
            ->with('tipoTerrenos', $tipoTerrenos);
    }

    /**
     * Show the form for creating a new TipoTerreno.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_terrenos.create');
    }

    /**
     * Store a newly created TipoTerreno in storage.
     *
     * @param CreateTipoTerrenoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoTerrenoRequest $request)
    {
        $input = $request->all();

        $tipoTerreno = $this->tipoTerrenoRepository->create($input);

        Flash::success('Tipo Terreno saved successfully.');

        return redirect(route('tipoTerrenos.index'));
    }

    /**
     * Display the specified TipoTerreno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoTerreno = $this->tipoTerrenoRepository->findWithoutFail($id);

        if (empty($tipoTerreno)) {
            Flash::error('Tipo Terreno not found');

            return redirect(route('tipoTerrenos.index'));
        }

        return view('tipo_terrenos.show')->with('tipoTerreno', $tipoTerreno);
    }

    /**
     * Show the form for editing the specified TipoTerreno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoTerreno = $this->tipoTerrenoRepository->findWithoutFail($id);

        if (empty($tipoTerreno)) {
            Flash::error('Tipo Terreno not found');

            return redirect(route('tipoTerrenos.index'));
        }

        return view('tipo_terrenos.edit')->with('tipoTerreno', $tipoTerreno);
    }

    /**
     * Update the specified TipoTerreno in storage.
     *
     * @param  int              $id
     * @param UpdateTipoTerrenoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoTerrenoRequest $request)
    {
        $tipoTerreno = $this->tipoTerrenoRepository->findWithoutFail($id);

        if (empty($tipoTerreno)) {
            Flash::error('Tipo Terreno not found');

            return redirect(route('tipoTerrenos.index'));
        }

        $tipoTerreno = $this->tipoTerrenoRepository->update($request->all(), $id);

        Flash::success('Tipo Terreno updated successfully.');

        return redirect(route('tipoTerrenos.index'));
    }

    /**
     * Remove the specified TipoTerreno from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoTerreno = $this->tipoTerrenoRepository->findWithoutFail($id);

        if (empty($tipoTerreno)) {
            Flash::error('Tipo Terreno not found');

            return redirect(route('tipoTerrenos.index'));
        }

        $this->tipoTerrenoRepository->delete($id);

        Flash::success('Tipo Terreno deleted successfully.');

        return redirect(route('tipoTerrenos.index'));
    }
}
