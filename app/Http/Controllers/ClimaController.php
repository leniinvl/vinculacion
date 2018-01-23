<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClimaRequest;
use App\Http\Requests\UpdateClimaRequest;
use App\Repositories\ClimaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClimaController extends AppBaseController
{
    /** @var  ClimaRepository */
    private $climaRepository;

    public function __construct(ClimaRepository $climaRepo)
    {
        $this->climaRepository = $climaRepo;
    }

    /**
     * Display a listing of the Clima.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->climaRepository->pushCriteria(new RequestCriteria($request));
        $climas = $this->climaRepository->all();

        return view('climas.index')
            ->with('climas', $climas);
    }

    /**
     * Show the form for creating a new Clima.
     *
     * @return Response
     */
    public function create()
    {
        return view('climas.create');
    }

    /**
     * Store a newly created Clima in storage.
     *
     * @param CreateClimaRequest $request
     *
     * @return Response
     */
    public function store(CreateClimaRequest $request)
    {
        $input = $request->all();

        $clima = $this->climaRepository->create($input);

        Flash::success('Clima saved successfully.');

        return redirect(route('climas.index'));
    }

    /**
     * Display the specified Clima.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clima = $this->climaRepository->findWithoutFail($id);

        if (empty($clima)) {
            Flash::error('Clima not found');

            return redirect(route('climas.index'));
        }

        return view('climas.show')->with('clima', $clima);
    }

    /**
     * Show the form for editing the specified Clima.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clima = $this->climaRepository->findWithoutFail($id);

        if (empty($clima)) {
            Flash::error('Clima not found');

            return redirect(route('climas.index'));
        }

        return view('climas.edit')->with('clima', $clima);
    }

    /**
     * Update the specified Clima in storage.
     *
     * @param  int              $id
     * @param UpdateClimaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClimaRequest $request)
    {
        $clima = $this->climaRepository->findWithoutFail($id);

        if (empty($clima)) {
            Flash::error('Clima not found');

            return redirect(route('climas.index'));
        }

        $clima = $this->climaRepository->update($request->all(), $id);

        Flash::success('Clima updated successfully.');

        return redirect(route('climas.index'));
    }

    /**
     * Remove the specified Clima from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clima = $this->climaRepository->findWithoutFail($id);

        if (empty($clima)) {
            Flash::error('Clima not found');

            return redirect(route('climas.index'));
        }

        $this->climaRepository->delete($id);

        Flash::success('Clima deleted successfully.');

        return redirect(route('climas.index'));
    }
}
