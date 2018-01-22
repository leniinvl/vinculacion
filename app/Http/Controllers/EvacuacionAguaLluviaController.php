<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvacuacionAguaLluviaRequest;
use App\Http\Requests\UpdateEvacuacionAguaLluviaRequest;
use App\Repositories\EvacuacionAguaLluviaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EvacuacionAguaLluviaController extends AppBaseController
{
    /** @var  EvacuacionAguaLluviaRepository */
    private $evacuacionAguaLluviaRepository;

    public function __construct(EvacuacionAguaLluviaRepository $evacuacionAguaLluviaRepo)
    {
        $this->evacuacionAguaLluviaRepository = $evacuacionAguaLluviaRepo;
    }

    /**
     * Display a listing of the EvacuacionAguaLluvia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->evacuacionAguaLluviaRepository->pushCriteria(new RequestCriteria($request));
        $evacuacionAguaLluvias = $this->evacuacionAguaLluviaRepository->all();

        return view('evacuacion_agua_lluvias.index')
            ->with('evacuacionAguaLluvias', $evacuacionAguaLluvias);
    }

    /**
     * Show the form for creating a new EvacuacionAguaLluvia.
     *
     * @return Response
     */
    public function create()
    {
        return view('evacuacion_agua_lluvias.create');
    }

    /**
     * Store a newly created EvacuacionAguaLluvia in storage.
     *
     * @param CreateEvacuacionAguaLluviaRequest $request
     *
     * @return Response
     */
    public function store(CreateEvacuacionAguaLluviaRequest $request)
    {
        $input = $request->all();

        $evacuacionAguaLluvia = $this->evacuacionAguaLluviaRepository->create($input);

        Flash::success('Evacuacion Agua Lluvia saved successfully.');

        return redirect(route('evacuacionAguaLluvias.index'));
    }

    /**
     * Display the specified EvacuacionAguaLluvia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evacuacionAguaLluvia = $this->evacuacionAguaLluviaRepository->findWithoutFail($id);

        if (empty($evacuacionAguaLluvia)) {
            Flash::error('Evacuacion Agua Lluvia not found');

            return redirect(route('evacuacionAguaLluvias.index'));
        }

        return view('evacuacion_agua_lluvias.show')->with('evacuacionAguaLluvia', $evacuacionAguaLluvia);
    }

    /**
     * Show the form for editing the specified EvacuacionAguaLluvia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evacuacionAguaLluvia = $this->evacuacionAguaLluviaRepository->findWithoutFail($id);

        if (empty($evacuacionAguaLluvia)) {
            Flash::error('Evacuacion Agua Lluvia not found');

            return redirect(route('evacuacionAguaLluvias.index'));
        }

        return view('evacuacion_agua_lluvias.edit')->with('evacuacionAguaLluvia', $evacuacionAguaLluvia);
    }

    /**
     * Update the specified EvacuacionAguaLluvia in storage.
     *
     * @param  int              $id
     * @param UpdateEvacuacionAguaLluviaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvacuacionAguaLluviaRequest $request)
    {
        $evacuacionAguaLluvia = $this->evacuacionAguaLluviaRepository->findWithoutFail($id);

        if (empty($evacuacionAguaLluvia)) {
            Flash::error('Evacuacion Agua Lluvia not found');

            return redirect(route('evacuacionAguaLluvias.index'));
        }

        $evacuacionAguaLluvia = $this->evacuacionAguaLluviaRepository->update($request->all(), $id);

        Flash::success('Evacuacion Agua Lluvia updated successfully.');

        return redirect(route('evacuacionAguaLluvias.index'));
    }

    /**
     * Remove the specified EvacuacionAguaLluvia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evacuacionAguaLluvia = $this->evacuacionAguaLluviaRepository->findWithoutFail($id);

        if (empty($evacuacionAguaLluvia)) {
            Flash::error('Evacuacion Agua Lluvia not found');

            return redirect(route('evacuacionAguaLluvias.index'));
        }

        $this->evacuacionAguaLluviaRepository->delete($id);

        Flash::success('Evacuacion Agua Lluvia deleted successfully.');

        return redirect(route('evacuacionAguaLluvias.index'));
    }
}
