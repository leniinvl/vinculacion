<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateorigeningresosRequest;
use App\Http\Requests\UpdateorigeningresosRequest;
use App\Repositories\origeningresosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class origeningresosController extends AppBaseController
{
    /** @var  origeningresosRepository */
    private $origeningresosRepository;

    public function __construct(origeningresosRepository $origeningresosRepo)
    {
        $this->origeningresosRepository = $origeningresosRepo;
    }

    /**
     * Display a listing of the origeningresos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->origeningresosRepository->pushCriteria(new RequestCriteria($request));
        $origeningresos = $this->origeningresosRepository->all();

        return view('origeningresos.index')
            ->with('origeningresos', $origeningresos);
    }

    /**
     * Show the form for creating a new origeningresos.
     *
     * @return Response
     */
    public function create()
    {
        return view('origeningresos.create');
    }

    /**
     * Store a newly created origeningresos in storage.
     *
     * @param CreateorigeningresosRequest $request
     *
     * @return Response
     */
    public function store(CreateorigeningresosRequest $request)
    {
        $input = $request->all();

        $origeningresos = $this->origeningresosRepository->create($input);

        Flash::success('Origeningresos saved successfully.');

        return redirect(route('origeningresos.index'));
    }

    /**
     * Display the specified origeningresos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $origeningresos = $this->origeningresosRepository->findWithoutFail($id);

        if (empty($origeningresos)) {
            Flash::error('Origeningresos not found');

            return redirect(route('origeningresos.index'));
        }

        return view('origeningresos.show')->with('origeningresos', $origeningresos);
    }

    /**
     * Show the form for editing the specified origeningresos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $origeningresos = $this->origeningresosRepository->findWithoutFail($id);

        if (empty($origeningresos)) {
            Flash::error('Origeningresos not found');

            return redirect(route('origeningresos.index'));
        }

        return view('origeningresos.edit')->with('origeningresos', $origeningresos);
    }

    /**
     * Update the specified origeningresos in storage.
     *
     * @param  int              $id
     * @param UpdateorigeningresosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateorigeningresosRequest $request)
    {
        $origeningresos = $this->origeningresosRepository->findWithoutFail($id);

        if (empty($origeningresos)) {
            Flash::error('Origeningresos not found');

            return redirect(route('origeningresos.index'));
        }

        $origeningresos = $this->origeningresosRepository->update($request->all(), $id);

        Flash::success('Origeningresos updated successfully.');

        return redirect(route('origeningresos.index'));
    }

    /**
     * Remove the specified origeningresos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $origeningresos = $this->origeningresosRepository->findWithoutFail($id);

        if (empty($origeningresos)) {
            Flash::error('Origeningresos not found');

            return redirect(route('origeningresos.index'));
        }

        $this->origeningresosRepository->delete($id);

        Flash::success('Origeningresos deleted successfully.');

        return redirect(route('origeningresos.index'));
    }
}
