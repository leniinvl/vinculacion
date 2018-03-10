<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipoproduccionRequest;
use App\Http\Requests\UpdatetipoproduccionRequest;
use App\Repositories\tipoproduccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipoproduccionController extends AppBaseController
{
    /** @var  tipoproduccionRepository */
    private $tipoproduccionRepository;

    public function __construct(tipoproduccionRepository $tipoproduccionRepo)
    {
        $this->tipoproduccionRepository = $tipoproduccionRepo;
    }

    /**
     * Display a listing of the tipoproduccion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoproduccionRepository->pushCriteria(new RequestCriteria($request));
        $tipoproduccions = $this->tipoproduccionRepository->all();

        return view('tipoproduccions.index')
            ->with('tipoproduccions', $tipoproduccions);
    }

    /**
     * Show the form for creating a new tipoproduccion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoproduccions.create');
    }

    /**
     * Store a newly created tipoproduccion in storage.
     *
     * @param CreatetipoproduccionRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoproduccionRequest $request)
    {
        $input = $request->all();

        $tipoproduccion = $this->tipoproduccionRepository->create($input);

        Flash::success('Tipoproduccion saved successfully.');

        return redirect(route('tipoproduccions.index'));
    }

    /**
     * Display the specified tipoproduccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoproduccion = $this->tipoproduccionRepository->findWithoutFail($id);

        if (empty($tipoproduccion)) {
            Flash::error('Tipoproduccion not found');

            return redirect(route('tipoproduccions.index'));
        }

        return view('tipoproduccions.show')->with('tipoproduccion', $tipoproduccion);
    }

    /**
     * Show the form for editing the specified tipoproduccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoproduccion = $this->tipoproduccionRepository->findWithoutFail($id);

        if (empty($tipoproduccion)) {
            Flash::error('Tipoproduccion not found');

            return redirect(route('tipoproduccions.index'));
        }

        return view('tipoproduccions.edit')->with('tipoproduccion', $tipoproduccion);
    }

    /**
     * Update the specified tipoproduccion in storage.
     *
     * @param  int              $id
     * @param UpdatetipoproduccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoproduccionRequest $request)
    {
        $tipoproduccion = $this->tipoproduccionRepository->findWithoutFail($id);

        if (empty($tipoproduccion)) {
            Flash::error('Tipoproduccion not found');

            return redirect(route('tipoproduccions.index'));
        }

        $tipoproduccion = $this->tipoproduccionRepository->update($request->all(), $id);

        Flash::success('Tipoproduccion updated successfully.');

        return redirect(route('tipoproduccions.index'));
    }

    /**
     * Remove the specified tipoproduccion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoproduccion = $this->tipoproduccionRepository->findWithoutFail($id);

        if (empty($tipoproduccion)) {
            Flash::error('Tipoproduccion not found');

            return redirect(route('tipoproduccions.index'));
        }

        $this->tipoproduccionRepository->delete($id);

        Flash::success('Tipoproduccion deleted successfully.');

        return redirect(route('tipoproduccions.index'));
    }
}
