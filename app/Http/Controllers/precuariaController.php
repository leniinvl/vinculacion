<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprecuariaRequest;
use App\Http\Requests\UpdateprecuariaRequest;
use App\Repositories\precuariaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class precuariaController extends AppBaseController
{
    /** @var  precuariaRepository */
    private $precuariaRepository;

    public function __construct(precuariaRepository $precuariaRepo)
    {
        $this->precuariaRepository = $precuariaRepo;
    }

    /**
     * Display a listing of the precuaria.
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
     * Show the form for creating a new precuaria.
     *
     * @return Response
     */
    public function create()
    {
        return view('precuarias.create');
    }

    /**
     * Store a newly created precuaria in storage.
     *
     * @param CreateprecuariaRequest $request
     *
     * @return Response
     */
    public function store(CreateprecuariaRequest $request)
    {
        $input = $request->all();

        $precuaria = $this->precuariaRepository->create($input);

        Flash::success('Precuaria saved successfully.');

        return redirect(route('precuarias.index'));
    }

    /**
     * Display the specified precuaria.
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
     * Show the form for editing the specified precuaria.
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
     * Update the specified precuaria in storage.
     *
     * @param  int              $id
     * @param UpdateprecuariaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprecuariaRequest $request)
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
     * Remove the specified precuaria from storage.
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
