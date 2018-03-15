<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAreaInfluenciaHasTradicionRequest;
use App\Http\Requests\UpdateAreaInfluenciaHasTradicionRequest;
use App\Repositories\AreaInfluenciaHasTradicionRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreaInfluenciaHasTradicionController extends AppBaseController
{
    /** @var  AreaInfluenciaHasTradicionRepository */
    private $areaInfluenciaHasTradicionRepository;

    public function __construct(AreaInfluenciaHasTradicionRepository $areaInfluenciaHasTradicionRepo)
    {
        $this->areaInfluenciaHasTradicionRepository = $areaInfluenciaHasTradicionRepo;
    }

    /**
     * Display a listing of the AreaInfluenciaHasTradicion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaInfluenciaHasTradicionRepository->pushCriteria(new RequestCriteria($request));
        $areaInfluenciaHasTradicions = $this->areaInfluenciaHasTradicionRepository->all();

        return view('area_influencia_has_tradicions.index')
            ->with('areaInfluenciaHasTradicions', $areaInfluenciaHasTradicions);
    }

    /**
     * Show the form for creating a new AreaInfluenciaHasTradicion.
     *
     * @return Response
     */
    public function create()
    {
        return view('area_influencia_has_tradicions.create');
    }

    /**
     * Store a newly created AreaInfluenciaHasTradicion in storage.
     *
     * @param CreateAreaInfluenciaHasTradicionRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaInfluenciaHasTradicionRequest $request)
    {
        $input = $request->all();

        $areaInfluenciaHasTradicion = $this->areaInfluenciaHasTradicionRepository->create($input);

        Flash::success('Area Influencia Has Tradicion
guardado exitosamente.');

        return redirect(route('areaInfluenciaHasTradicions.index'));
    }

    /**
     * Display the specified AreaInfluenciaHasTradicion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaInfluenciaHasTradicion = $this->areaInfluenciaHasTradicionRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTradicion)) {
            Flash::error('Area Influencia Has Tradicion not found');

            return redirect(route('areaInfluenciaHasTradicions.index'));
        }

        return view('area_influencia_has_tradicions.show')->with('areaInfluenciaHasTradicion', $areaInfluenciaHasTradicion);
    }

    /**
     * Show the form for editing the specified AreaInfluenciaHasTradicion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaInfluenciaHasTradicion = $this->areaInfluenciaHasTradicionRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTradicion)) {
            Flash::error('Area Influencia Has Tradicion not found');

            return redirect(route('areaInfluenciaHasTradicions.index'));
        }

        return view('area_influencia_has_tradicions.edit')->with('areaInfluenciaHasTradicion', $areaInfluenciaHasTradicion);
    }

    /**
     * Update the specified AreaInfluenciaHasTradicion in storage.
     *
     * @param  int              $id
     * @param UpdateAreaInfluenciaHasTradicionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaInfluenciaHasTradicionRequest $request)
    {
        $areaInfluenciaHasTradicion = $this->areaInfluenciaHasTradicionRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTradicion)) {
            Flash::error('Area Influencia Has Tradicion not found');

            return redirect(route('areaInfluenciaHasTradicions.index'));
        }

        $areaInfluenciaHasTradicion = $this->areaInfluenciaHasTradicionRepository->update($request->all(), $id);

        Flash::success('Area Influencia Has Tradicion updated successfully.');

        return redirect(route('areaInfluenciaHasTradicions.index'));
    }

    /**
     * Remove the specified AreaInfluenciaHasTradicion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaInfluenciaHasTradicion = $this->areaInfluenciaHasTradicionRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTradicion)) {
            Flash::error('Area Influencia Has Tradicion not found');

            return redirect(route('areaInfluenciaHasTradicions.index'));
        }

        $this->areaInfluenciaHasTradicionRepository->delete($id);

        Flash::success('Area Influencia Has Tradicion deleted successfully.');

        return redirect(route('areaInfluenciaHasTradicions.index'));
    }
}
