<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoAbonoRequest;
use App\Http\Requests\UpdateTipoAbonoRequest;
use App\Repositories\TipoAbonoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoAbonoController extends AppBaseController
{
    /** @var  TipoAbonoRepository */
    private $tipoAbonoRepository;

    public function __construct(TipoAbonoRepository $tipoAbonoRepo)
    {
        $this->tipoAbonoRepository = $tipoAbonoRepo;
    }

    /**
     * Display a listing of the TipoAbono.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoAbonoRepository->pushCriteria(new RequestCriteria($request));
        $tipoAbonos = $this->tipoAbonoRepository->all();

        return view('tipo_abonos.index')
            ->with('tipoAbonos', $tipoAbonos);
    }

    /**
     * Show the form for creating a new TipoAbono.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_abonos.create');
    }

    /**
     * Store a newly created TipoAbono in storage.
     *
     * @param CreateTipoAbonoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAbonoRequest $request)
    {
        $input = $request->all();

        $tipoAbono = $this->tipoAbonoRepository->create($input);

        Flash::success('Tipo Abono saved successfully.');

        return redirect(route('tipoAbonos.index'));
    }

    /**
     * Display the specified TipoAbono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAbono = $this->tipoAbonoRepository->findWithoutFail($id);

        if (empty($tipoAbono)) {
            Flash::error('Tipo Abono not found');

            return redirect(route('tipoAbonos.index'));
        }

        return view('tipo_abonos.show')->with('tipoAbono', $tipoAbono);
    }

    /**
     * Show the form for editing the specified TipoAbono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAbono = $this->tipoAbonoRepository->findWithoutFail($id);

        if (empty($tipoAbono)) {
            Flash::error('Tipo Abono not found');

            return redirect(route('tipoAbonos.index'));
        }

        return view('tipo_abonos.edit')->with('tipoAbono', $tipoAbono);
    }

    /**
     * Update the specified TipoAbono in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAbonoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAbonoRequest $request)
    {
        $tipoAbono = $this->tipoAbonoRepository->findWithoutFail($id);

        if (empty($tipoAbono)) {
            Flash::error('Tipo Abono not found');

            return redirect(route('tipoAbonos.index'));
        }

        $tipoAbono = $this->tipoAbonoRepository->update($request->all(), $id);

        Flash::success('Tipo Abono updated successfully.');

        return redirect(route('tipoAbonos.index'));
    }

    /**
     * Remove the specified TipoAbono from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAbono = $this->tipoAbonoRepository->findWithoutFail($id);

        if (empty($tipoAbono)) {
            Flash::error('Tipo Abono not found');

            return redirect(route('tipoAbonos.index'));
        }

        $this->tipoAbonoRepository->delete($id);

        Flash::success('Tipo Abono deleted successfully.');

        return redirect(route('tipoAbonos.index'));
    }
}
