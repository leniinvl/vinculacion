<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipodesechoRequest;
use App\Http\Requests\UpdateTipodesechoRequest;
use App\Repositories\TipodesechoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipodesechoController extends AppBaseController
{
    /** @var  TipodesechoRepository */
    private $tipodesechoRepository;

    public function __construct(TipodesechoRepository $tipodesechoRepo)
    {
        $this->tipodesechoRepository = $tipodesechoRepo;
    }

    /**
     * Display a listing of the Tipodesecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipodesechoRepository->pushCriteria(new RequestCriteria($request));
        $tipodesechos = $this->tipodesechoRepository->all();

        return view('tipodesechos.index')
            ->with('tipodesechos', $tipodesechos);
    }

    /**
     * Show the form for creating a new Tipodesecho.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipodesechos.create');
    }

    /**
     * Store a newly created Tipodesecho in storage.
     *
     * @param CreateTipodesechoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipodesechoRequest $request)
    {
        $input = $request->all();

        $tipodesecho = $this->tipodesechoRepository->create($input);

        Flash::success('Tipodesecho saved successfully.');

        return redirect(route('tipodesechos.index'));
    }

    /**
     * Display the specified Tipodesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        return view('tipodesechos.show')->with('tipodesecho', $tipodesecho);
    }

    /**
     * Show the form for editing the specified Tipodesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        return view('tipodesechos.edit')->with('tipodesecho', $tipodesecho);
    }

    /**
     * Update the specified Tipodesecho in storage.
     *
     * @param  int              $id
     * @param UpdateTipodesechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipodesechoRequest $request)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        $tipodesecho = $this->tipodesechoRepository->update($request->all(), $id);

        Flash::success('Tipodesecho updated successfully.');

        return redirect(route('tipodesechos.index'));
    }

    /**
     * Remove the specified Tipodesecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        $this->tipodesechoRepository->delete($id);

        Flash::success('Tipodesecho deleted successfully.');

        return redirect(route('tipodesechos.index'));
    }
}
