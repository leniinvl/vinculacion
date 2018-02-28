<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreaInfluenciaHasTipoVegetalRequest;
use App\Http\Requests\UpdateAreaInfluenciaHasTipoVegetalRequest;
use App\Repositories\AreaInfluenciaHasTipoVegetalRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreaInfluenciaHasTipoVegetalController extends AppBaseController
{
    /** @var  AreaInfluenciaHasTipoVegetalRepository */
    private $areaInfluenciaHasTipoVegetalRepository;

    public function __construct(AreaInfluenciaHasTipoVegetalRepository $areaInfluenciaHasTipoVegetalRepo)
    {
        $this->areaInfluenciaHasTipoVegetalRepository = $areaInfluenciaHasTipoVegetalRepo;
    }

    /**
     * Display a listing of the AreaInfluenciaHasTipoVegetal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaInfluenciaHasTipoVegetalRepository->pushCriteria(new RequestCriteria($request));
        $areaInfluenciaHasTipoVegetals = $this->areaInfluenciaHasTipoVegetalRepository->all();

        return view('area_influencia_has_tipo_vegetals.index')
            ->with('areaInfluenciaHasTipoVegetals', $areaInfluenciaHasTipoVegetals);
    }

    /**
     * Show the form for creating a new AreaInfluenciaHasTipoVegetal.
     *
     * @return Response
     */
    public function create()
    {
        return view('area_influencia_has_tipo_vegetals.create');
    }

    /**
     * Store a newly created AreaInfluenciaHasTipoVegetal in storage.
     *
     * @param CreateAreaInfluenciaHasTipoVegetalRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaInfluenciaHasTipoVegetalRequest $request)
    {
        $input = $request->all();

        $areaInfluenciaHasTipoVegetal = $this->areaInfluenciaHasTipoVegetalRepository->create($input);

        Flash::success('Area Influencia Has Tipo Vegetal saved successfully.');

        return redirect(route('areaInfluenciaHasTipoVegetals.index'));
    }

    /**
     * Display the specified AreaInfluenciaHasTipoVegetal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaInfluenciaHasTipoVegetal = $this->areaInfluenciaHasTipoVegetalRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoVegetal)) {
            Flash::error('Area Influencia Has Tipo Vegetal not found');

            return redirect(route('areaInfluenciaHasTipoVegetals.index'));
        }

        return view('area_influencia_has_tipo_vegetals.show')->with('areaInfluenciaHasTipoVegetal', $areaInfluenciaHasTipoVegetal);
    }

    /**
     * Show the form for editing the specified AreaInfluenciaHasTipoVegetal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaInfluenciaHasTipoVegetal = $this->areaInfluenciaHasTipoVegetalRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoVegetal)) {
            Flash::error('Area Influencia Has Tipo Vegetal not found');

            return redirect(route('areaInfluenciaHasTipoVegetals.index'));
        }

        return view('area_influencia_has_tipo_vegetals.edit')->with('areaInfluenciaHasTipoVegetal', $areaInfluenciaHasTipoVegetal);
    }

    /**
     * Update the specified AreaInfluenciaHasTipoVegetal in storage.
     *
     * @param  int              $id
     * @param UpdateAreaInfluenciaHasTipoVegetalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaInfluenciaHasTipoVegetalRequest $request)
    {
        $areaInfluenciaHasTipoVegetal = $this->areaInfluenciaHasTipoVegetalRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoVegetal)) {
            Flash::error('Area Influencia Has Tipo Vegetal not found');

            return redirect(route('areaInfluenciaHasTipoVegetals.index'));
        }

        $areaInfluenciaHasTipoVegetal = $this->areaInfluenciaHasTipoVegetalRepository->update($request->all(), $id);

        Flash::success('Area Influencia Has Tipo Vegetal updated successfully.');

        return redirect(route('areaInfluenciaHasTipoVegetals.index'));
    }

    /**
     * Remove the specified AreaInfluenciaHasTipoVegetal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaInfluenciaHasTipoVegetal = $this->areaInfluenciaHasTipoVegetalRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTipoVegetal)) {
            Flash::error('Area Influencia Has Tipo Vegetal not found');

            return redirect(route('areaInfluenciaHasTipoVegetals.index'));
        }

        $this->areaInfluenciaHasTipoVegetalRepository->delete($id);

        Flash::success('Area Influencia Has Tipo Vegetal deleted successfully.');

        return redirect(route('areaInfluenciaHasTipoVegetals.index'));
    }
}
