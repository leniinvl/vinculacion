<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbastecimientoaguaRequest;
use App\Http\Requests\UpdateAbastecimientoaguaRequest;
use App\Repositories\AbastecimientoaguaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbastecimientoaguaController extends AppBaseController
{
    /** @var  AbastecimientoaguaRepository */
    private $abastecimientoaguaRepository;

    public function __construct(AbastecimientoaguaRepository $abastecimientoaguaRepo)
    {
        $this->abastecimientoaguaRepository = $abastecimientoaguaRepo;
    }

    /**
     * Display a listing of the Abastecimientoagua.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->abastecimientoaguaRepository->pushCriteria(new RequestCriteria($request));
        $abastecimientoaguas = $this->abastecimientoaguaRepository->all();

        return view('abastecimientoaguas.index')
            ->with('abastecimientoaguas', $abastecimientoaguas);
    }

    /**
     * Show the form for creating a new Abastecimientoagua.
     *
     * @return Response
     */
    public function create()
    {
        return view('abastecimientoaguas.create');
    }

    /**
     * Store a newly created Abastecimientoagua in storage.
     *
     * @param CreateAbastecimientoaguaRequest $request
     *
     * @return Response
     */
    public function store(CreateAbastecimientoaguaRequest $request)
    {
        $input = $request->all();

        $abastecimientoagua = $this->abastecimientoaguaRepository->create($input);

        Flash::success('Abastecimientoagua saved successfully.');

        return redirect(route('abastecimientoaguas.index'));
    }

    /**
     * Display the specified Abastecimientoagua.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $abastecimientoagua = $this->abastecimientoaguaRepository->findWithoutFail($id);

        if (empty($abastecimientoagua)) {
            Flash::error('Abastecimientoagua not found');

            return redirect(route('abastecimientoaguas.index'));
        }

        return view('abastecimientoaguas.show')->with('abastecimientoagua', $abastecimientoagua);
    }

    /**
     * Show the form for editing the specified Abastecimientoagua.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $abastecimientoagua = $this->abastecimientoaguaRepository->findWithoutFail($id);

        if (empty($abastecimientoagua)) {
            Flash::error('Abastecimientoagua not found');

            return redirect(route('abastecimientoaguas.index'));
        }

        return view('abastecimientoaguas.edit')->with('abastecimientoagua', $abastecimientoagua);
    }

    /**
     * Update the specified Abastecimientoagua in storage.
     *
     * @param  int              $id
     * @param UpdateAbastecimientoaguaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbastecimientoaguaRequest $request)
    {
        $abastecimientoagua = $this->abastecimientoaguaRepository->findWithoutFail($id);

        if (empty($abastecimientoagua)) {
            Flash::error('Abastecimientoagua not found');

            return redirect(route('abastecimientoaguas.index'));
        }

        $abastecimientoagua = $this->abastecimientoaguaRepository->update($request->all(), $id);

        Flash::success('Abastecimientoagua updated successfully.');

        return redirect(route('abastecimientoaguas.index'));
    }

    /**
     * Remove the specified Abastecimientoagua from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $abastecimientoagua = $this->abastecimientoaguaRepository->findWithoutFail($id);

        if (empty($abastecimientoagua)) {
            Flash::error('Abastecimientoagua not found');

            return redirect(route('abastecimientoaguas.index'));
        }

        $this->abastecimientoaguaRepository->delete($id);

        Flash::success('Abastecimientoagua deleted successfully.');

        return redirect(route('abastecimientoaguas.index'));
    }
}
