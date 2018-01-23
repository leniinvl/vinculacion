<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrigenIngresosRequest;
use App\Http\Requests\UpdateOrigenIngresosRequest;
use App\Repositories\OrigenIngresosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrigenIngresosController extends AppBaseController
{
    /** @var  OrigenIngresosRepository */
    private $origenIngresosRepository;

    public function __construct(OrigenIngresosRepository $origenIngresosRepo)
    {
        $this->origenIngresosRepository = $origenIngresosRepo;
    }

    /**
     * Display a listing of the OrigenIngresos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->origenIngresosRepository->pushCriteria(new RequestCriteria($request));
        $origenIngresos = $this->origenIngresosRepository->all();

        return view('origen_ingresos.index')
            ->with('origenIngresos', $origenIngresos);
    }

    /**
     * Show the form for creating a new OrigenIngresos.
     *
     * @return Response
     */
    public function create()
    {
        return view('origen_ingresos.create');
    }

    /**
     * Store a newly created OrigenIngresos in storage.
     *
     * @param CreateOrigenIngresosRequest $request
     *
     * @return Response
     */
    public function store(CreateOrigenIngresosRequest $request)
    {
        $input = $request->all();

        $origenIngresos = $this->origenIngresosRepository->create($input);

        Flash::success('Origen Ingresos saved successfully.');

        return redirect(route('origenIngresos.index'));
    }

    /**
     * Display the specified OrigenIngresos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

        if (empty($origenIngresos)) {
            Flash::error('Origen Ingresos not found');

            return redirect(route('origenIngresos.index'));
        }

        return view('origen_ingresos.show')->with('origenIngresos', $origenIngresos);
    }

    /**
     * Show the form for editing the specified OrigenIngresos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

        if (empty($origenIngresos)) {
            Flash::error('Origen Ingresos not found');

            return redirect(route('origenIngresos.index'));
        }

        return view('origen_ingresos.edit')->with('origenIngresos', $origenIngresos);
    }

    /**
     * Update the specified OrigenIngresos in storage.
     *
     * @param  int              $id
     * @param UpdateOrigenIngresosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrigenIngresosRequest $request)
    {
        $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

        if (empty($origenIngresos)) {
            Flash::error('Origen Ingresos not found');

            return redirect(route('origenIngresos.index'));
        }

        $origenIngresos = $this->origenIngresosRepository->update($request->all(), $id);

        Flash::success('Origen Ingresos updated successfully.');

        return redirect(route('origenIngresos.index'));
    }

    /**
     * Remove the specified OrigenIngresos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $origenIngresos = $this->origenIngresosRepository->findWithoutFail($id);

        if (empty($origenIngresos)) {
            Flash::error('Origen Ingresos not found');

            return redirect(route('origenIngresos.index'));
        }

        $this->origenIngresosRepository->delete($id);

        Flash::success('Origen Ingresos deleted successfully.');

        return redirect(route('origenIngresos.index'));
    }
}
