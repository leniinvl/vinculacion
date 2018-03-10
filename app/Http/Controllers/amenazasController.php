<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateamenazasRequest;
use App\Http\Requests\UpdateamenazasRequest;
use App\Repositories\amenazasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class amenazasController extends AppBaseController
{
    /** @var  amenazasRepository */
    private $amenazasRepository;

    public function __construct(amenazasRepository $amenazasRepo)
    {
        $this->amenazasRepository = $amenazasRepo;
    }

    /**
     * Display a listing of the amenazas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->amenazasRepository->pushCriteria(new RequestCriteria($request));
        $amenazas = $this->amenazasRepository->all();

        return view('amenazas.index')
            ->with('amenazas', $amenazas);
    }

    /**
     * Show the form for creating a new amenazas.
     *
     * @return Response
     */
    public function create()
    {
        return view('amenazas.create');
    }

    /**
     * Store a newly created amenazas in storage.
     *
     * @param CreateamenazasRequest $request
     *
     * @return Response
     */
    public function store(CreateamenazasRequest $request)
    {
        $input = $request->all();

        $amenazas = $this->amenazasRepository->create($input);

        Flash::success('Amenazas saved successfully.');

        return redirect(route('amenazas.index'));
    }

    /**
     * Display the specified amenazas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $amenazas = $this->amenazasRepository->findWithoutFail($id);

        if (empty($amenazas)) {
            Flash::error('Amenazas not found');

            return redirect(route('amenazas.index'));
        }

        return view('amenazas.show')->with('amenazas', $amenazas);
    }

    /**
     * Show the form for editing the specified amenazas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $amenazas = $this->amenazasRepository->findWithoutFail($id);

        if (empty($amenazas)) {
            Flash::error('Amenazas not found');

            return redirect(route('amenazas.index'));
        }

        return view('amenazas.edit')->with('amenazas', $amenazas);
    }

    /**
     * Update the specified amenazas in storage.
     *
     * @param  int              $id
     * @param UpdateamenazasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateamenazasRequest $request)
    {
        $amenazas = $this->amenazasRepository->findWithoutFail($id);

        if (empty($amenazas)) {
            Flash::error('Amenazas not found');

            return redirect(route('amenazas.index'));
        }

        $amenazas = $this->amenazasRepository->update($request->all(), $id);

        Flash::success('Amenazas updated successfully.');

        return redirect(route('amenazas.index'));
    }

    /**
     * Remove the specified amenazas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $amenazas = $this->amenazasRepository->findWithoutFail($id);

        if (empty($amenazas)) {
            Flash::error('Amenazas not found');

            return redirect(route('amenazas.index'));
        }

        $this->amenazasRepository->delete($id);

        Flash::success('Amenazas deleted successfully.');

        return redirect(route('amenazas.index'));
    }
}
