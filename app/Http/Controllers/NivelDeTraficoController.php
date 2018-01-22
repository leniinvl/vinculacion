<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNivelDeTraficoRequest;
use App\Http\Requests\UpdateNivelDeTraficoRequest;
use App\Repositories\NivelDeTraficoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NivelDeTraficoController extends AppBaseController
{
    /** @var  NivelDeTraficoRepository */
    private $nivelDeTraficoRepository;

    public function __construct(NivelDeTraficoRepository $nivelDeTraficoRepo)
    {
        $this->nivelDeTraficoRepository = $nivelDeTraficoRepo;
    }

    /**
     * Display a listing of the NivelDeTrafico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nivelDeTraficoRepository->pushCriteria(new RequestCriteria($request));
        $nivelDeTraficos = $this->nivelDeTraficoRepository->all();

        return view('nivel_de_traficos.index')
            ->with('nivelDeTraficos', $nivelDeTraficos);
    }

    /**
     * Show the form for creating a new NivelDeTrafico.
     *
     * @return Response
     */
    public function create()
    {
        return view('nivel_de_traficos.create');
    }

    /**
     * Store a newly created NivelDeTrafico in storage.
     *
     * @param CreateNivelDeTraficoRequest $request
     *
     * @return Response
     */
    public function store(CreateNivelDeTraficoRequest $request)
    {
        $input = $request->all();

        $nivelDeTrafico = $this->nivelDeTraficoRepository->create($input);

        Flash::success('Nivel De Trafico saved successfully.');

        return redirect(route('nivelDeTraficos.index'));
    }

    /**
     * Display the specified NivelDeTrafico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nivelDeTrafico = $this->nivelDeTraficoRepository->findWithoutFail($id);

        if (empty($nivelDeTrafico)) {
            Flash::error('Nivel De Trafico not found');

            return redirect(route('nivelDeTraficos.index'));
        }

        return view('nivel_de_traficos.show')->with('nivelDeTrafico', $nivelDeTrafico);
    }

    /**
     * Show the form for editing the specified NivelDeTrafico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nivelDeTrafico = $this->nivelDeTraficoRepository->findWithoutFail($id);

        if (empty($nivelDeTrafico)) {
            Flash::error('Nivel De Trafico not found');

            return redirect(route('nivelDeTraficos.index'));
        }

        return view('nivel_de_traficos.edit')->with('nivelDeTrafico', $nivelDeTrafico);
    }

    /**
     * Update the specified NivelDeTrafico in storage.
     *
     * @param  int              $id
     * @param UpdateNivelDeTraficoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNivelDeTraficoRequest $request)
    {
        $nivelDeTrafico = $this->nivelDeTraficoRepository->findWithoutFail($id);

        if (empty($nivelDeTrafico)) {
            Flash::error('Nivel De Trafico not found');

            return redirect(route('nivelDeTraficos.index'));
        }

        $nivelDeTrafico = $this->nivelDeTraficoRepository->update($request->all(), $id);

        Flash::success('Nivel De Trafico updated successfully.');

        return redirect(route('nivelDeTraficos.index'));
    }

    /**
     * Remove the specified NivelDeTrafico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nivelDeTrafico = $this->nivelDeTraficoRepository->findWithoutFail($id);

        if (empty($nivelDeTrafico)) {
            Flash::error('Nivel De Trafico not found');

            return redirect(route('nivelDeTraficos.index'));
        }

        $this->nivelDeTraficoRepository->delete($id);

        Flash::success('Nivel De Trafico deleted successfully.');

        return redirect(route('nivelDeTraficos.index'));
    }
}
