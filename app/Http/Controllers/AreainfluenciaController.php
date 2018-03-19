<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAreaInfluenciaRequest;
use App\Http\Requests\UpdateAreaInfluenciaRequest;
use App\Repositories\AreaInfluenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreaInfluenciaController extends AppBaseController
{
    /** @var  AreaInfluenciaRepository */
    private $areaInfluenciaRepository;

    public function __construct(AreaInfluenciaRepository $areaInfluenciaRepo)
    {
        $this->areaInfluenciaRepository = $areaInfluenciaRepo;
    }

    /**
     * Display a listing of the AreaInfluencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaInfluenciaRepository->pushCriteria(new RequestCriteria($request));
        $areaInfluencias = $this->areaInfluenciaRepository->all();

        return view('area_influencias.index')
            ->with('areaInfluencias', $areaInfluencias);
    }

    /**
     * Show the form for creating a new AreaInfluencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('area_influencias.create');
    }

    /**
     * Store a newly created AreaInfluencia in storage.
     *
     * @param CreateAreaInfluenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaInfluenciaRequest $request)
    {
        $input = $request->all();

        $areaInfluencia = $this->areaInfluenciaRepository->create($input);

        Flash::success('Area Influencia saved successfully.');

        return redirect(route('areaInfluencias.index'));
    }

    /**
     * Display the specified AreaInfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);

        if (empty($areaInfluencia)) {
            Flash::error('Area Influencia not found');

            return redirect(route('areaInfluencias.index'));
        }

        return view('area_influencias.show')->with('areaInfluencia', $areaInfluencia);
    }

    /**
     * Show the form for editing the specified AreaInfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);

        if (empty($areaInfluencia)) {
            Flash::error('Area Influencia not found');

            return redirect(route('areaInfluencias.index'));
        }

        return view('area_influencias.edit')->with('areaInfluencia', $areaInfluencia);
    }

    /**
     * Update the specified AreaInfluencia in storage.
     *
     * @param  int              $id
     * @param UpdateAreaInfluenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaInfluenciaRequest $request)
    {
        $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);

        if (empty($areaInfluencia)) {
            Flash::error('Area Influencia not found');

            return redirect(route('areaInfluencias.index'));
        }

        $areaInfluencia = $this->areaInfluenciaRepository->update($request->all(), $id);

        Flash::success('Area Influencia updated successfully.');

        return redirect(route('areaInfluencias.index'));
    }

    /**
     * Remove the specified AreaInfluencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);

        if (empty($areaInfluencia)) {
            Flash::error('Area Influencia not found');

            return redirect(route('areaInfluencias.index'));
        }

        $this->areaInfluenciaRepository->delete($id);

        Flash::success('Area Influencia deleted successfully.');

        return redirect(route('areaInfluencias.index'));
    }
}
