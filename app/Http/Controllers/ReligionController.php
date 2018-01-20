<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReligionRequest;
use App\Http\Requests\UpdateReligionRequest;
use App\Repositories\ReligionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReligionController extends AppBaseController
{
    /** @var  ReligionRepository */
    private $religionRepository;

    public function __construct(ReligionRepository $religionRepo)
    {
        $this->religionRepository = $religionRepo;
    }

    /**
     * Display a listing of the Religion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->religionRepository->pushCriteria(new RequestCriteria($request));
        $religions = $this->religionRepository->all();

        return view('religions.index')
            ->with('religions', $religions);
    }

    /**
     * Show the form for creating a new Religion.
     *
     * @return Response
     */
    public function create()
    {
        return view('religions.create');
    }

    /**
     * Store a newly created Religion in storage.
     *
     * @param CreateReligionRequest $request
     *
     * @return Response
     */
    public function store(CreateReligionRequest $request)
    {
        $input = $request->all();

        $religion = $this->religionRepository->create($input);

        Flash::success('Religion saved successfully.');

        return redirect(route('religions.index'));
    }

    /**
     * Display the specified Religion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $religion = $this->religionRepository->findWithoutFail($id);

        if (empty($religion)) {
            Flash::error('Religion not found');

            return redirect(route('religions.index'));
        }

        return view('religions.show')->with('religion', $religion);
    }

    /**
     * Show the form for editing the specified Religion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $religion = $this->religionRepository->findWithoutFail($id);

        if (empty($religion)) {
            Flash::error('Religion not found');

            return redirect(route('religions.index'));
        }

        return view('religions.edit')->with('religion', $religion);
    }

    /**
     * Update the specified Religion in storage.
     *
     * @param  int              $id
     * @param UpdateReligionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReligionRequest $request)
    {
        $religion = $this->religionRepository->findWithoutFail($id);

        if (empty($religion)) {
            Flash::error('Religion not found');

            return redirect(route('religions.index'));
        }

        $religion = $this->religionRepository->update($request->all(), $id);

        Flash::success('Religion updated successfully.');

        return redirect(route('religions.index'));
    }

    /**
     * Remove the specified Religion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $religion = $this->religionRepository->findWithoutFail($id);

        if (empty($religion)) {
            Flash::error('Religion not found');

            return redirect(route('religions.index'));
        }

        $this->religionRepository->delete($id);

        Flash::success('Religion deleted successfully.');

        return redirect(route('religions.index'));
    }
}
