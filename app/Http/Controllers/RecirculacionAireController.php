<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecirculacionAireRequest;
use App\Http\Requests\UpdateRecirculacionAireRequest;
use App\Repositories\RecirculacionAireRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RecirculacionAireController extends AppBaseController
{
    /** @var  RecirculacionAireRepository */
    private $recirculacionAireRepository;

    public function __construct(RecirculacionAireRepository $recirculacionAireRepo)
    {
        $this->recirculacionAireRepository = $recirculacionAireRepo;
    }

    /**
     * Display a listing of the RecirculacionAire.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->recirculacionAireRepository->pushCriteria(new RequestCriteria($request));
        $recirculacionAires = $this->recirculacionAireRepository->all();

        return view('recirculacion_aires.index')
            ->with('recirculacionAires', $recirculacionAires);
    }

    /**
     * Show the form for creating a new RecirculacionAire.
     *
     * @return Response
     */
    public function create()
    {
        return view('recirculacion_aires.create');
    }

    /**
     * Store a newly created RecirculacionAire in storage.
     *
     * @param CreateRecirculacionAireRequest $request
     *
     * @return Response
     */
    public function store(CreateRecirculacionAireRequest $request)
    {
        $input = $request->all();

        $recirculacionAire = $this->recirculacionAireRepository->create($input);

        Flash::success('Recirculacion Aire saved successfully.');

        return redirect(route('recirculacionAires.index'));
    }

    /**
     * Display the specified RecirculacionAire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recirculacionAire = $this->recirculacionAireRepository->findWithoutFail($id);

        if (empty($recirculacionAire)) {
            Flash::error('Recirculacion Aire not found');

            return redirect(route('recirculacionAires.index'));
        }

        return view('recirculacion_aires.show')->with('recirculacionAire', $recirculacionAire);
    }

    /**
     * Show the form for editing the specified RecirculacionAire.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recirculacionAire = $this->recirculacionAireRepository->findWithoutFail($id);

        if (empty($recirculacionAire)) {
            Flash::error('Recirculacion Aire not found');

            return redirect(route('recirculacionAires.index'));
        }

        return view('recirculacion_aires.edit')->with('recirculacionAire', $recirculacionAire);
    }

    /**
     * Update the specified RecirculacionAire in storage.
     *
     * @param  int              $id
     * @param UpdateRecirculacionAireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRecirculacionAireRequest $request)
    {
        $recirculacionAire = $this->recirculacionAireRepository->findWithoutFail($id);

        if (empty($recirculacionAire)) {
            Flash::error('Recirculacion Aire not found');

            return redirect(route('recirculacionAires.index'));
        }

        $recirculacionAire = $this->recirculacionAireRepository->update($request->all(), $id);

        Flash::success('Recirculacion Aire updated successfully.');

        return redirect(route('recirculacionAires.index'));
    }

    /**
     * Remove the specified RecirculacionAire from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recirculacionAire = $this->recirculacionAireRepository->findWithoutFail($id);

        if (empty($recirculacionAire)) {
            Flash::error('Recirculacion Aire not found');

            return redirect(route('recirculacionAires.index'));
        }

        $this->recirculacionAireRepository->delete($id);

        Flash::success('Recirculacion Aire deleted successfully.');

        return redirect(route('recirculacionAires.index'));
    }
}
