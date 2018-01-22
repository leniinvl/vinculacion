<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePeligrosRequest;
use App\Http\Requests\UpdatePeligrosRequest;
use App\Repositories\PeligrosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PeligrosController extends AppBaseController
{
    /** @var  PeligrosRepository */
    private $peligrosRepository;

    public function __construct(PeligrosRepository $peligrosRepo)
    {
        $this->peligrosRepository = $peligrosRepo;
    }

    /**
     * Display a listing of the Peligros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->peligrosRepository->pushCriteria(new RequestCriteria($request));
        $peligros = $this->peligrosRepository->all();

        return view('peligros.index')
            ->with('peligros', $peligros);
    }

    /**
     * Show the form for creating a new Peligros.
     *
     * @return Response
     */
    public function create()
    {
        return view('peligros.create');
    }

    /**
     * Store a newly created Peligros in storage.
     *
     * @param CreatePeligrosRequest $request
     *
     * @return Response
     */
    public function store(CreatePeligrosRequest $request)
    {
        $input = $request->all();

        $peligros = $this->peligrosRepository->create($input);

        Flash::success('Peligros saved successfully.');

        return redirect(route('peligros.index'));
    }

    /**
     * Display the specified Peligros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $peligros = $this->peligrosRepository->findWithoutFail($id);

        if (empty($peligros)) {
            Flash::error('Peligros not found');

            return redirect(route('peligros.index'));
        }

        return view('peligros.show')->with('peligros', $peligros);
    }

    /**
     * Show the form for editing the specified Peligros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $peligros = $this->peligrosRepository->findWithoutFail($id);

        if (empty($peligros)) {
            Flash::error('Peligros not found');

            return redirect(route('peligros.index'));
        }

        return view('peligros.edit')->with('peligros', $peligros);
    }

    /**
     * Update the specified Peligros in storage.
     *
     * @param  int              $id
     * @param UpdatePeligrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeligrosRequest $request)
    {
        $peligros = $this->peligrosRepository->findWithoutFail($id);

        if (empty($peligros)) {
            Flash::error('Peligros not found');

            return redirect(route('peligros.index'));
        }

        $peligros = $this->peligrosRepository->update($request->all(), $id);

        Flash::success('Peligros updated successfully.');

        return redirect(route('peligros.index'));
    }

    /**
     * Remove the specified Peligros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $peligros = $this->peligrosRepository->findWithoutFail($id);

        if (empty($peligros)) {
            Flash::error('Peligros not found');

            return redirect(route('peligros.index'));
        }

        $this->peligrosRepository->delete($id);

        Flash::success('Peligros deleted successfully.');

        return redirect(route('peligros.index'));
    }
}
