<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTallerRequest;
use App\Http\Requests\UpdateTallerRequest;
use App\Repositories\TallerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Unidadproduccion;
use App\Models\Taller;
use App\Models\TipoDesecho;
use App\Models\TipoRiesgos;

class TallerController extends AppBaseController
{
    /** @var  TallerRepository */
    private $tallerRepository;

    public function __construct(TallerRepository $tallerRepo)
    {
        $this->tallerRepository = $tallerRepo;
    }

    /**
     * Display a listing of the Taller.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tallerRepository->pushCriteria(new RequestCriteria($request));
        $tallers = $this->tallerRepository->all();

        return view('tallers.index')
            ->with('tallers', $tallers);
    }

    /**
     * Show the form for creating a new Taller.
     *
     * @return Response
     */
    public function create()
    {
      $unidadproduccion = Unidadproduccion::all()->pluck('nombre', 'id');
      return view('tallers.create', [
          'unidadproduccion' => $unidadproduccion
      ]);
    }

    /**
     * Store a newly created Taller in storage.
     *
     * @param CreateTallerRequest $request
     *
     * @return Response
     */
    public function store(CreateTallerRequest $request)
    {
        $input = $request->all();

        $taller = $this->tallerRepository->create($input);

        Flash::success('Taller saved successfully.');

        return redirect(route('tallers.index'));
    }

    /**
     * Display the specified Taller.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);
        $tipodesecho = TipoDesecho::all()->pluck('nombre', 'id');
        $tiporiesgos = TipoRiesgos::all()->pluck('nombre', 'id');

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        return view('tallers.show')->with('taller', $taller)->with('tipodesecho', $tipodesecho)->with('tiporiesgos', $tiporiesgos);
    }

    /**
     * Show the form for editing the specified Taller.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);
        $unidadproduccion = Unidadproduccion::all()->pluck('nombre', 'id');

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        return view('tallers.edit')->with('taller', $taller)
        ->with('unidadproduccion', $unidadproduccion);
    }

    /**
     * Update the specified Taller in storage.
     *
     * @param  int              $id
     * @param UpdateTallerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTallerRequest $request)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        $taller = $this->tallerRepository->update($request->all(), $id);

        Flash::success('Taller updated successfully.');

        return redirect(route('tallers.index'));
    }

    /**
     * Remove the specified Taller from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taller = $this->tallerRepository->findWithoutFail($id);

        if (empty($taller)) {
            Flash::error('Taller not found');

            return redirect(route('tallers.index'));
        }

        $this->tallerRepository->delete($id);

        Flash::success('Taller deleted successfully.');

        return redirect(route('tallers.index'));
    }


    public function storeTipoDesecho(Request $request, $idtaller)
    {
        $taller = Taller::find($idtaller);
        $taller->tipodesechos()->attach($request->TipoDesecho_id);

        Flash::success('Taller  Has  Tipo Desecho saved successfully.');

        return redirect(url('tallers/' . $taller->id));
    }

    public function destroyTipoDesecho($idtaller, $id)
    {

        $taller = Taller::find($idtaller);
        $taller->tipodesechos()->detach($id);
        return redirect(url('tallers/' . $taller->id));
    }


    public function storeTipoRiesgos(Request $request, $idtaller)
    {
        $taller = Taller::find($idtaller);
        $taller->tipoRiesgos()->attach($request->TipoRiesgos_id);

        Flash::success('Taller  Has  Tipo Riesgo saved successfully.');

        return redirect(url('tallers/' . $taller->id));
    }

    public function destroyTipoRiesgos($idtaller, $id)
    {
        $taller = Taller::find($idtaller);
        $taller->tipoRiesgos()->detach($id);
        return redirect(url('tallers/' . $taller->id));
    }
}
