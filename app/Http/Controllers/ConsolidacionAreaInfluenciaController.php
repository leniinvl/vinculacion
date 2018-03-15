<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateConsolidacionAreaInfluenciaRequest;
use App\Http\Requests\UpdateConsolidacionAreaInfluenciaRequest;
use App\Repositories\ConsolidacionAreaInfluenciaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConsolidacionAreaInfluenciaController extends AppBaseController
{
    /** @var  ConsolidacionAreaInfluenciaRepository */
    private $consolidacionAreaInfluenciaRepository;

    public function __construct(ConsolidacionAreaInfluenciaRepository $consolidacionAreaInfluenciaRepo)
    {
        $this->consolidacionAreaInfluenciaRepository = $consolidacionAreaInfluenciaRepo;
    }

    /**
     * Display a listing of the ConsolidacionAreaInfluencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->consolidacionAreaInfluenciaRepository->pushCriteria(new RequestCriteria($request));
        $consolidacionAreaInfluencias = $this->consolidacionAreaInfluenciaRepository->all();

        return view('consolidacion_area_influencias.index')
            ->with('consolidacionAreaInfluencias', $consolidacionAreaInfluencias);
    }

    /**
     * Show the form for creating a new ConsolidacionAreaInfluencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('consolidacion_area_influencias.create');
    }

    /**
     * Store a newly created ConsolidacionAreaInfluencia in storage.
     *
     * @param CreateConsolidacionAreaInfluenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateConsolidacionAreaInfluenciaRequest $request)
    {
        $input = $request->all();

        $consolidacionAreaInfluencia = $this->consolidacionAreaInfluenciaRepository->create($input);

        Flash::success('Consolidacion Area Influencia
guardado exitosamente.');

        return redirect(route('consolidacionAreaInfluencias.index'));
    }

    /**
     * Display the specified ConsolidacionAreaInfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consolidacionAreaInfluencia = $this->consolidacionAreaInfluenciaRepository->findWithoutFail($id);

        if (empty($consolidacionAreaInfluencia)) {
            Flash::error('Consolidacion Area Influencia not found');

            return redirect(route('consolidacionAreaInfluencias.index'));
        }

        return view('consolidacion_area_influencias.show')->with('consolidacionAreaInfluencia', $consolidacionAreaInfluencia);
    }

    /**
     * Show the form for editing the specified ConsolidacionAreaInfluencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consolidacionAreaInfluencia = $this->consolidacionAreaInfluenciaRepository->findWithoutFail($id);

        if (empty($consolidacionAreaInfluencia)) {
            Flash::error('Consolidacion Area Influencia not found');

            return redirect(route('consolidacionAreaInfluencias.index'));
        }

        return view('consolidacion_area_influencias.edit')->with('consolidacionAreaInfluencia', $consolidacionAreaInfluencia);
    }

    /**
     * Update the specified ConsolidacionAreaInfluencia in storage.
     *
     * @param  int              $id
     * @param UpdateConsolidacionAreaInfluenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsolidacionAreaInfluenciaRequest $request)
    {
        $consolidacionAreaInfluencia = $this->consolidacionAreaInfluenciaRepository->findWithoutFail($id);

        if (empty($consolidacionAreaInfluencia)) {
            Flash::error('Consolidacion Area Influencia not found');

            return redirect(route('consolidacionAreaInfluencias.index'));
        }

        $consolidacionAreaInfluencia = $this->consolidacionAreaInfluenciaRepository->update($request->all(), $id);

        Flash::success('Consolidacion Area Influencia updated successfully.');

        return redirect(route('consolidacionAreaInfluencias.index'));
    }

    /**
     * Remove the specified ConsolidacionAreaInfluencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consolidacionAreaInfluencia = $this->consolidacionAreaInfluenciaRepository->findWithoutFail($id);

        if (empty($consolidacionAreaInfluencia)) {
            Flash::error('Consolidacion Area Influencia not found');

            return redirect(route('consolidacionAreaInfluencias.index'));
        }

        $this->consolidacionAreaInfluenciaRepository->delete($id);

        Flash::success('Consolidacion Area Influencia deleted successfully.');

        return redirect(route('consolidacionAreaInfluencias.index'));
    }
}
