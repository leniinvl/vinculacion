<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabajadoresRequest;
use App\Http\Requests\UpdateTrabajadoresRequest;
use App\Repositories\TrabajadoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TrabajadoresController extends AppBaseController
{
    /** @var  TrabajadoresRepository */
    private $trabajadoresRepository;

    public function __construct(TrabajadoresRepository $trabajadoresRepo)
    {
        $this->trabajadoresRepository = $trabajadoresRepo;
    }

    /**
     * Display a listing of the Trabajadores.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajadoresRepository->pushCriteria(new RequestCriteria($request));
        $trabajadores = $this->trabajadoresRepository->all();

        return view('trabajadores.index')
            ->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for creating a new Trabajadores.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabajadores.create');
    }

    /**
     * Store a newly created Trabajadores in storage.
     *
     * @param CreateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabajadoresRequest $request)
    {
        $input = $request->all();

        $trabajadores = $this->trabajadoresRepository->create($input);

        Flash::success('Trabajadores saved successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Display the specified Trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.show')->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for editing the specified Trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.edit')->with('trabajadores', $trabajadores);
    }

    /**
     * Update the specified Trabajadores in storage.
     *
     * @param  int              $id
     * @param UpdateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabajadoresRequest $request)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $trabajadores = $this->trabajadoresRepository->update($request->all(), $id);

        Flash::success('Trabajadores updated successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Remove the specified Trabajadores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $this->trabajadoresRepository->delete($id);

        Flash::success('Trabajadores deleted successfully.');

        return redirect(route('trabajadores.index'));
    }
}
