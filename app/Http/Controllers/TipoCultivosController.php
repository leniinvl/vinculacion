<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoCultivosRequest;
use App\Http\Requests\UpdateTipoCultivosRequest;
use App\Repositories\TipoCultivosRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoCultivosController extends AppBaseController
{
    /** @var  TipoCultivosRepository */
    private $tipoCultivosRepository;

    public function __construct(TipoCultivosRepository $tipoCultivosRepo)
    {
        $this->tipoCultivosRepository = $tipoCultivosRepo;
    }

    /**
     * Display a listing of the TipoCultivos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoCultivosRepository->pushCriteria(new RequestCriteria($request));
        $tipoCultivos = $this->tipoCultivosRepository->all();

        return view('tipo_cultivos.index')
            ->with('tipoCultivos', $tipoCultivos);
    }

    /**
     * Show the form for creating a new TipoCultivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_cultivos.create');
    }

    /**
     * Store a newly created TipoCultivos in storage.
     *
     * @param CreateTipoCultivosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCultivosRequest $request)
    {
        $input = $request->all();

        $tipoCultivos = $this->tipoCultivosRepository->create($input);

        Flash::success('Tipo Cultivos saved successfully.');

        return redirect(route('tipoCultivos.index'));
    }

    /**
     * Display the specified TipoCultivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCultivos = $this->tipoCultivosRepository->findWithoutFail($id);

        if (empty($tipoCultivos)) {
            Flash::error('Tipo Cultivos not found');

            return redirect(route('tipoCultivos.index'));
        }

        return view('tipo_cultivos.show')->with('tipoCultivos', $tipoCultivos);
    }

    /**
     * Show the form for editing the specified TipoCultivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCultivos = $this->tipoCultivosRepository->findWithoutFail($id);

        if (empty($tipoCultivos)) {
            Flash::error('Tipo Cultivos not found');

            return redirect(route('tipoCultivos.index'));
        }

        return view('tipo_cultivos.edit')->with('tipoCultivos', $tipoCultivos);
    }

    /**
     * Update the specified TipoCultivos in storage.
     *
     * @param  int              $id
     * @param UpdateTipoCultivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCultivosRequest $request)
    {
        $tipoCultivos = $this->tipoCultivosRepository->findWithoutFail($id);

        if (empty($tipoCultivos)) {
            Flash::error('Tipo Cultivos not found');

            return redirect(route('tipoCultivos.index'));
        }

        $tipoCultivos = $this->tipoCultivosRepository->update($request->all(), $id);

        Flash::success('Tipo Cultivos updated successfully.');

        return redirect(route('tipoCultivos.index'));
    }

    /**
     * Remove the specified TipoCultivos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCultivos = $this->tipoCultivosRepository->findWithoutFail($id);

        if (empty($tipoCultivos)) {
            Flash::error('Tipo Cultivos not found');

            return redirect(route('tipoCultivos.index'));
        }

        $this->tipoCultivosRepository->delete($id);

        Flash::success('Tipo Cultivos deleted successfully.');

        return redirect(route('tipoCultivos.index'));
    }
}
