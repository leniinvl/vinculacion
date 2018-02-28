<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreainfluencia_has_peligrosRequest;
use App\Http\Requests\UpdateAreainfluencia_has_peligrosRequest;
use App\Repositories\Areainfluencia_has_peligrosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Areainfluencia_has_peligrosController extends AppBaseController
{
    /** @var  Areainfluencia_has_peligrosRepository */
    private $areainfluenciaHasPeligrosRepository;

    public function __construct(Areainfluencia_has_peligrosRepository $areainfluenciaHasPeligrosRepo)
    {
        $this->areainfluenciaHasPeligrosRepository = $areainfluenciaHasPeligrosRepo;
    }

    /**
     * Display a listing of the Areainfluencia_has_peligros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainfluenciaHasPeligrosRepository->pushCriteria(new RequestCriteria($request));
        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->all();

        return view('areainfluencia_has_peligros.index')
            ->with('areainfluenciaHasPeligros', $areainfluenciaHasPeligros);
    }

    /**
     * Show the form for creating a new Areainfluencia_has_peligros.
     *
     * @return Response
     */
    public function create()
    {
        return view('areainfluencia_has_peligros.create');
    }

    /**
     * Store a newly created Areainfluencia_has_peligros in storage.
     *
     * @param CreateAreainfluencia_has_peligrosRequest $request
     *
     * @return Response
     */
    public function store(CreateAreainfluencia_has_peligrosRequest $request)
    {
        $input = $request->all();

        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->create($input);

        Flash::success('Areainfluencia Has Peligros saved successfully.');

        return redirect(route('areainfluenciaHasPeligros.index'));
    }

    /**
     * Display the specified Areainfluencia_has_peligros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasPeligros)) {
            Flash::error('Areainfluencia Has Peligros not found');

            return redirect(route('areainfluenciaHasPeligros.index'));
        }

        return view('areainfluencia_has_peligros.show')->with('areainfluenciaHasPeligros', $areainfluenciaHasPeligros);
    }

    /**
     * Show the form for editing the specified Areainfluencia_has_peligros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasPeligros)) {
            Flash::error('Areainfluencia Has Peligros not found');

            return redirect(route('areainfluenciaHasPeligros.index'));
        }

        return view('areainfluencia_has_peligros.edit')->with('areainfluenciaHasPeligros', $areainfluenciaHasPeligros);
    }

    /**
     * Update the specified Areainfluencia_has_peligros in storage.
     *
     * @param  int              $id
     * @param UpdateAreainfluencia_has_peligrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreainfluencia_has_peligrosRequest $request)
    {
        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasPeligros)) {
            Flash::error('Areainfluencia Has Peligros not found');

            return redirect(route('areainfluenciaHasPeligros.index'));
        }

        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->update($request->all(), $id);

        Flash::success('Areainfluencia Has Peligros updated successfully.');

        return redirect(route('areainfluenciaHasPeligros.index'));
    }

    /**
     * Remove the specified Areainfluencia_has_peligros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainfluenciaHasPeligros = $this->areainfluenciaHasPeligrosRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasPeligros)) {
            Flash::error('Areainfluencia Has Peligros not found');

            return redirect(route('areainfluenciaHasPeligros.index'));
        }

        $this->areainfluenciaHasPeligrosRepository->delete($id);

        Flash::success('Areainfluencia Has Peligros deleted successfully.');

        return redirect(route('areainfluenciaHasPeligros.index'));
    }
}
