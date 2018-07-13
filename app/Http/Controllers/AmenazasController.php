<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAmenazasRequest;
use App\Http\Requests\UpdateAmenazasRequest;
use App\Repositories\AmenazasRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class AmenazasController extends AppBaseController
{
    /** @var  AmenazasRepository */
    private $amenazasRepository;

    public function __construct(AmenazasRepository $amenazasRepo)
    {
        $this->amenazasRepository = $amenazasRepo;
    }

    /**
     * Display a listing of the Amenazas.
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
     * Show the form for creating a new Amenazas.
     *
     * @return Response
     */
    public function create()
    {
        return view('amenazas.create');
    }

    /**
     * Store a newly created Amenazas in storage.
     *
     * @param CreateAmenazasRequest $request
     *
     * @return Response
     */
    public function store(CreateAmenazasRequest $request)
    {
        $input = $request->all();

        $amenazas = $this->amenazasRepository->create($input);

        Flash::success('Amenazas saved successfully.');

        return redirect(route('amenazas.index'));
    }

    /**
     * Display the specified Amenazas.
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
     * Show the form for editing the specified Amenazas.
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
     * Update the specified Amenazas in storage.
     *
     * @param  int              $id
     * @param UpdateAmenazasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAmenazasRequest $request)
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
     * Remove the specified Amenazas from storage.
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
