<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipounidadRequest;
use App\Http\Requests\UpdatetipounidadRequest;
use App\Repositories\tipounidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipounidadController extends AppBaseController
{
    /** @var  tipounidadRepository */
    private $tipounidadRepository;

    public function __construct(tipounidadRepository $tipounidadRepo)
    {
        $this->tipounidadRepository = $tipounidadRepo;
    }

    /**
     * Display a listing of the tipounidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipounidadRepository->pushCriteria(new RequestCriteria($request));
        $tipounidads = $this->tipounidadRepository->all();

        return view('tipounidads.index')
            ->with('tipounidads', $tipounidads);
    }

    /**
     * Show the form for creating a new tipounidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipounidads.create');
    }

    /**
     * Store a newly created tipounidad in storage.
     *
     * @param CreatetipounidadRequest $request
     *
     * @return Response
     */
    public function store(CreatetipounidadRequest $request)
    {
        $input = $request->all();

        $tipounidad = $this->tipounidadRepository->create($input);

        Flash::success('Tipounidad saved successfully.');

        return redirect(route('tipounidads.index'));
    }

    /**
     * Display the specified tipounidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipounidad = $this->tipounidadRepository->findWithoutFail($id);

        if (empty($tipounidad)) {
            Flash::error('Tipounidad not found');

            return redirect(route('tipounidads.index'));
        }

        return view('tipounidads.show')->with('tipounidad', $tipounidad);
    }

    /**
     * Show the form for editing the specified tipounidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipounidad = $this->tipounidadRepository->findWithoutFail($id);

        if (empty($tipounidad)) {
            Flash::error('Tipounidad not found');

            return redirect(route('tipounidads.index'));
        }

        return view('tipounidads.edit')->with('tipounidad', $tipounidad);
    }

    /**
     * Update the specified tipounidad in storage.
     *
     * @param  int              $id
     * @param UpdatetipounidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipounidadRequest $request)
    {
        $tipounidad = $this->tipounidadRepository->findWithoutFail($id);

        if (empty($tipounidad)) {
            Flash::error('Tipounidad not found');

            return redirect(route('tipounidads.index'));
        }

        $tipounidad = $this->tipounidadRepository->update($request->all(), $id);

        Flash::success('Tipounidad updated successfully.');

        return redirect(route('tipounidads.index'));
    }

    /**
     * Remove the specified tipounidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipounidad = $this->tipounidadRepository->findWithoutFail($id);

        if (empty($tipounidad)) {
            Flash::error('Tipounidad not found');

            return redirect(route('tipounidads.index'));
        }

        $this->tipounidadRepository->delete($id);

        Flash::success('Tipounidad deleted successfully.');

        return redirect(route('tipounidads.index'));
    }
}
