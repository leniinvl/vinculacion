<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCondicionesDrenajeRequest;
use App\Http\Requests\UpdateCondicionesDrenajeRequest;
use App\Repositories\CondicionesDrenajeRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CondicionesDrenajeController extends AppBaseController
{
    /** @var  CondicionesDrenajeRepository */
    private $condicionesDrenajeRepository;

    public function __construct(CondicionesDrenajeRepository $condicionesDrenajeRepo)
    {
        $this->condicionesDrenajeRepository = $condicionesDrenajeRepo;
    }

    /**
     * Display a listing of the CondicionesDrenaje.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->condicionesDrenajeRepository->pushCriteria(new RequestCriteria($request));
        $condicionesDrenajes = $this->condicionesDrenajeRepository->all();

        return view('condiciones_drenajes.index')
            ->with('condicionesDrenajes', $condicionesDrenajes);
    }

    /**
     * Show the form for creating a new CondicionesDrenaje.
     *
     * @return Response
     */
    public function create()
    {
        return view('condiciones_drenajes.create');
    }

    /**
     * Store a newly created CondicionesDrenaje in storage.
     *
     * @param CreateCondicionesDrenajeRequest $request
     *
     * @return Response
     */
    public function store(CreateCondicionesDrenajeRequest $request)
    {
        $input = $request->all();

        $condicionesDrenaje = $this->condicionesDrenajeRepository->create($input);

        Flash::success('Condiciones Drenaje
guardado exitosamente.');

        return redirect(route('condicionesDrenajes.index'));
    }

    /**
     * Display the specified CondicionesDrenaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $condicionesDrenaje = $this->condicionesDrenajeRepository->findWithoutFail($id);

        if (empty($condicionesDrenaje)) {
            Flash::error('Condiciones Drenaje not found');

            return redirect(route('condicionesDrenajes.index'));
        }

        return view('condiciones_drenajes.show')->with('condicionesDrenaje', $condicionesDrenaje);
    }

    /**
     * Show the form for editing the specified CondicionesDrenaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $condicionesDrenaje = $this->condicionesDrenajeRepository->findWithoutFail($id);

        if (empty($condicionesDrenaje)) {
            Flash::error('Condiciones Drenaje not found');

            return redirect(route('condicionesDrenajes.index'));
        }

        return view('condiciones_drenajes.edit')->with('condicionesDrenaje', $condicionesDrenaje);
    }

    /**
     * Update the specified CondicionesDrenaje in storage.
     *
     * @param  int              $id
     * @param UpdateCondicionesDrenajeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCondicionesDrenajeRequest $request)
    {
        $condicionesDrenaje = $this->condicionesDrenajeRepository->findWithoutFail($id);

        if (empty($condicionesDrenaje)) {
            Flash::error('Condiciones Drenaje not found');

            return redirect(route('condicionesDrenajes.index'));
        }

        $condicionesDrenaje = $this->condicionesDrenajeRepository->update($request->all(), $id);

        Flash::success('Condiciones Drenaje updated successfully.');

        return redirect(route('condicionesDrenajes.index'));
    }

    /**
     * Remove the specified CondicionesDrenaje from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $condicionesDrenaje = $this->condicionesDrenajeRepository->findWithoutFail($id);

        if (empty($condicionesDrenaje)) {
            Flash::error('Condiciones Drenaje not found');

            return redirect(route('condicionesDrenajes.index'));
        }

        $this->condicionesDrenajeRepository->delete($id);

        Flash::success('Condiciones Drenaje deleted successfully.');

        return redirect(route('condicionesDrenajes.index'));
    }
}
