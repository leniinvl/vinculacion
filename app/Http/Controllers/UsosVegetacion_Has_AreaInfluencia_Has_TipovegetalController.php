<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest;
use App\Http\Requests\UpdateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest;
use App\Repositories\UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalController extends AppBaseController
{
    /** @var  UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRepository */
    private $usosVegetacionHasAreaInfluenciaHasTipovegetalRepository;

    public function __construct(UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRepository $usosVegetacionHasAreaInfluenciaHasTipovegetalRepo)
    {
        $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository = $usosVegetacionHasAreaInfluenciaHasTipovegetalRepo;
    }

    /**
     * Display a listing of the UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->pushCriteria(new RequestCriteria($request));
        $usosVegetacionHasAreaInfluenciaHasTipovegetals = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->all();

        return view('usos_vegetacion__has__area_influencia__has__tipovegetals.index')
            ->with('usosVegetacionHasAreaInfluenciaHasTipovegetals', $usosVegetacionHasAreaInfluenciaHasTipovegetals);
    }

    /**
     * Show the form for creating a new UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal.
     *
     * @return Response
     */
    public function create()
    {
        return view('usos_vegetacion__has__area_influencia__has__tipovegetals.create');
    }

    /**
     * Store a newly created UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal in storage.
     *
     * @param CreateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest $request
     *
     * @return Response
     */
    public function store(CreateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest $request)
    {
        $input = $request->all();

        $usosVegetacionHasAreaInfluenciaHasTipovegetal = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->create($input);

        Flash::success('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal saved successfully.');

        return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
    }

    /**
     * Display the specified UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usosVegetacionHasAreaInfluenciaHasTipovegetal = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->findWithoutFail($id);

        if (empty($usosVegetacionHasAreaInfluenciaHasTipovegetal)) {
            Flash::error('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal not found');

            return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
        }

        return view('usos_vegetacion__has__area_influencia__has__tipovegetals.show')->with('usosVegetacionHasAreaInfluenciaHasTipovegetal', $usosVegetacionHasAreaInfluenciaHasTipovegetal);
    }

    /**
     * Show the form for editing the specified UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usosVegetacionHasAreaInfluenciaHasTipovegetal = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->findWithoutFail($id);

        if (empty($usosVegetacionHasAreaInfluenciaHasTipovegetal)) {
            Flash::error('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal not found');

            return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
        }

        return view('usos_vegetacion__has__area_influencia__has__tipovegetals.edit')->with('usosVegetacionHasAreaInfluenciaHasTipovegetal', $usosVegetacionHasAreaInfluenciaHasTipovegetal);
    }

    /**
     * Update the specified UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal in storage.
     *
     * @param  int              $id
     * @param UpdateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest $request)
    {
        $usosVegetacionHasAreaInfluenciaHasTipovegetal = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->findWithoutFail($id);

        if (empty($usosVegetacionHasAreaInfluenciaHasTipovegetal)) {
            Flash::error('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal not found');

            return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
        }

        $usosVegetacionHasAreaInfluenciaHasTipovegetal = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->update($request->all(), $id);

        Flash::success('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal updated successfully.');

        return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
    }

    /**
     * Remove the specified UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usosVegetacionHasAreaInfluenciaHasTipovegetal = $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->findWithoutFail($id);

        if (empty($usosVegetacionHasAreaInfluenciaHasTipovegetal)) {
            Flash::error('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal not found');

            return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
        }

        $this->usosVegetacionHasAreaInfluenciaHasTipovegetalRepository->delete($id);

        Flash::success('Usos Vegetacion  Has  Area Influencia  Has  Tipovegetal deleted successfully.');

        return redirect(route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index'));
    }
}
