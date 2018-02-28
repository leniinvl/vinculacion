<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCalidadAireRequest;
use App\Http\Requests\UpdateCalidadAireRequest;
use App\Repositories\CalidadAireRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CalidadAireController extends AppBaseController
{
    /** @var  CalidadAireRepository */
    private $calidadAireRepository;

    public function __construct(CalidadAireRepository $calidadAireRepo)
    {
        $this->calidadAireRepository = $calidadAireRepo;
    }

    /**
     * Display a listing of the CalidadAire.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->calidadAireRepository->pushCriteria(new RequestCriteria($request));
        $calidadAires = $this->calidadAireRepository->all();

        return view('calidad_aires.index')
            ->with('calidadAires', $calidadAires);
    }

    /**
     * Show the form for creating a new CalidadAire.
     *
     * @return Response
     */
    public function create()
    {
        return view('calidad_aires.create');
    }

    /**
     * Store a newly created CalidadAire in storage.
     *
     * @param CreateCalidadAireRequest $request
     *
     * @return Response
     */
    public function store(CreateCalidadAireRequest $request)
    {
        $input = $request->all();

        $calidadAire = $this->calidadAireRepository->create($input);

        Flash::success('Calidad Aire saved successfully.');

        return redirect(route('calidadAires.index'));
    }

    /**
     * Display the specified CalidadAire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $calidadAire = $this->calidadAireRepository->findWithoutFail($id);

        if (empty($calidadAire)) {
            Flash::error('Calidad Aire not found');

            return redirect(route('calidadAires.index'));
        }

        return view('calidad_aires.show')->with('calidadAire', $calidadAire);
    }

    /**
     * Show the form for editing the specified CalidadAire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $calidadAire = $this->calidadAireRepository->findWithoutFail($id);

        if (empty($calidadAire)) {
            Flash::error('Calidad Aire not found');

            return redirect(route('calidadAires.index'));
        }

        return view('calidad_aires.edit')->with('calidadAire', $calidadAire);
    }

    /**
     * Update the specified CalidadAire in storage.
     *
     * @param  int              $id
     * @param UpdateCalidadAireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCalidadAireRequest $request)
    {
        $calidadAire = $this->calidadAireRepository->findWithoutFail($id);

        if (empty($calidadAire)) {
            Flash::error('Calidad Aire not found');

            return redirect(route('calidadAires.index'));
        }

        $calidadAire = $this->calidadAireRepository->update($request->all(), $id);

        Flash::success('Calidad Aire updated successfully.');

        return redirect(route('calidadAires.index'));
    }

    /**
     * Remove the specified CalidadAire from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $calidadAire = $this->calidadAireRepository->findWithoutFail($id);

        if (empty($calidadAire)) {
            Flash::error('Calidad Aire not found');

            return redirect(route('calidadAires.index'));
        }

        $this->calidadAireRepository->delete($id);

        Flash::success('Calidad Aire deleted successfully.');

        return redirect(route('calidadAires.index'));
    }
}
