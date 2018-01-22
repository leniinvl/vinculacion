<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrecipitacionesRequest;
use App\Http\Requests\UpdatePrecipitacionesRequest;
use App\Repositories\PrecipitacionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PrecipitacionesController extends AppBaseController
{
    /** @var  PrecipitacionesRepository */
    private $precipitacionesRepository;

    public function __construct(PrecipitacionesRepository $precipitacionesRepo)
    {
        $this->precipitacionesRepository = $precipitacionesRepo;
    }

    /**
     * Display a listing of the Precipitaciones.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->precipitacionesRepository->pushCriteria(new RequestCriteria($request));
        $precipitaciones = $this->precipitacionesRepository->all();

        return view('precipitaciones.index')
            ->with('precipitaciones', $precipitaciones);
    }

    /**
     * Show the form for creating a new Precipitaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('precipitaciones.create');
    }

    /**
     * Store a newly created Precipitaciones in storage.
     *
     * @param CreatePrecipitacionesRequest $request
     *
     * @return Response
     */
    public function store(CreatePrecipitacionesRequest $request)
    {
        $input = $request->all();

        $precipitaciones = $this->precipitacionesRepository->create($input);

        Flash::success('Precipitaciones saved successfully.');

        return redirect(route('precipitaciones.index'));
    }

    /**
     * Display the specified Precipitaciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $precipitaciones = $this->precipitacionesRepository->findWithoutFail($id);

        if (empty($precipitaciones)) {
            Flash::error('Precipitaciones not found');

            return redirect(route('precipitaciones.index'));
        }

        return view('precipitaciones.show')->with('precipitaciones', $precipitaciones);
    }

    /**
     * Show the form for editing the specified Precipitaciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $precipitaciones = $this->precipitacionesRepository->findWithoutFail($id);

        if (empty($precipitaciones)) {
            Flash::error('Precipitaciones not found');

            return redirect(route('precipitaciones.index'));
        }

        return view('precipitaciones.edit')->with('precipitaciones', $precipitaciones);
    }

    /**
     * Update the specified Precipitaciones in storage.
     *
     * @param  int              $id
     * @param UpdatePrecipitacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrecipitacionesRequest $request)
    {
        $precipitaciones = $this->precipitacionesRepository->findWithoutFail($id);

        if (empty($precipitaciones)) {
            Flash::error('Precipitaciones not found');

            return redirect(route('precipitaciones.index'));
        }

        $precipitaciones = $this->precipitacionesRepository->update($request->all(), $id);

        Flash::success('Precipitaciones updated successfully.');

        return redirect(route('precipitaciones.index'));
    }

    /**
     * Remove the specified Precipitaciones from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $precipitaciones = $this->precipitacionesRepository->findWithoutFail($id);

        if (empty($precipitaciones)) {
            Flash::error('Precipitaciones not found');

            return redirect(route('precipitaciones.index'));
        }

        $this->precipitacionesRepository->delete($id);

        Flash::success('Precipitaciones deleted successfully.');

        return redirect(route('precipitaciones.index'));
    }
}
