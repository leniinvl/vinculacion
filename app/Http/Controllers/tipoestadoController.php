<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipoestadoRequest;
use App\Http\Requests\UpdatetipoestadoRequest;
use App\Repositories\tipoestadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipoestadoController extends AppBaseController
{
    /** @var  tipoestadoRepository */
    private $tipoestadoRepository;

    public function __construct(tipoestadoRepository $tipoestadoRepo)
    {
        $this->tipoestadoRepository = $tipoestadoRepo;
    }

    /**
     * Display a listing of the tipoestado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoestadoRepository->pushCriteria(new RequestCriteria($request));
        $tipoestados = $this->tipoestadoRepository->all();

        return view('tipoestados.index')
            ->with('tipoestados', $tipoestados);
    }

    /**
     * Show the form for creating a new tipoestado.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoestados.create');
    }

    /**
     * Store a newly created tipoestado in storage.
     *
     * @param CreatetipoestadoRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoestadoRequest $request)
    {
        $input = $request->all();

        $tipoestado = $this->tipoestadoRepository->create($input);

        Flash::success('Tipoestado saved successfully.');

        return redirect(route('tipoestados.index'));
    }

    /**
     * Display the specified tipoestado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoestado = $this->tipoestadoRepository->findWithoutFail($id);

        if (empty($tipoestado)) {
            Flash::error('Tipoestado not found');

            return redirect(route('tipoestados.index'));
        }

        return view('tipoestados.show')->with('tipoestado', $tipoestado);
    }

    /**
     * Show the form for editing the specified tipoestado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoestado = $this->tipoestadoRepository->findWithoutFail($id);

        if (empty($tipoestado)) {
            Flash::error('Tipoestado not found');

            return redirect(route('tipoestados.index'));
        }

        return view('tipoestados.edit')->with('tipoestado', $tipoestado);
    }

    /**
     * Update the specified tipoestado in storage.
     *
     * @param  int              $id
     * @param UpdatetipoestadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoestadoRequest $request)
    {
        $tipoestado = $this->tipoestadoRepository->findWithoutFail($id);

        if (empty($tipoestado)) {
            Flash::error('Tipoestado not found');

            return redirect(route('tipoestados.index'));
        }

        $tipoestado = $this->tipoestadoRepository->update($request->all(), $id);

        Flash::success('Tipoestado updated successfully.');

        return redirect(route('tipoestados.index'));
    }

    /**
     * Remove the specified tipoestado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoestado = $this->tipoestadoRepository->findWithoutFail($id);

        if (empty($tipoestado)) {
            Flash::error('Tipoestado not found');

            return redirect(route('tipoestados.index'));
        }

        $this->tipoestadoRepository->delete($id);

        Flash::success('Tipoestado deleted successfully.');

        return redirect(route('tipoestados.index'));
    }
}
