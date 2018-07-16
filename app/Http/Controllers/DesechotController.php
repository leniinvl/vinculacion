<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesechotRequest;
use App\Http\Requests\UpdateDesechotRequest;
use App\Models\Taller;
use App\Models\TipoDesechot;
use App\Repositories\DesechotRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;

class DesechotController extends AppBaseController
{
    /** @var  DesechotRepository */
    private $desechotRepository;

    public function __construct(DesechotRepository $desechotRepo)
    {
        $this->desechotRepository = $desechotRepo;
    }

    /**
     * Display a listing of the Desechot.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->desechotRepository->pushCriteria(new RequestCriteria($request));
        $desechots = $this->desechotRepository->all();

        return view('desechots.index')
            ->with('desechots', $desechots);
    }

    /**
     * Show the form for creating a new Desechot.
     *
     * @return Response
     */
    public function create()
    {
        $taller       = Taller::all()->pluck('nombre', 'id');
        $tipodesechot = TipoDesechot::all()->pluck('nombre', 'id');
        return view('desechots.create', [
            'taller'       => $taller,
            'tipodesechot' => $tipodesechot,

        ]);
    }

    /**
     * Store a newly created Desechot in storage.
     *
     * @param CreateDesechotRequest $request
     *
     * @return Response
     */
    public function store(CreateDesechotRequest $request)
    {
        $input = $request->all();

        $desechot = $this->desechotRepository->create($input);

        Flash::success('Guardado exitosamente.');

        return redirect(route('desechots.index'));
    }

    /**
     * Display the specified Desechot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taller       = Taller::all()->pluck('nombre', 'id');
        $tipodesechot = TipoDesechot::all()->pluck('nombre', 'id');
        $desechot     = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('Desechot not found');

            return redirect(route('desechots.index'));
        }

        return view('desechots.show')->with('desechot', $desechot)->with('taller', $taller)->with('tipodesechot', $tipodesechot);
    }

    /**
     * Show the form for editing the specified Desechot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taller       = Taller::all()->pluck('nombre', 'id');
        $tipodesechot = TipoDesechot::all()->pluck('nombre', 'id');
        $desechot     = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('No se ha encontrado');

            return redirect(route('desechots.index'));
        }

        return view('desechots.edit')->with('desechot', $desechot)->with('taller', $taller)->with('tipodesechot', $tipodesechot);
    }

    /**
     * Update the specified Desechot in storage.
     *
     * @param  int              $id
     * @param UpdateDesechotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesechotRequest $request)
    {
        $desechot = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('No se ha encontrado');

            return redirect(route('desechots.index'));
        }

        $desechot = $this->desechotRepository->update($request->all(), $id);

        Flash::success('Actualizado exitosamente.');

        return redirect(route('desechots.index'));
    }

    /**
     * Remove the specified Desechot from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desechot = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('No se ha encontrado');

            return redirect(route('desechots.index'));
        }

        $this->desechotRepository->delete($id);

        Flash::success('Eliminado exitosamente.');

        return redirect(route('desechots.index'));
    }
    public function desechotsHTMLPDF(Request $request)
    {
        $productos = $this->desechotRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('desechots',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaDesechosT',compact('productos'));//CARGO LA VISTA
            return $pdf->stream('DesechosT.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('desechots-pdf');//RETORNO A MI VISTA
    }
}
