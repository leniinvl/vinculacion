<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAreaInfluenciaHasTopologiaRequest;
use App\Http\Requests\UpdateAreaInfluenciaHasTopologiaRequest;
use App\Repositories\AreaInfluenciaHasTopologiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreaInfluenciaHasTopologiaController extends AppBaseController
{
    /** @var  AreaInfluenciaHasTopologiaRepository */
    private $areaInfluenciaHasTopologiaRepository;

    public function __construct(AreaInfluenciaHasTopologiaRepository $areaInfluenciaHasTopologiaRepo)
    {
        $this->areaInfluenciaHasTopologiaRepository = $areaInfluenciaHasTopologiaRepo;
    }

    /**
     * Display a listing of the AreaInfluenciaHasTopologia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaInfluenciaHasTopologiaRepository->pushCriteria(new RequestCriteria($request));
        $areaInfluenciaHasTopologias = $this->areaInfluenciaHasTopologiaRepository->all();

        return view('area_influencia_has_topologias.index')
            ->with('areaInfluenciaHasTopologias', $areaInfluenciaHasTopologias);
    }

    /**
     * Show the form for creating a new AreaInfluenciaHasTopologia.
     *
     * @return Response
     */
    public function create()
    {
        return view('area_influencia_has_topologias.create');
    }

    /**
     * Store a newly created AreaInfluenciaHasTopologia in storage.
     *
     * @param CreateAreaInfluenciaHasTopologiaRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaInfluenciaHasTopologiaRequest $request)
    {
        $input = $request->all();

        $areaInfluenciaHasTopologia = $this->areaInfluenciaHasTopologiaRepository->create($input);

        Flash::success('Area Influencia Has Topologia saved successfully.');

        return redirect(route('areaInfluenciaHasTopologias.index'));
    }

    /**
     * Display the specified AreaInfluenciaHasTopologia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaInfluenciaHasTopologia = $this->areaInfluenciaHasTopologiaRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTopologia)) {
            Flash::error('Area Influencia Has Topologia not found');

            return redirect(route('areaInfluenciaHasTopologias.index'));
        }

        return view('area_influencia_has_topologias.show')->with('areaInfluenciaHasTopologia', $areaInfluenciaHasTopologia);
    }

    /**
     * Show the form for editing the specified AreaInfluenciaHasTopologia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaInfluenciaHasTopologia = $this->areaInfluenciaHasTopologiaRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTopologia)) {
            Flash::error('Area Influencia Has Topologia not found');

            return redirect(route('areaInfluenciaHasTopologias.index'));
        }

        return view('area_influencia_has_topologias.edit')->with('areaInfluenciaHasTopologia', $areaInfluenciaHasTopologia);
    }

    /**
     * Update the specified AreaInfluenciaHasTopologia in storage.
     *
     * @param  int              $id
     * @param UpdateAreaInfluenciaHasTopologiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaInfluenciaHasTopologiaRequest $request)
    {
        $areaInfluenciaHasTopologia = $this->areaInfluenciaHasTopologiaRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTopologia)) {
            Flash::error('Area Influencia Has Topologia not found');

            return redirect(route('areaInfluenciaHasTopologias.index'));
        }

        $areaInfluenciaHasTopologia = $this->areaInfluenciaHasTopologiaRepository->update($request->all(), $id);

        Flash::success('Area Influencia Has Topologia updated successfully.');

        return redirect(route('areaInfluenciaHasTopologias.index'));
    }

    /**
     * Remove the specified AreaInfluenciaHasTopologia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaInfluenciaHasTopologia = $this->areaInfluenciaHasTopologiaRepository->findWithoutFail($id);

        if (empty($areaInfluenciaHasTopologia)) {
            Flash::error('Area Influencia Has Topologia not found');

            return redirect(route('areaInfluenciaHasTopologias.index'));
        }

        $this->areaInfluenciaHasTopologiaRepository->delete($id);

        Flash::success('Area Influencia Has Topologia deleted successfully.');

        return redirect(route('areaInfluenciaHasTopologias.index'));
    }
}
