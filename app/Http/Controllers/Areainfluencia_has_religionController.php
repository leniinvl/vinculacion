<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreainfluencia_has_religionRequest;
use App\Http\Requests\UpdateAreainfluencia_has_religionRequest;
use App\Repositories\Areainfluencia_has_religionRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Areainfluencia_has_religionController extends AppBaseController
{
    /** @var  Areainfluencia_has_religionRepository */
    private $areainfluenciaHasReligionRepository;

    public function __construct(Areainfluencia_has_religionRepository $areainfluenciaHasReligionRepo)
    {
        $this->areainfluenciaHasReligionRepository = $areainfluenciaHasReligionRepo;
    }

    /**
     * Display a listing of the Areainfluencia_has_religion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainfluenciaHasReligionRepository->pushCriteria(new RequestCriteria($request));
        $areainfluenciaHasReligions = $this->areainfluenciaHasReligionRepository->all();

        return view('areainfluencia_has_religions.index')
            ->with('areainfluenciaHasReligions', $areainfluenciaHasReligions);
    }

    /**
     * Show the form for creating a new Areainfluencia_has_religion.
     *
     * @return Response
     */
    public function create()
    {
        return view('areainfluencia_has_religions.create');
    }

    /**
     * Store a newly created Areainfluencia_has_religion in storage.
     *
     * @param CreateAreainfluencia_has_religionRequest $request
     *
     * @return Response
     */
    public function store(CreateAreainfluencia_has_religionRequest $request)
    {
        $input = $request->all();

        $areainfluenciaHasReligion = $this->areainfluenciaHasReligionRepository->create($input);

        Flash::success('Areainfluencia Has Religion saved successfully.');

        return redirect(route('areainfluenciaHasReligions.index'));
    }

    /**
     * Display the specified Areainfluencia_has_religion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainfluenciaHasReligion = $this->areainfluenciaHasReligionRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasReligion)) {
            Flash::error('Areainfluencia Has Religion not found');

            return redirect(route('areainfluenciaHasReligions.index'));
        }

        return view('areainfluencia_has_religions.show')->with('areainfluenciaHasReligion', $areainfluenciaHasReligion);
    }

    /**
     * Show the form for editing the specified Areainfluencia_has_religion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areainfluenciaHasReligion = $this->areainfluenciaHasReligionRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasReligion)) {
            Flash::error('Areainfluencia Has Religion not found');

            return redirect(route('areainfluenciaHasReligions.index'));
        }

        return view('areainfluencia_has_religions.edit')->with('areainfluenciaHasReligion', $areainfluenciaHasReligion);
    }

    /**
     * Update the specified Areainfluencia_has_religion in storage.
     *
     * @param  int              $id
     * @param UpdateAreainfluencia_has_religionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreainfluencia_has_religionRequest $request)
    {
        $areainfluenciaHasReligion = $this->areainfluenciaHasReligionRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasReligion)) {
            Flash::error('Areainfluencia Has Religion not found');

            return redirect(route('areainfluenciaHasReligions.index'));
        }

        $areainfluenciaHasReligion = $this->areainfluenciaHasReligionRepository->update($request->all(), $id);

        Flash::success('Areainfluencia Has Religion updated successfully.');

        return redirect(route('areainfluenciaHasReligions.index'));
    }

    /**
     * Remove the specified Areainfluencia_has_religion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainfluenciaHasReligion = $this->areainfluenciaHasReligionRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasReligion)) {
            Flash::error('Areainfluencia Has Religion not found');

            return redirect(route('areainfluenciaHasReligions.index'));
        }

        $this->areainfluenciaHasReligionRepository->delete($id);

        Flash::success('Areainfluencia Has Religion deleted successfully.');

        return redirect(route('areainfluenciaHasReligions.index'));
    }
}
