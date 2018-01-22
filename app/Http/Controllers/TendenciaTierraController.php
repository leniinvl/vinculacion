<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTendenciaTierraRequest;
use App\Http\Requests\UpdateTendenciaTierraRequest;
use App\Repositories\TendenciaTierraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TendenciaTierraController extends AppBaseController
{
    /** @var  TendenciaTierraRepository */
    private $tendenciaTierraRepository;

    public function __construct(TendenciaTierraRepository $tendenciaTierraRepo)
    {
        $this->tendenciaTierraRepository = $tendenciaTierraRepo;
    }

    /**
     * Display a listing of the TendenciaTierra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tendenciaTierraRepository->pushCriteria(new RequestCriteria($request));
        $tendenciaTierras = $this->tendenciaTierraRepository->all();

        return view('tendencia_tierras.index')
            ->with('tendenciaTierras', $tendenciaTierras);
    }

    /**
     * Show the form for creating a new TendenciaTierra.
     *
     * @return Response
     */
    public function create()
    {
        return view('tendencia_tierras.create');
    }

    /**
     * Store a newly created TendenciaTierra in storage.
     *
     * @param CreateTendenciaTierraRequest $request
     *
     * @return Response
     */
    public function store(CreateTendenciaTierraRequest $request)
    {
        $input = $request->all();

        $tendenciaTierra = $this->tendenciaTierraRepository->create($input);

        Flash::success('Tendencia Tierra saved successfully.');

        return redirect(route('tendenciaTierras.index'));
    }

    /**
     * Display the specified TendenciaTierra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tendenciaTierra = $this->tendenciaTierraRepository->findWithoutFail($id);

        if (empty($tendenciaTierra)) {
            Flash::error('Tendencia Tierra not found');

            return redirect(route('tendenciaTierras.index'));
        }

        return view('tendencia_tierras.show')->with('tendenciaTierra', $tendenciaTierra);
    }

    /**
     * Show the form for editing the specified TendenciaTierra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tendenciaTierra = $this->tendenciaTierraRepository->findWithoutFail($id);

        if (empty($tendenciaTierra)) {
            Flash::error('Tendencia Tierra not found');

            return redirect(route('tendenciaTierras.index'));
        }

        return view('tendencia_tierras.edit')->with('tendenciaTierra', $tendenciaTierra);
    }

    /**
     * Update the specified TendenciaTierra in storage.
     *
     * @param  int              $id
     * @param UpdateTendenciaTierraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTendenciaTierraRequest $request)
    {
        $tendenciaTierra = $this->tendenciaTierraRepository->findWithoutFail($id);

        if (empty($tendenciaTierra)) {
            Flash::error('Tendencia Tierra not found');

            return redirect(route('tendenciaTierras.index'));
        }

        $tendenciaTierra = $this->tendenciaTierraRepository->update($request->all(), $id);

        Flash::success('Tendencia Tierra updated successfully.');

        return redirect(route('tendenciaTierras.index'));
    }

    /**
     * Remove the specified TendenciaTierra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tendenciaTierra = $this->tendenciaTierraRepository->findWithoutFail($id);

        if (empty($tendenciaTierra)) {
            Flash::error('Tendencia Tierra not found');

            return redirect(route('tendenciaTierras.index'));
        }

        $this->tendenciaTierraRepository->delete($id);

        Flash::success('Tendencia Tierra deleted successfully.');

        return redirect(route('tendenciaTierras.index'));
    }
}
