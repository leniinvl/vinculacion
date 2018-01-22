<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaisajeRequest;
use App\Http\Requests\UpdatePaisajeRequest;
use App\Repositories\PaisajeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaisajeController extends AppBaseController
{
    /** @var  PaisajeRepository */
    private $paisajeRepository;

    public function __construct(PaisajeRepository $paisajeRepo)
    {
        $this->paisajeRepository = $paisajeRepo;
    }

    /**
     * Display a listing of the Paisaje.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paisajeRepository->pushCriteria(new RequestCriteria($request));
        $paisajes = $this->paisajeRepository->all();

        return view('paisajes.index')
            ->with('paisajes', $paisajes);
    }

    /**
     * Show the form for creating a new Paisaje.
     *
     * @return Response
     */
    public function create()
    {
        return view('paisajes.create');
    }

    /**
     * Store a newly created Paisaje in storage.
     *
     * @param CreatePaisajeRequest $request
     *
     * @return Response
     */
    public function store(CreatePaisajeRequest $request)
    {
        $input = $request->all();

        $paisaje = $this->paisajeRepository->create($input);

        Flash::success('Paisaje saved successfully.');

        return redirect(route('paisajes.index'));
    }

    /**
     * Display the specified Paisaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paisaje = $this->paisajeRepository->findWithoutFail($id);

        if (empty($paisaje)) {
            Flash::error('Paisaje not found');

            return redirect(route('paisajes.index'));
        }

        return view('paisajes.show')->with('paisaje', $paisaje);
    }

    /**
     * Show the form for editing the specified Paisaje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paisaje = $this->paisajeRepository->findWithoutFail($id);

        if (empty($paisaje)) {
            Flash::error('Paisaje not found');

            return redirect(route('paisajes.index'));
        }

        return view('paisajes.edit')->with('paisaje', $paisaje);
    }

    /**
     * Update the specified Paisaje in storage.
     *
     * @param  int              $id
     * @param UpdatePaisajeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaisajeRequest $request)
    {
        $paisaje = $this->paisajeRepository->findWithoutFail($id);

        if (empty($paisaje)) {
            Flash::error('Paisaje not found');

            return redirect(route('paisajes.index'));
        }

        $paisaje = $this->paisajeRepository->update($request->all(), $id);

        Flash::success('Paisaje updated successfully.');

        return redirect(route('paisajes.index'));
    }

    /**
     * Remove the specified Paisaje from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paisaje = $this->paisajeRepository->findWithoutFail($id);

        if (empty($paisaje)) {
            Flash::error('Paisaje not found');

            return redirect(route('paisajes.index'));
        }

        $this->paisajeRepository->delete($id);

        Flash::success('Paisaje deleted successfully.');

        return redirect(route('paisajes.index'));
    }
}
