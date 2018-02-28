<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateRuidoRequest;
use App\Http\Requests\UpdateRuidoRequest;
use App\Repositories\RuidoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RuidoController extends AppBaseController
{
    /** @var  RuidoRepository */
    private $ruidoRepository;

    public function __construct(RuidoRepository $ruidoRepo)
    {
        $this->ruidoRepository = $ruidoRepo;
    }

    /**
     * Display a listing of the Ruido.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ruidoRepository->pushCriteria(new RequestCriteria($request));
        $ruidos = $this->ruidoRepository->all();

        return view('ruidos.index')
            ->with('ruidos', $ruidos);
    }

    /**
     * Show the form for creating a new Ruido.
     *
     * @return Response
     */
    public function create()
    {
        return view('ruidos.create');
    }

    /**
     * Store a newly created Ruido in storage.
     *
     * @param CreateRuidoRequest $request
     *
     * @return Response
     */
    public function store(CreateRuidoRequest $request)
    {
        $input = $request->all();

        $ruido = $this->ruidoRepository->create($input);

        Flash::success('Ruido saved successfully.');

        return redirect(route('ruidos.index'));
    }

    /**
     * Display the specified Ruido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ruido = $this->ruidoRepository->findWithoutFail($id);

        if (empty($ruido)) {
            Flash::error('Ruido not found');

            return redirect(route('ruidos.index'));
        }

        return view('ruidos.show')->with('ruido', $ruido);
    }

    /**
     * Show the form for editing the specified Ruido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ruido = $this->ruidoRepository->findWithoutFail($id);

        if (empty($ruido)) {
            Flash::error('Ruido not found');

            return redirect(route('ruidos.index'));
        }

        return view('ruidos.edit')->with('ruido', $ruido);
    }

    /**
     * Update the specified Ruido in storage.
     *
     * @param  int              $id
     * @param UpdateRuidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRuidoRequest $request)
    {
        $ruido = $this->ruidoRepository->findWithoutFail($id);

        if (empty($ruido)) {
            Flash::error('Ruido not found');

            return redirect(route('ruidos.index'));
        }

        $ruido = $this->ruidoRepository->update($request->all(), $id);

        Flash::success('Ruido updated successfully.');

        return redirect(route('ruidos.index'));
    }

    /**
     * Remove the specified Ruido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ruido = $this->ruidoRepository->findWithoutFail($id);

        if (empty($ruido)) {
            Flash::error('Ruido not found');

            return redirect(route('ruidos.index'));
        }

        $this->ruidoRepository->delete($id);

        Flash::success('Ruido deleted successfully.');

        return redirect(route('ruidos.index'));
    }
}
