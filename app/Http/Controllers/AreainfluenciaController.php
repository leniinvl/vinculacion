<?php
namespace App\Http\Controllers;
use App\Charts\DefaultChart;

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


class AreaInfluenciaController extends AppBaseController {
  /** @var  AreaInfluenciaRepository */
  private $areaInfluenciaRepository;
  public function __construct(AreaInfluenciaRepository $areaInfluenciaRepo) {
    $this->areaInfluenciaRepository = $areaInfluenciaRepo;
  }
  /**
  * Display a listing of the AreaInfluencia.
  *
  * @param Request $request
  * @return Response
  */
  public function index(Request $request) {
    $this->areaInfluenciaRepository->pushCriteria(new RequestCriteria($request));
    $areaInfluencias = $this->areaInfluenciaRepository->all();  
    return view('area_influencias.index')
            ->with('areaInfluencias', $areaInfluencias)
            ->with('chart',$this->createChart($areaInfluencias))
            ->with('chart2',$this->createChart2($areaInfluencias))
            ->with('chart3',$this->createChart3($areaInfluencias))
            ->with('chart4',$this->createChart4($areaInfluencias))
            ->with('chart5',$this->createChart5($areaInfluencias));
  }
  /**
  * Show the form for creating a new AreaInfluencia.
  *
  * @return Response
  */
  public function create() {
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
  public function store(CreateAreaInfluenciaRequest $request) {
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
  public function show($id) {
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
  public function edit($id) {
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
  public function update($id, UpdateAreaInfluenciaRequest $request) {
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
  public function destroy($id) {
    $areaInfluencia = $this->areaInfluenciaRepository->findWithoutFail($id);
    if (empty($areaInfluencia)) {
      Flash::error('Area Influencia not found');
      return redirect(route('areaInfluencias.index'));
    }
    $this->areaInfluenciaRepository->delete($id);
    Flash::success('Area Influencia deleted successfully.');
    return redirect(route('areaInfluencias.index'));
  }
  public function storeTipoVegetal(Request $request, $idareainfluencia) {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->tipoVegetals()->attach($request->TipoVegetal_id);
    Flash::success('Areainfluencia  Has  Tipo Vegetal saved successfully.');
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function destroyTipoVegetal($idareainfluencia, $id) {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->tipoVegetals()->detach($id);
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function storeReligion(Request $request, $idareainfluencia) {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->religions()->attach($request->Religion_id);
    Flash::success('Areainfluencia  Has  Religion saved successfully.');
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function destroyReligion($idareainfluencia, $id) {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->religions()->detach($id);
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function storeLenguaje(Request $request, $idareainfluencia)   {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->lenguajes()->attach($request->Lenguaje_id);
    Flash::success('Areainfluencia  Has  Lenguaje saved successfully.');
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }
  public function destroyLenguaje($idareainfluencia, $id) {
    $areainfluencia = AreaInfluencia::find($idareainfluencia);
    $areainfluencia->lenguajes()->detach($id);
    return redirect(url('areainfluencias/' . $areainfluencia->id));
  }

  public function areaInfluenciasHTMLPDF(Request $request) {
    $productos = $this->areaInfluenciaRepository->all();//OBTENGO TODOS MIS PRODUCTO
    view()->share('areaInfluencias',$productos);//VARIABLE GLOBAL PRODUCTOS
    if($request->has('descargar')){
      $pdf = PDF::loadView('pdf.tablaInfluencias',compact('productos'))->setPaper('a4', 'landscape');//CARGO LA VISTA
      return $pdf->stream('areaInfluencias.pdf');//SUGERIR NOMBRE A DESCARGAR
    }
    return view('areaInfluencias-pdf');//RETORNO A MI VISTA
  }



    public function createChart($areaInfluencias) {

      $preprocessedDataset = $areaInfluencias->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $areainfluencias) {
        $temp = [
          'nombre' => (string)$areainfluencias->manejoambiental->nombre,
          'tipoTerrenoDescripcion' =>(string) $areainfluencias->tipoTerrenoDescripcion,
          'TipoSuelo_id' =>(string)$areainfluencias->tiposuelo->nombre
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('nombre');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('TipoSuelo_id')->map(function ($item2){
          return $item2->count('tipoTerrenoDescripcion');
        });
      });
      $labels = $dataset->collapse()->toArray();
      $dataset = $dataset->toArray();
      $labels = array_fill_keys(array_keys($labels), 0);
      $chart = new DefaultChart;
      foreach ($dataset as $key => $item) {
        $chart->dataset($key, 'column', array_values(array_merge($labels,$item)));
      }
      $chart->labels(array_keys($labels));
      $chart->title('Áreas de Influencia por Manejo Ambiental');
      $chart->label("Áreas Por Manejo Ambiental");
      return $chart;
    }

    public function createChart2($areaInfluencias) {

      $preprocessedDataset = $areaInfluencias->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $areainfluencias) {
        $temp = [
          'nombre' => (string)$areainfluencias->permeabilidadsuelo->nombre,
          'tipoTerrenoDescripcion' =>(string) $areainfluencias->tipoTerrenoDescripcion,
          'TipoSuelo_id' =>(string)$areainfluencias->tiposuelo->nombre
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('nombre');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('TipoSuelo_id')->map(function ($item2){
          return $item2->count('tipoTerrenoDescripcion');
        });
      });
      //dd($asociacions);
      $labels = $dataset->collapse()->toArray();
      $dataset = $dataset->toArray();
      $labels = array_fill_keys(array_keys($labels), 0);
      $chart2 = new DefaultChart;
      foreach ($dataset as $key => $item) {
        $chart2->dataset($key, 'column', array_values(array_merge($labels,$item)));
      }
      $chart2->labels(array_keys($labels));
      $chart2->title('Áreas de Influencia por Permeabilidad de Suelo');
      $chart2->label("Áreas Por Permeabilidad de Suelo");
      return $chart2;
    }

    public function createChart3($areaInfluencias) {

      $preprocessedDataset = $areaInfluencias->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $areainfluencias) {
        $temp = [
          'nombre' => (string)$areainfluencias->clima->nombre,
          'tipoTerrenoDescripcion' =>(string) $areainfluencias->tipoTerrenoDescripcion,
          'TipoSuelo_id' =>(string)$areainfluencias->tiposuelo->nombre
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('nombre');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('TipoSuelo_id')->map(function ($item2){
          return $item2->count('tipoTerrenoDescripcion');
        });
      });
      //dd($asociacions);
      $labels = $dataset->collapse()->toArray();
      $dataset = $dataset->toArray();
      $labels = array_fill_keys(array_keys($labels), 0);
      $chart3 = new DefaultChart;
      foreach ($dataset as $key => $item) {
        $chart3->dataset($key, 'column', array_values(array_merge($labels,$item)));
      }
      $chart3->labels(array_keys($labels));
      $chart3->title('Áreas de Influencia por Clima');
      $chart3->label("Áreas Por Clima");
      return $chart3;
    }
    
    public function createChart4($areaInfluencias) {

      $preprocessedDataset = $areaInfluencias->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $areainfluencias) {
        $temp = [
          'nombre' => (string)$areainfluencias->condicionesdrenaje->nombre,
          'tipoTerrenoDescripcion' =>(string) $areainfluencias->tipoTerrenoDescripcion,
          'TipoSuelo_id' =>(string)$areainfluencias->tiposuelo->nombre
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('nombre');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('TipoSuelo_id')->map(function ($item2){
          return $item2->count('tipoTerrenoDescripcion');
        });
      });
      //dd($asociacions);
      $labels = $dataset->collapse()->toArray();
      $dataset = $dataset->toArray();
      $labels = array_fill_keys(array_keys($labels), 0);
      $chart4 = new DefaultChart;
      foreach ($dataset as $key => $item) {
        $chart4->dataset($key, 'column', array_values(array_merge($labels,$item)));
      }
      $chart4->labels(array_keys($labels));
      $chart4->title('Áreas de Influencia por Condiciones de Drenaje');
      $chart4->label("Áreas Por Condiciones de Drenaje");
      return $chart4;
    }
    
    public function createChart5($areaInfluencias) {

      $preprocessedDataset = $areaInfluencias->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $areainfluencias) {
        $temp = [
          'nombre' => (string)$areainfluencias->ecosistema->nombre,
          'tipoTerrenoDescripcion' =>(string) $areainfluencias->tipoTerrenoDescripcion,
          'TipoSuelo_id' =>(string)$areainfluencias->tiposuelo->nombre
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('nombre');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('TipoSuelo_id')->map(function ($item2){
          return $item2->count('tipoTerrenoDescripcion');
        });
      });
      //dd($asociacions);
      $labels = $dataset->collapse()->toArray();
      $dataset = $dataset->toArray();
      $labels = array_fill_keys(array_keys($labels), 0);
      $chart5 = new DefaultChart;
      foreach ($dataset as $key => $item) {
        $chart5->dataset($key, 'column', array_values(array_merge($labels,$item)));
      }
      $chart5->labels(array_keys($labels));
      $chart5->title('Áreas de Influencia por Ecosistema');
      $chart5->label("Áreas Por Ecosistema");
      return $chart5;
    }

}
