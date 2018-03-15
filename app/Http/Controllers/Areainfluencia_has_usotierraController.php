<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreainfluencia_has_usotierraRequest;
use App\Http\Requests\UpdateAreainfluencia_has_usotierraRequest;
use App\Repositories\Areainfluencia_has_usotierraRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Areainfluencia_has_usotierraController extends AppBaseController
{
    /** @var  Areainfluencia_has_usotierraRepository */
    private $areainfluenciaHasUsotierraRepository;

    public function __construct(Areainfluencia_has_usotierraRepository $areainfluenciaHasUsotierraRepo)
    {
        $this->areainfluenciaHasUsotierraRepository = $areainfluenciaHasUsotierraRepo;
    }

    /**
     * Display a listing of the Areainfluencia_has_usotierra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainfluenciaHasUsotierraRepository->pushCriteria(new RequestCriteria($request));
        $areainfluenciaHasUsotierras = $this->areainfluenciaHasUsotierraRepository->all();

        return view('areainfluencia_has_usotierras.index')
            ->with('areainfluenciaHasUsotierras', $areainfluenciaHasUsotierras);
    }

    /**
     * Show the form for creating a new Areainfluencia_has_usotierra.
     *
     * @return Response
     */
    public function create()
    {
        return view('areainfluencia_has_usotierras.create');
    }

    /**
     * Store a newly created Areainfluencia_has_usotierra in storage.
     *
     * @param CreateAreainfluencia_has_usotierraRequest $request
     *
     * @return Response
     */
    public function store(CreateAreainfluencia_has_usotierraRequest $request)
    {
        $input = $request->all();

        $areainfluenciaHasUsotierra = $this->areainfluenciaHasUsotierraRepository->create($input);

        Flash::success('Areainfluencia Has Usotierra
guardado exitosamente.');

        return redirect(route('areainfluenciaHasUsotierras.index'));
    }

    /**
     * Display the specified Areainfluencia_has_usotierra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainfluenciaHasUsotierra = $this->areainfluenciaHasUsotierraRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasUsotierra)) {
            Flash::error('Areainfluencia Has Usotierra not found');

            return redirect(route('areainfluenciaHasUsotierras.index'));
        }

        return view('areainfluencia_has_usotierras.show')->with('areainfluenciaHasUsotierra', $areainfluenciaHasUsotierra);
    }

    /**
     * Show the form for editing the specified Areainfluencia_has_usotierra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areainfluenciaHasUsotierra = $this->areainfluenciaHasUsotierraRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasUsotierra)) {
            Flash::error('Areainfluencia Has Usotierra not found');

            return redirect(route('areainfluenciaHasUsotierras.index'));
        }

        return view('areainfluencia_has_usotierras.edit')->with('areainfluenciaHasUsotierra', $areainfluenciaHasUsotierra);
    }

    /**
     * Update the specified Areainfluencia_has_usotierra in storage.
     *
     * @param  int              $id
     * @param UpdateAreainfluencia_has_usotierraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreainfluencia_has_usotierraRequest $request)
    {
        $areainfluenciaHasUsotierra = $this->areainfluenciaHasUsotierraRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasUsotierra)) {
            Flash::error('Areainfluencia Has Usotierra not found');

            return redirect(route('areainfluenciaHasUsotierras.index'));
        }

        $areainfluenciaHasUsotierra = $this->areainfluenciaHasUsotierraRepository->update($request->all(), $id);

        Flash::success('Areainfluencia Has Usotierra updated successfully.');

        return redirect(route('areainfluenciaHasUsotierras.index'));
    }

    /**
     * Remove the specified Areainfluencia_has_usotierra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainfluenciaHasUsotierra = $this->areainfluenciaHasUsotierraRepository->findWithoutFail($id);

        if (empty($areainfluenciaHasUsotierra)) {
            Flash::error('Areainfluencia Has Usotierra not found');

            return redirect(route('areainfluenciaHasUsotierras.index'));
        }

        $this->areainfluenciaHasUsotierraRepository->delete($id);

        Flash::success('Areainfluencia Has Usotierra deleted successfully.');

        return redirect(route('areainfluenciaHasUsotierras.index'));
    }
}
