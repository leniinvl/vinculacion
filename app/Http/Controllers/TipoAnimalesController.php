<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoAnimalesRequest;
use App\Http\Requests\UpdateTipoAnimalesRequest;
use App\Repositories\TipoAnimalesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\tipoproduccion;
use App\Models\tipounidad;
use App\Models\destino;
use App\Models\precuaria;

class TipoAnimalesController extends AppBaseController
{
    /** @var  TipoAnimalesRepository */
    private $tipoAnimalesRepository;

    public function __construct(TipoAnimalesRepository $tipoAnimalesRepo)
    {
        $this->tipoAnimalesRepository = $tipoAnimalesRepo;
    }

    /**
     * Display a listing of the TipoAnimales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoAnimalesRepository->pushCriteria(new RequestCriteria($request));
        $tipoAnimales = $this->tipoAnimalesRepository->all();

        return view('tipo_animales.index')
            ->with('tipoAnimales', $tipoAnimales);
    }

    /**
     * Show the form for creating a new TipoAnimales.
     *
     * @return Response
     */
    public function create()
    {
        $tipoproduccion=tipoproduccion::all()->pluck('nombre','id');
          $tipounidad=tipounidad::all()->pluck('nombre','id');
          $destino=destino::all()->pluck('nombre','id');
          $precuaria=precuaria::all()->pluck('nombre','id');
        return view('tipo_animales.create',['tipoproduccion'=>$tipoproduccion,'tipounidad'=>$tipounidad,
      'destino'=>$destino,'precuaria'=>$precuaria]);





    }

    /**
     * Store a newly created TipoAnimales in storage.
     *
     * @param CreateTipoAnimalesRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAnimalesRequest $request)
    {
        $input = $request->all();

        $tipoAnimales = $this->tipoAnimalesRepository->create($input);

        Flash::success('Tipo Animales saved successfully.');

        return redirect(route('tipoAnimales.index'));
    }

    /**
     * Display the specified TipoAnimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAnimales = $this->tipoAnimalesRepository->findWithoutFail($id);

        if (empty($tipoAnimales)) {
            Flash::error('Tipo Animales not found');

            return redirect(route('tipoAnimales.index'));
        }

        return view('tipo_animales.show')->with('tipoAnimales', $tipoAnimales);
    }

    /**
     * Show the form for editing the specified TipoAnimales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoproduccion=tipoproduccion::all()->pluck('nombre','id');
        $tipounidad=tipounidad::all()->pluck('nombre','id');
        $destino=destino::all()->pluck('nombre','id');
        $precuaria=precuaria::all()->pluck('nombre','id');



        $tipoAnimales = $this->tipoAnimalesRepository->findWithoutFail($id);

        if (empty($tipoAnimales)) {
            Flash::error('Tipo Animales not found');

            return redirect(route('tipoAnimales.index'));
        }

        return view('tipo_animales.edit')->with('tipoAnimales', $tipoAnimales)->with('tipoproduccion',$tipoproduccion)
        ->with('tipounidad',$tipounidad)->with('destino',$destino)->with('precuaria',$precuaria);

    }

    /**
     * Update the specified TipoAnimales in storage.
     *
     * @param  int              $id
     * @param UpdateTipoAnimalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAnimalesRequest $request)
    {
        $tipoAnimales = $this->tipoAnimalesRepository->findWithoutFail($id);

        if (empty($tipoAnimales)) {
            Flash::error('Tipo Animales not found');

            return redirect(route('tipoAnimales.index'));
        }

        $tipoAnimales = $this->tipoAnimalesRepository->update($request->all(), $id);

        Flash::success('Tipo Animales updated successfully.');

        return redirect(route('tipoAnimales.index'));
    }

    /**
     * Remove the specified TipoAnimales from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAnimales = $this->tipoAnimalesRepository->findWithoutFail($id);

        if (empty($tipoAnimales)) {
            Flash::error('Tipo Animales not found');

            return redirect(route('tipoAnimales.index'));
        }

        $this->tipoAnimalesRepository->delete($id);

        Flash::success('Tipo Animales deleted successfully.');

        return redirect(route('tipoAnimales.index'));
    }
}
