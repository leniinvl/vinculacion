<?php
namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTallerRequest;
use App\Http\Requests\UpdateTallerRequest;
use App\Models\Taller;
use App\Models\unidadproduccion;
use App\Repositories\TallerRepository;
use Flash;
use Validator;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
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
        $unidadproducion = unidadproduccion::all()->pluck('nombre', 'id');
        return view('tallers.create', [
            'unidadproduccion' => $unidadproducion,
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

        $base64Photo = null;
        if ($request->hasFile('file')) {
            $this->validate($request, [
                'file' =>'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            ]);
            $image = $request->file('file');
            $extension = $image->getClientOriginalExtension();
                $im = file_get_contents($image);
                $data = base64_encode($im);
                $base64Photo = 'data:image/' . $extension . ';base64,' . $data;
        }
        else {
                $base64Photo = null;
            }

                $taller = new Taller();
                $taller->nombre = $request->get('nombre');
                $taller->descripcion = $request->get('descripcion');
                $taller->riesgo = $request->get('riesgo');
                $taller->imagen = $base64Photo;
                $taller->video = $request->get('video');
                $taller->UnidadProduccion_id = $request->get('UnidadProduccion_id');
                $taller->save();
                Flash::success('Guardado Satisfactoriamente.');
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
        $unidadproducion = unidadproduccion::all()->pluck('nombre', 'id');
        $taller          = $this->tallerRepository->findWithoutFail($id);
        if (empty($taller)) {
            Flash::error('Taller not found');
            return redirect(route('tallers.index'));
        }
        return view('tallers.show')->with('taller', $taller)->with('unidadproducion', $unidadproducion);
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
        $unidadproduccion = unidadproduccion::all()->pluck('nombre', 'id');
        $taller           = $this->tallerRepository->findWithoutFail($id);
        if (empty($taller)) {
            Flash::error('Taller not found');
            return redirect(route('tallers.index'));
        }
        return view('tallers.edit')->with('taller', $taller)->with('unidadproduccion', $unidadproduccion);
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
            Flash::error('Error al actualizar');
            return redirect(route('tallers.index'));
        }
        $base64Photo = null;
        if ($request->hasFile('file')) {
            $this->validate($request, [
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            ]);
            $image       = $request->file('file');
            $extension   = $image->getClientOriginalExtension();
            $im          = file_get_contents($image);
            $data        = base64_encode($im);
            $base64Photo = 'data:image/' . $extension . ';base64,' . $data;
        } else {
            $base64Photo = null;
        }
        if($base64Photo!=null)
            $request['imagen']=$base64Photo;
        else{
            $request['imagen']=$taller['imagen'];
        }
        $response= $this->tallerRepository->update($request->all(), $id);
        Flash::success('Actualizado Correctamente.');
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
            Flash::error('No se ha podido eliminar');
            return redirect(route('tallers.index'));
        }
        $this->tallerRepository->delete($id);
        Flash::success('Eliminado Correctamente.');
        return redirect(route('tallers.index'));
    }
    public function tallerHTMLPDF(Request $request)
    {
        $productos = $this->tallerRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('tallers',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaTalleres',compact('productos'));//CARGO LA VISTA
            return $pdf->download('Taller.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('taller-pdf');//RETORNO A MI VISTA
    }
}
