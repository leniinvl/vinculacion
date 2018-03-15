<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreaInfluenciaHasTipoFuentesRequest;
use App\Http\Requests\UpdateAreaInfluenciaHasTipoFuentesRequest;
use App\Repositories\AreaInfluenciaHasTipoFuentesRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreaInfluenciaHasTipoFuentesController extends AppBaseController
{
    /** @var  AreaInfluenciaHasTipoFuentesRepository */
    private $areaInfluenciaHasTipoFuentesRepository;

    public function __construct(AreaInfluenciaHasTipoFuentesRepository $areaInfluenciaHasTipoFuentesRepo)
    {
        $this->areaInfluenciaHasTipoFuentesRepository = $areaInfluenciaHasTipoFuentesRepo;
    }

    /**
     * Display a listing of the AreaInfluenciaHasTipoFuentes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaInfluenciaHasTipoFuentesRepository->pushCriteria(new RequestCriteria($request));
        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->all();

        return view('area_influencia_has_tipo_fuentes.index')
            ->with('areaInfluenciaHasTipoFuentes', $areaInfluenciaHasTipoFuentes);
    }

    /**
     * Show the form for creating a new AreaInfluenciaHasTipoFuentes.
     *
     * @return Response
     */
    public function create()
    {
        return view('area_influencia_has_tipo_fuentes.create');
    }

    /**
     * Store a newly created AreaInfluenciaHasTipoFuentes in storage.
     *
     * @param CreateAreaInfluenciaHasTipoFuentesRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaInfluenciaHasTipoFuentesRequest $request)
    {
        $input = $request->all();

        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->create($input);

        Flash::success('Area Influencia Has Tipo Fuentes
guardado exitosamente.');

        return redirect(route('areaInfluenciaHasTipoFuentes.index'));
    }

    /**
     * Display the specified AreaInfluenciaHasTipoFuentes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoFuentes)) {
            Flash::error('Area Influencia Has Tipo Fuentes not found');

            return redirect(route('areaInfluenciaHasTipoFuentes.index'));
        }

        return view('area_influencia_has_tipo_fuentes.show')->with('areaInfluenciaHasTipoFuentes', $areaInfluenciaHasTipoFuentes);
    }

    /**
     * Show the form for editing the specified AreaInfluenciaHasTipoFuentes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoFuentes)) {
            Flash::error('Area Influencia Has Tipo Fuentes not found');

            return redirect(route('areaInfluenciaHasTipoFuentes.index'));
        }

        return view('area_influencia_has_tipo_fuentes.edit')->with('areaInfluenciaHasTipoFuentes', $areaInfluenciaHasTipoFuentes);
    }

    /**
     * Update the specified AreaInfluenciaHasTipoFuentes in storage.
     *
     * @param  int              $id
     * @param UpdateAreaInfluenciaHasTipoFuentesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaInfluenciaHasTipoFuentesRequest $request)
    {
        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoFuentes)) {
            Flash::error('Area Influencia Has Tipo Fuentes not found');

            return redirect(route('areaInfluenciaHasTipoFuentes.index'));
        }

        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->update($request->all(), $id);

        Flash::success('Area Influencia Has Tipo Fuentes updated successfully.');

        return redirect(route('areaInfluenciaHasTipoFuentes.index'));
    }

    /**
     * Remove the specified AreaInfluenciaHasTipoFuentes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaInfluenciaHasTipoFuentes = $this->areaInfluenciaHasTipoFuentesRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoFuentes)) {
            Flash::error('Area Influencia Has Tipo Fuentes not found');

            return redirect(route('areaInfluenciaHasTipoFuentes.index'));
        }

        $this->areaInfluenciaHasTipoFuentesRepository->delete($id);

        Flash::success('Area Influencia Has Tipo Fuentes deleted successfully.');

        return redirect(route('areaInfluenciaHasTipoFuentes.index'));
    }
}
