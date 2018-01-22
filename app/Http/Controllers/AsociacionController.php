<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsociacionRequest;
use App\Http\Requests\UpdateAsociacionRequest;
use App\Repositories\AsociacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AsociacionController extends AppBaseController
{
    /** @var  AsociacionRepository */
    private $asociacionRepository;

    public function __construct(AsociacionRepository $asociacionRepo)
    {
        $this->asociacionRepository = $asociacionRepo;
    }

    /**
     * Display a listing of the Asociacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asociacionRepository->pushCriteria(new RequestCriteria($request));
        $asociacions = $this->asociacionRepository->all();

        return view('asociacions.index')
            ->with('asociacions', $asociacions);
    }

    /**
     * Show the form for creating a new Asociacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('asociacions.create');
    }

    /**
     * Store a newly created Asociacion in storage.
     *
     * @param CreateAsociacionRequest $request
     *
     * @return Response
     */
    public function store(CreateAsociacionRequest $request)
    {
        $input = $request->all();

        $asociacion = $this->asociacionRepository->create($input);

        Flash::success('Asociación guardada exitosamente.');

        return redirect(route('asociacions.index'));
    }

    /**
     * Display the specified Asociacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asociacion = $this->asociacionRepository->findWithoutFail($id);

        if (empty($asociacion)) {
            Flash::error('Asociacion no encontrada');

            return redirect(route('asociacions.index'));
        }

        return view('asociacions.show')->with('asociacion', $asociacion);
    }

    /**
     * Show the form for editing the specified Asociacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asociacion = $this->asociacionRepository->findWithoutFail($id);

        if (empty($asociacion)) {
            Flash::error('Asociacion no encontrada');

            return redirect(route('asociacions.index'));
        }

        return view('asociacions.edit')->with('asociacion', $asociacion);
    }

    /**
     * Update the specified Asociacion in storage.
     *
     * @param  int              $id
     * @param UpdateAsociacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsociacionRequest $request)
    {
        $asociacion = $this->asociacionRepository->findWithoutFail($id);

        if (empty($asociacion)) {
            Flash::error('Asociacion not found');

            return redirect(route('asociacions.index'));
        }

        $asociacion = $this->asociacionRepository->update($request->all(), $id);

        Flash::success('Asociacion updated successfully.');

        return redirect(route('asociacions.index'));
    }

    /**
     * Remove the specified Asociacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asociacion = $this->asociacionRepository->findWithoutFail($id);

        if (empty($asociacion)) {
            Flash::error('Asociacion not found');

            return redirect(route('asociacions.index'));
        }

        $this->asociacionRepository->delete($id);

        Flash::success('Asociacion deleted successfully.');

        return redirect(route('asociacions.index'));
    }
}
