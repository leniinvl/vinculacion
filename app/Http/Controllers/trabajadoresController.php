<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabajadoresRequest;
use App\Http\Requests\UpdateTrabajadoresRequest;
use App\Repositories\TrabajadoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Pais;
use App\Models\Ciudad;
use App\Models\PlandeGestiondeRiesgos;
use App\Models\Genero;

class TrabajadoresController extends AppBaseController
{
    /** @var  TrabajadoresRepository */
    private $trabajadoresRepository;

    public function __construct(TrabajadoresRepository $trabajadoresRepo)
    {
        $this->trabajadoresRepository = $trabajadoresRepo;
    }

    /**
     * Display a listing of the Trabajadores.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajadoresRepository->pushCriteria(new RequestCriteria($request));
        $trabajadores = $this->trabajadoresRepository->all();

        return view('trabajadores.index')
            ->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for creating a new Trabajadores.
     *
     * @return Response
     */
    public function create()
    {
        $paises = Pais::all()->pluck('nombre', 'id');
        $ciudades = Ciudad::all()->pluck('nombre', 'id');
        $plandegestionderiesgos = PlandeGestiondeRiesgos::all()->pluck('nombre', 'id');
        $generos = Genero::all()->pluck('nombre', 'id');
        return view('trabajadores.create', ['generos' => $generos,'ciudades' => $ciudades,'paises' => $paises,'plandegestionderiesgos' => $plandegestionderiesgos]);
    }

    /**
     * Store a newly created Trabajadores in storage.
     *
     * @param CreateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabajadoresRequest $request)
    {
        $input = $request->all();

        $trabajadores = $this->trabajadoresRepository->create($input);

        Flash::success('Trabajadores saved successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Display the specified Trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.show')->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for editing the specified Trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paises = Pais::all()->pluck('nombre', 'id');
        $ciudades = Ciudad::all()->pluck('nombre', 'id');
        $plandegestionderiesgos = PlandeGestiondeRiesgos::all()->pluck('nombre', 'id');
        $generos = Genero::all()->pluck('nombre', 'id');
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

            return view('trabajadores.edit')->with('trabajadores', $trabajadores)->with('paises', $paises)->with('ciudades', $ciudades)->with('planDeGestionDeRiesgos', $plandegestionderiesgos)->with('generos', $generos);
    }

    /**
     * Update the specified Trabajadores in storage.
     *
     * @param  int              $id
     * @param UpdateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabajadoresRequest $request)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $trabajadores = $this->trabajadoresRepository->update($request->all(), $id);

        Flash::success('Trabajadores updated successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Remove the specified Trabajadores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $this->trabajadoresRepository->delete($id);

        Flash::success('Trabajadores deleted successfully.');

        return redirect(route('trabajadores.index'));
    }
}
