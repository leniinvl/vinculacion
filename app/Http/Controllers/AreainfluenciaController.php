<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateAreaInfluenciaRequest;
use App\Http\Requests\UpdateAreaInfluenciaRequest;
use App\Repositories\AreaInfluenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\CondicionesDrenaje;
use App\Models\TipoVegetal;
use App\Models\Religion;
use App\Models\Lenguaje;
use App\Models\Areainfluencia;
use App\Models\ManejoAmbiental;
use App\Models\PermeabilidadSuelo;
use App\Models\UsoSuelo;
use App\Models\CaracteristicasEtnicas;
use App\Models\TipoSuelo;
use App\Models\Clima;
use App\Models\Ecosistema;


class AreaInfluenciaController extends AppBaseController
{
  /** @var  AreaInfluenciaRepository */
  private $areaInfluenciaRepository;
  public function __construct(AreaInfluenciaRepository $areaInfluenciaRepo)
  {
    $this->areaInfluenciaRepository = $areaInfluenciaRepo;
  }
  /**
  * Display a listing of the AreaInfluencia.
  *
  * @param Request $request
  * @return Response
  */
  public function index(Request $request)
  {
    $this->areaInfluenciaRepository->pushCriteria(new RequestCriteria($request));
    $areaInfluencias = $this->areaInfluenciaRepository->all();
    return view('area_influencias.index')
    ->with('areaInfluencias', $areaInfluencias);
  }
  /**
  * Show the form for creating a new AreaInfluencia.
  *
  * @return Response
  */
  public function create()
  {
    $condicionesdrenaje=CondicionesDrenaje::all()->pluck('nombre','id');
    $manejoambiental=ManejoAmbiental::all()->pluck('nombre','id');
    $permeabilidadsuelo=PermeabilidadSuelo::all()->pluck('nombre','id');
    $usosuelo=UsoSuelo::all()->pluck('nombre','id');
    $caracteristicasetnicas=CaracteristicasEtnicas::all()->pluck('nombre','id');
    $tiposuelo=TipoSuelo::all()->pluck('nombre','id');
    $clima=Clima::all()->pluck('nombre','id');
    $ecosistema=Ecosistema::all()->pluck('nombre','id');
    return view('area_influencias.create')->with('condicionesdrenaje', $condicionesdrenaje)->with('permeabilidadsuelo', $permeabilidadsuelo)->with('usosuelo', $usosuelo)->with('caracteristicasetnicas', $caracteristicasetnicas)  ->with('tiposuelo', $tiposuelo)->with('clima', $clima)->with('ecosistema', $ecosistema)->with('manejoambiental', $manejoambiental);
  }
  /**
  * Store a newly created AreaInfluencia in storage.
  *
  * @param CreateAreaInfluenciaRequest $request
  *
  * @return Response
  */
  public function store(CreateAreaInfluenciaRequest $request)
  {
    $input = $request->all();
    $areaInfluencia = $this->areaInfluenciaRepository->create($input);
    Flash::success('Area Influencia saved successfully.');
    return redirect(route('areaInfluencias.index'));
  }
  /**
  * Display the specified AreaInfluencia.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function show($id)
  {
    $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);
    $tipovegetal = TipoVegetal::all()->pluck('nombre_comun', 'id');
    $religion = Religion::all()->pluck('nombre', 'id');
    $lenguaje = Lenguaje::all()->pluck('nombre', 'id');
    if (empty($areaInfluencia)) {
      Flash::error('Area Influencia not found');
      return redirect(route('areaInfluencias.index'));
    }
    return view('area_influencias.show')->with('areaInfluencia', $areaInfluencia)->with('tipovegetal', $tipovegetal)->with('religion', $religion)
    ->with('lenguaje', $lenguaje);
  }
  /**
  * Show the form for editing the specified AreaInfluencia.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function edit($id)
  {
    $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);
    $condicionesdrenaje=CondicionesDrenaje::all()->pluck('nombre','id');
    $manejoambiental=ManejoAmbiental::all()->pluck('nombre','id');
    $permeabilidadsuelo=PermeabilidadSuelo::all()->pluck('nombre','id');
    $usosuelo=UsoSuelo::all()->pluck('nombre','id');
    $caracteristicasetnicas=CaracteristicasEtnicas::all()->pluck('nombre','id');
    $tiposuelo=TipoSuelo::all()->pluck('nombre','id');
    $clima=Clima::all()->pluck('nombre','id');
    $ecosistema=Ecosistema::all()->pluck('nombre','id');

    if (empty($areaInfluencia)) {
      Flash::error('Area Influencia not found');
      return redirect(route('areaInfluencias.index'));
    }

    return view('area_influencias.edit')->with('areaInfluencia', $areaInfluencia)->with('condicionesdrenaje', $condicionesdrenaje)->with('permeabilidadsuelo', $permeabilidadsuelo)->with('usosuelo', $usosuelo)->with('caracteristicasetnicas', $caracteristicasetnicas)->with('tiposuelo', $tiposuelo)->with('clima', $clima)->with('ecosistema', $ecosistema)->with('manejoambiental', $manejoambiental);

  }
  /**
  * Update the specified AreaInfluencia in storage.
  *
  * @param  int              $id
  * @param UpdateAreaInfluenciaRequest $request
  *
  * @return Response
  */
  public function update($id, UpdateAreaInfluenciaRequest $request)
  {
    $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);
    if (empty($areaInfluencia)) {
      Flash::error('Area Influencia not found');
      return redirect(route('areaInfluencias.index'));
    }
    $areaInfluencia = $this->areaInfluenciaRepository->update($request->all(), $id);
    Flash::success('Area Influencia updated successfully.');
    return redirect(route('areaInfluencias.index'));
  }
  /**
  * Remove the specified AreaInfluencia from storage.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function destroy($id)
  {
    $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);
    if (empty($areaInfluencia)) {
      Flash::error('Area Influencia not found');
      return redirect(route('areaInfluencias.index'));
    }
    $this->areaInfluenciaRepository->delete($id);
    Flash::success('Area Influencia deleted successfully.');
    return redirect(route('areaInfluencias.index'));
  }
  public function storeTipoVegetal(Request $request, $idareainfluencia)
  {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->tipoVegetals()->attach($request->TipoVegetal_id);
    Flash::success('Areainfluencia  Has  Tipo Vegetal saved successfully.');
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function destroyTipoVegetal($idareainfluencia, $id)
  {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->tipoVegetals()->detach($id);
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function storeReligion(Request $request, $idareainfluencia)
  {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->religions()->attach($request->Religion_id);
    Flash::success('Areainfluencia  Has  Religion saved successfully.');
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function destroyReligion($idareainfluencia, $id)
  {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->religions()->detach($id);
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function storeLenguaje(Request $request, $idareainfluencia)
  {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->lenguajes()->attach($request->Lenguaje_id);
    Flash::success('Areainfluencia  Has  Lenguaje saved successfully.');
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function destroyLenguaje($idareainfluencia, $id)
  {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->lenguajes()->detach($id);
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function areaInfluenciasHTMLPDF(Request $request)
  {
    $productos = $this->areaInfluenciaRepository->all();//OBTENGO TODOS MIS PRODUCTO
    view()->share('areaInfluencias',$productos);//VARIABLE GLOBAL PRODUCTOS
    if($request->has('descargar')){
      $pdf = PDF::loadView('pdf.tablaInfluencias',compact('productos'));//CARGO LA VISTA
      return $pdf->stream('areaInfluencias.pdf');//SUGERIR NOMBRE A DESCARGAR
    }
    return view('areaInfluencias-pdf');//RETORNO A MI VISTA
  }
}
