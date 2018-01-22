<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTallerRequest;
use App\Http\Requests\UpdateTallerRequest;
use App\Repositories\TallerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TallerController extends AppBaseController
{
    /** @var  TallerRepository */
    private $tallerRepository;

    public function __construct(TallerRepository $tallerRepo)
    {
        $this->tallerRepository = $tallerRepo;
    }

    /**
     * Display a listing of the Taller.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tallerRepository->pushCriteria(new RequestCriteria($request));
        $tallers = $this->tallerRepository->all();

        return view('tallers.index')
            ->with('tallers', $tallers);
    }

    /**
     * Show the form for creating a new Taller.
     *
     * @return Response
     */
    public function create()
    {
        return view('tallers.create');
    }

    /**
     * Store a newly created Taller in storage.
     *
     * @param CreateTallerRequest $request
     *
     * @return Response
     */
    public function store(CreateTallerRequest $request)
    {
        $input = $request->all();

        $taller = $this->tallerRepository->create($input);

        Flash::success('Taller saved successfully.');

        return redirect(route('tallers.index'));
    }

    /**
     * Display the specified Taller.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        return view('tallers.show')->with('taller', $taller);
    }

    /**
     * Show the form for editing the specified Taller.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        return view('tallers.edit')->with('taller', $taller);
    }

    /**
     * Update the specified Taller in storage.
     *
     * @param  int              $id
     * @param UpdateTallerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTallerRequest $request)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        $taller = $this->tallerRepository->update($request->all(), $id);

        Flash::success('Taller updated successfully.');

        return redirect(route('tallers.index'));
    }

    /**
     * Remove the specified Taller from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        $this->tallerRepository->delete($id);

        Flash::success('Taller deleted successfully.');

        return redirect(route('tallers.index'));
    }
}
