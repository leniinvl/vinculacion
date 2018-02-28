<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUsoTierraRequest;
use App\Http\Requests\UpdateUsoTierraRequest;
use App\Repositories\UsoTierraRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsoTierraController extends AppBaseController
{
    /** @var  UsoTierraRepository */
    private $usoTierraRepository;

    public function __construct(UsoTierraRepository $usoTierraRepo)
    {
        $this->usoTierraRepository = $usoTierraRepo;
    }

    /**
     * Display a listing of the UsoTierra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usoTierraRepository->pushCriteria(new RequestCriteria($request));
        $usoTierras = $this->usoTierraRepository->all();

        return view('uso_tierras.index')
            ->with('usoTierras', $usoTierras);
    }

    /**
     * Show the form for creating a new UsoTierra.
     *
     * @return Response
     */
    public function create()
    {
        return view('uso_tierras.create');
    }

    /**
     * Store a newly created UsoTierra in storage.
     *
     * @param CreateUsoTierraRequest $request
     *
     * @return Response
     */
    public function store(CreateUsoTierraRequest $request)
    {
        $input = $request->all();

        $usoTierra = $this->usoTierraRepository->create($input);

        Flash::success('Uso Tierra saved successfully.');

        return redirect(route('usoTierras.index'));
    }

    /**
     * Display the specified UsoTierra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usoTierra = $this->usoTierraRepository->findWithoutFail($id);

        if (empty($usoTierra)) {
            Flash::error('Uso Tierra not found');

            return redirect(route('usoTierras.index'));
        }

        return view('uso_tierras.show')->with('usoTierra', $usoTierra);
    }

    /**
     * Show the form for editing the specified UsoTierra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usoTierra = $this->usoTierraRepository->findWithoutFail($id);

        if (empty($usoTierra)) {
            Flash::error('Uso Tierra not found');

            return redirect(route('usoTierras.index'));
        }

        return view('uso_tierras.edit')->with('usoTierra', $usoTierra);
    }

    /**
     * Update the specified UsoTierra in storage.
     *
     * @param  int              $id
     * @param UpdateUsoTierraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsoTierraRequest $request)
    {
        $usoTierra = $this->usoTierraRepository->findWithoutFail($id);

        if (empty($usoTierra)) {
            Flash::error('Uso Tierra not found');

            return redirect(route('usoTierras.index'));
        }

        $usoTierra = $this->usoTierraRepository->update($request->all(), $id);

        Flash::success('Uso Tierra updated successfully.');

        return redirect(route('usoTierras.index'));
    }

    /**
     * Remove the specified UsoTierra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usoTierra = $this->usoTierraRepository->findWithoutFail($id);

        if (empty($usoTierra)) {
            Flash::error('Uso Tierra not found');

            return redirect(route('usoTierras.index'));
        }

        $this->usoTierraRepository->delete($id);

        Flash::success('Uso Tierra deleted successfully.');

        return redirect(route('usoTierras.index'));
    }
}
