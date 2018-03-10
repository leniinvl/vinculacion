<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedestinoRequest;
use App\Http\Requests\UpdatedestinoRequest;
use App\Repositories\destinoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class destinoController extends AppBaseController
{
    /** @var  destinoRepository */
    private $destinoRepository;

    public function __construct(destinoRepository $destinoRepo)
    {
        $this->destinoRepository = $destinoRepo;
    }

    /**
     * Display a listing of the destino.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->destinoRepository->pushCriteria(new RequestCriteria($request));
        $destinos = $this->destinoRepository->all();

        return view('destinos.index')
            ->with('destinos', $destinos);
    }

    /**
     * Show the form for creating a new destino.
     *
     * @return Response
     */
    public function create()
    {
        return view('destinos.create');
    }

    /**
     * Store a newly created destino in storage.
     *
     * @param CreatedestinoRequest $request
     *
     * @return Response
     */
    public function store(CreatedestinoRequest $request)
    {
        $input = $request->all();

        $destino = $this->destinoRepository->create($input);

        Flash::success('Destino saved successfully.');

        return redirect(route('destinos.index'));
    }

    /**
     * Display the specified destino.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        return view('destinos.show')->with('destino', $destino);
    }

    /**
     * Show the form for editing the specified destino.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        return view('destinos.edit')->with('destino', $destino);
    }

    /**
     * Update the specified destino in storage.
     *
     * @param  int              $id
     * @param UpdatedestinoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedestinoRequest $request)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        $destino = $this->destinoRepository->update($request->all(), $id);

        Flash::success('Destino updated successfully.');

        return redirect(route('destinos.index'));
    }

    /**
     * Remove the specified destino from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        $this->destinoRepository->delete($id);

        Flash::success('Destino deleted successfully.');

        return redirect(route('destinos.index'));
    }
}
