<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipoanimalesRequest;
use App\Http\Requests\UpdatetipoanimalesRequest;
use App\Repositories\tipoanimalesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipoanimalesController extends AppBaseController
{
    /** @var  tipoanimalesRepository */
    private $tipoanimalesRepository;

    public function __construct(tipoanimalesRepository $tipoanimalesRepo)
    {
        $this->tipoanimalesRepository = $tipoanimalesRepo;
    }

    /**
     * Display a listing of the tipoanimales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoanimalesRepository->pushCriteria(new RequestCriteria($request));
        $tipoanimales = $this->tipoanimalesRepository->all();

        return view('tipoanimales.index')
            ->with('tipoanimales', $tipoanimales);
    }

    /**
     * Show the form for creating a new tipoanimales.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoanimales.create');
    }

    /**
     * Store a newly created tipoanimales in storage.
     *
     * @param CreatetipoanimalesRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoanimalesRequest $request)
    {
        $input = $request->all();

        $tipoanimales = $this->tipoanimalesRepository->create($input);

        Flash::success('Tipoanimales saved successfully.');

        return redirect(route('tipoanimales.index'));
    }

    /**
     * Display the specified tipoanimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoanimales = $this->tipoanimalesRepository->findWithoutFail($id);

        if (empty($tipoanimales)) {
            Flash::error('Tipoanimales not found');

            return redirect(route('tipoanimales.index'));
        }

        return view('tipoanimales.show')->with('tipoanimales', $tipoanimales);
    }

    /**
     * Show the form for editing the specified tipoanimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoanimales = $this->tipoanimalesRepository->findWithoutFail($id);

        if (empty($tipoanimales)) {
            Flash::error('Tipoanimales not found');

            return redirect(route('tipoanimales.index'));
        }

        return view('tipoanimales.edit')->with('tipoanimales', $tipoanimales);
    }

    /**
     * Update the specified tipoanimales in storage.
     *
     * @param  int              $id
     * @param UpdatetipoanimalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoanimalesRequest $request)
    {
        $tipoanimales = $this->tipoanimalesRepository->findWithoutFail($id);

        if (empty($tipoanimales)) {
            Flash::error('Tipoanimales not found');

            return redirect(route('tipoanimales.index'));
        }

        $tipoanimales = $this->tipoanimalesRepository->update($request->all(), $id);

        Flash::success('Tipoanimales updated successfully.');

        return redirect(route('tipoanimales.index'));
    }

    /**
     * Remove the specified tipoanimales from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoanimales = $this->tipoanimalesRepository->findWithoutFail($id);

        if (empty($tipoanimales)) {
            Flash::error('Tipoanimales not found');

            return redirect(route('tipoanimales.index'));
        }

        $this->tipoanimalesRepository->delete($id);

        Flash::success('Tipoanimales deleted successfully.');

        return redirect(route('tipoanimales.index'));
    }
}
