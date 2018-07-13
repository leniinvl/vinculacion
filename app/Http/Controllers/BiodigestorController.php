<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateBiodigestorRequest;
use App\Http\Requests\UpdateBiodigestorRequest;
use App\Models\Biodigestor;
use App\Models\unidadproduccion;
use App\Repositories\BiodigestorRepository;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;

class BiodigestorController extends AppBaseController
{
    /** @var  BiodigestorRepository */
    private $biodigestorRepository;

    public function __construct(BiodigestorRepository $biodigestorRepo)
    {
        $this->biodigestorRepository = $biodigestorRepo;
    }

    /**
     * Display a listing of the Biodigestor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->biodigestorRepository->pushCriteria(new RequestCriteria($request));
        $biodigestors = $this->biodigestorRepository->all();

        return view('biodigestors.index')
            ->with('biodigestors', $biodigestors);
    }

    /**
     * Show the form for creating a new Biodigestor.
     *
     * @return Response
     */
    public function create()
    {
        $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        return view('biodigestors.create', [
            'unidadproduccion' => $unidadproduccion,
        ]);
    }

    /**
     * Store a newly created Biodigestor in storage.
     *
     * @param CreateBiodigestorRequest $request
     *
     * @return Response
     */
    public function store(CreateBiodigestorRequest $request)
    {

        if (!Input::file("imagen")) {
            $biodigestor                      = new Biodigestor();
            $biodigestor->ubicacion           = $request->get('ubicacion');
            $biodigestor->tamañoPropiedad    = $request->get('tamañoPropiedad');
            $biodigestor->video               = $request->get('video');
            $biodigestor->anchoBio            = $request->get('anchoBio');
            $biodigestor->largoBio            = $request->get('largoBio');
            $biodigestor->profundBio          = $request->get('profundBio');
            $biodigestor->anchoCaja           = $request->get('anchoCaja');
            $biodigestor->largoCaja           = $request->get('largoCaja');
            $biodigestor->profundCaja         = $request->get('profundCaja');
            $biodigestor->temperatura         = $request->get('temperatura');
            $biodigestor->UnidadProduccion_id = $request->get('UnidadProduccion_id');
            $biodigestor->imagen              = "";
            $biodigestor->save();
        }
        else{
             $biodigestor                      = new Biodigestor();
            $biodigestor->ubicacion           = $request->get('ubicacion');
            $biodigestor->tamañoPropiedad    = $request->get('tamañoPropiedad');
            $biodigestor->video               = $request->get('video');
            $biodigestor->anchoBio            = $request->get('anchoBio');
            $biodigestor->largoBio            = $request->get('largoBio');
            $biodigestor->profundBio          = $request->get('profundBio');
            $biodigestor->anchoCaja           = $request->get('anchoCaja');
            $biodigestor->largoCaja           = $request->get('largoCaja');
            $biodigestor->profundCaja         = $request->get('profundCaja');
            $biodigestor->temperatura         = $request->get('temperatura');
            $biodigestor->UnidadProduccion_id = $request->get('UnidadProduccion_id');
            $biodigestor->imagen              = $request->imagen->store('public/imagenes');
            $biodigestor->save();
           
        }
        Flash::success('Biodigestor guardado exitosamente.');

        return redirect(route('biodigestors.index'));
    }

    /**
     * Display the specified Biodigestor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        return view('biodigestors.show')->with('biodigestor', $biodigestor);
    }

    /**
     * Show the form for editing the specified Biodigestor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {


        $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        $biodigestor      = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        return view('biodigestors.edit')->with('biodigestor', $biodigestor)->with('unidadproduccion', $unidadproduccion);
         is_null($biodigestor->imagen);
    }

    /**
     * Update the specified Biodigestor in storage.
     *
     * @param  int              $id
     * @param UpdateBiodigestorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBiodigestorRequest $request)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        if (!Input::file("imagen")) {
            $biodigestor->ubicacion           = $request->get('ubicacion');
            $biodigestor->tamañoPropiedad    = $request->get('tamañoPropiedad');
            $biodigestor->video               = $request->get('video');
            $biodigestor->anchoBio            = $request->get('anchoBio');
            $biodigestor->largoBio            = $request->get('largoBio');
            $biodigestor->profundBio          = $request->get('profundBio');
            $biodigestor->anchoCaja           = $request->get('anchoCaja');
            $biodigestor->largoCaja           = $request->get('largoCaja');
            $biodigestor->profundCaja         = $request->get('profundCaja');
            $biodigestor->temperatura         = $request->get('temperatura');
            $biodigestor->UnidadProduccion_id = $request->get('UnidadProduccion_id');
            $biodigestor->update();
        }
        else{
            \Storage::delete($biodigestor->imagen);
            $biodigestor->ubicacion           = $request->get('ubicacion');
            $biodigestor->tamañoPropiedad    = $request->get('tamañoPropiedad');
            $biodigestor->video               = $request->get('video');
            $biodigestor->anchoBio            = $request->get('anchoBio');
            $biodigestor->largoBio            = $request->get('largoBio');
            $biodigestor->profundBio          = $request->get('profundBio');
            $biodigestor->anchoCaja           = $request->get('anchoCaja');
            $biodigestor->largoCaja           = $request->get('largoCaja');
            $biodigestor->profundCaja         = $request->get('profundCaja');
            $biodigestor->temperatura         = $request->get('temperatura');
            $biodigestor->UnidadProduccion_id = $request->get('UnidadProduccion_id');
            $biodigestor->imagen              = $request->imagen->store('public/imagenes');
            $biodigestor->update();


        }
        return redirect(route('biodigestors.index'));
    }

    /**
     * Remove the specified Biodigestor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        $this->biodigestorRepository->delete($id);

        Flash::success('Biodigestor deleted successfully.');

        return redirect(route('biodigestors.index'));
    }
	public function biodigestorHTMLPDF(Request $request)
    {
		$productos = $this->biodigestorRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('biodigestors',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
			$pdf = PDF::loadView('pdf.tablaBiodigestor',compact('productos'))->setPaper('a4', 'landscape');//CARGO LA VISTA
			return $pdf->download('Biodigestor.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('biodigestor-pdf');//RETORNO A MI VISTA
    }
}
