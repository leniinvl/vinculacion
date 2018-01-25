<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateManejoAmbientalRequest;
use App\Http\Requests\UpdateManejoAmbientalRequest;
use App\Repositories\ManejoAmbientalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoProyecto;
use App\Models\CategoriaProyecto;
use App\Models\unidadproduccion;

class ManejoAmbientalController extends AppBaseController
{
    /** @var  ManejoAmbientalRepository */
    private $manejoAmbientalRepository;

    public function __construct(ManejoAmbientalRepository $manejoAmbientalRepo)
    {
        $this->manejoAmbientalRepository = $manejoAmbientalRepo;
    }

    /**
     * Display a listing of the ManejoAmbiental.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->manejoAmbientalRepository->pushCriteria(new RequestCriteria($request));
        $manejoAmbientals = $this->manejoAmbientalRepository->all();

        return view('manejo_ambientals.index')
            ->with('manejoAmbientals', $manejoAmbientals);
    }

    /**
     * Show the form for creating a new ManejoAmbiental.
     *
     * @return Response
     */
    public function create()
    {
        $tipoproyecto=TipoProyecto::all()->pluck('nombre','id');
        $categoriaproyecto=CategoriaProyecto::all()->pluck('nombre','id');
        $unidadproduccion=unidadproduccion::all()->pluck('nombre','id');

        return view('manejo_ambientals.create',[
            'tipoproyecto' => $tipoproyecto,
            'categoriaproyecto' => $categoriaproyecto,
            'unidadproduccion' => $unidadproduccion
        ]);
    }

    /**
     * Store a newly created ManejoAmbiental in storage.
     *
     * @param CreateManejoAmbientalRequest $request
     *
     * @return Response
     */
    public function store(CreateManejoAmbientalRequest $request)
    {
        $input = $request->all();

        $manejoAmbiental = $this->manejoAmbientalRepository->create($input);

        Flash::success('Manejo Ambiental saved successfully.');

        return redirect(route('manejoAmbientals.index'));
    }

    /**
     * Display the specified ManejoAmbiental.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $manejoAmbiental = $this->manejoAmbientalRepository->findWithoutFail($id);

        if (empty($manejoAmbiental)) {
            Flash::error('Manejo Ambiental not found');

            return redirect(route('manejoAmbientals.index'));
        }

        return view('manejo_ambientals.show')->with('manejoAmbiental', $manejoAmbiental);
    }

    /**
     * Show the form for editing the specified ManejoAmbiental.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $manejoAmbiental = $this->manejoAmbientalRepository->findWithoutFail($id);

        if (empty($manejoAmbiental)) {
            Flash::error('Manejo Ambiental not found');

            return redirect(route('manejoAmbientals.index'));
        }

        return view('manejo_ambientals.edit')->with('manejoAmbiental', $manejoAmbiental);
    }

    /**
     * Update the specified ManejoAmbiental in storage.
     *
     * @param  int              $id
     * @param UpdateManejoAmbientalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateManejoAmbientalRequest $request)
    {
        $manejoAmbiental = $this->manejoAmbientalRepository->findWithoutFail($id);

        if (empty($manejoAmbiental)) {
            Flash::error('Manejo Ambiental not found');

            return redirect(route('manejoAmbientals.index'));
        }

        $manejoAmbiental = $this->manejoAmbientalRepository->update($request->all(), $id);

        Flash::success('Manejo Ambiental updated successfully.');

        return redirect(route('manejoAmbientals.index'));
    }

    /**
     * Remove the specified ManejoAmbiental from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $manejoAmbiental = $this->manejoAmbientalRepository->findWithoutFail($id);

        if (empty($manejoAmbiental)) {
            Flash::error('Manejo Ambiental not found');

            return redirect(route('manejoAmbientals.index'));
        }

        $this->manejoAmbientalRepository->delete($id);

        Flash::success('Manejo Ambiental deleted successfully.');

        return redirect(route('manejoAmbientals.index'));
    }
}
