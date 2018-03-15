<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePrecuariaRequest;
use App\Http\Requests\UpdatePrecuariaRequest;
use App\Repositories\PrecuariaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PrecuariaController extends AppBaseController
{
    /** @var  PrecuariaRepository */
    private $precuariaRepository;

    public function __construct(PrecuariaRepository $precuariaRepo)
    {
        $this->precuariaRepository = $precuariaRepo;
    }

    /**
     * Display a listing of the Precuaria.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->precuariaRepository->pushCriteria(new RequestCriteria($request));
        $precuarias = $this->precuariaRepository->all();

        return view('precuarias.index')
            ->with('precuarias', $precuarias);
    }

    /**
     * Show the form for creating a new Precuaria.
     *
     * @return Response
     */
    public function create()
    {
        return view('precuarias.create');
    }

    /**
     * Store a newly created Precuaria in storage.
     *
     * @param CreatePrecuariaRequest $request
     *
     * @return Response
     */
    public function store(CreatePrecuariaRequest $request)
    {
        $input = $request->all();

        $precuaria = $this->precuariaRepository->create($input);

        Flash::success('Precuaria
guardado exitosamente.');

        return redirect(route('precuarias.index'));
    }

    /**
     * Display the specified Precuaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $precuaria = $this->precuariaRepository->findWithoutFail($id);

        if (empty($precuaria)) {
            Flash::error('Precuaria not found');

            return redirect(route('precuarias.index'));
        }

        return view('precuarias.show')->with('precuaria', $precuaria);
    }

    /**
     * Show the form for editing the specified Precuaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $precuaria = $this->precuariaRepository->findWithoutFail($id);

        if (empty($precuaria)) {
            Flash::error('Precuaria not found');

            return redirect(route('precuarias.index'));
        }

        return view('precuarias.edit')->with('precuaria', $precuaria);
    }

    /**
     * Update the specified Precuaria in storage.
     *
     * @param  int              $id
     * @param UpdatePrecuariaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrecuariaRequest $request)
    {
        $precuaria = $this->precuariaRepository->findWithoutFail($id);

        if (empty($precuaria)) {
            Flash::error('Precuaria not found');

            return redirect(route('precuarias.index'));
        }

        $precuaria = $this->precuariaRepository->update($request->all(), $id);

        Flash::success('Precuaria updated successfully.');

        return redirect(route('precuarias.index'));
    }

    /**
     * Remove the specified Precuaria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $precuaria = $this->precuariaRepository->findWithoutFail($id);

        if (empty($precuaria)) {
            Flash::error('Precuaria not found');

            return redirect(route('precuarias.index'));
        }

        $this->precuariaRepository->delete($id);

        Flash::success('Precuaria deleted successfully.');

        return redirect(route('precuarias.index'));
    }
}
