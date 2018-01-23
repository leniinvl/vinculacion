<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvacuacionAguasServidasRequest;
use App\Http\Requests\UpdateEvacuacionAguasServidasRequest;
use App\Repositories\EvacuacionAguasServidasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EvacuacionAguasServidasController extends AppBaseController
{
    /** @var  EvacuacionAguasServidasRepository */
    private $evacuacionAguasServidasRepository;

    public function __construct(EvacuacionAguasServidasRepository $evacuacionAguasServidasRepo)
    {
        $this->evacuacionAguasServidasRepository = $evacuacionAguasServidasRepo;
    }

    /**
     * Display a listing of the EvacuacionAguasServidas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->evacuacionAguasServidasRepository->pushCriteria(new RequestCriteria($request));
        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->all();

        return view('evacuacion_aguas_servidas.index')
            ->with('evacuacionAguasServidas', $evacuacionAguasServidas);
    }

    /**
     * Show the form for creating a new EvacuacionAguasServidas.
     *
     * @return Response
     */
    public function create()
    {
        return view('evacuacion_aguas_servidas.create');
    }

    /**
     * Store a newly created EvacuacionAguasServidas in storage.
     *
     * @param CreateEvacuacionAguasServidasRequest $request
     *
     * @return Response
     */
    public function store(CreateEvacuacionAguasServidasRequest $request)
    {
        $input = $request->all();

        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->create($input);

        Flash::success('Evacuacion Aguas Servidas saved successfully.');

        return redirect(route('evacuacionAguasServidas.index'));
    }

    /**
     * Display the specified EvacuacionAguasServidas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->findWithoutFail($id);

        if (empty($evacuacionAguasServidas)) {
            Flash::error('Evacuacion Aguas Servidas not found');

            return redirect(route('evacuacionAguasServidas.index'));
        }

        return view('evacuacion_aguas_servidas.show')->with('evacuacionAguasServidas', $evacuacionAguasServidas);
    }

    /**
     * Show the form for editing the specified EvacuacionAguasServidas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->findWithoutFail($id);

        if (empty($evacuacionAguasServidas)) {
            Flash::error('Evacuacion Aguas Servidas not found');

            return redirect(route('evacuacionAguasServidas.index'));
        }

        return view('evacuacion_aguas_servidas.edit')->with('evacuacionAguasServidas', $evacuacionAguasServidas);
    }

    /**
     * Update the specified EvacuacionAguasServidas in storage.
     *
     * @param  int              $id
     * @param UpdateEvacuacionAguasServidasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvacuacionAguasServidasRequest $request)
    {
        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->findWithoutFail($id);

        if (empty($evacuacionAguasServidas)) {
            Flash::error('Evacuacion Aguas Servidas not found');

            return redirect(route('evacuacionAguasServidas.index'));
        }

        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->update($request->all(), $id);

        Flash::success('Evacuacion Aguas Servidas updated successfully.');

        return redirect(route('evacuacionAguasServidas.index'));
    }

    /**
     * Remove the specified EvacuacionAguasServidas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evacuacionAguasServidas = $this->evacuacionAguasServidasRepository->findWithoutFail($id);

        if (empty($evacuacionAguasServidas)) {
            Flash::error('Evacuacion Aguas Servidas not found');

            return redirect(route('evacuacionAguasServidas.index'));
        }

        $this->evacuacionAguasServidasRepository->delete($id);

        Flash::success('Evacuacion Aguas Servidas deleted successfully.');

        return redirect(route('evacuacionAguasServidas.index'));
    }
}
