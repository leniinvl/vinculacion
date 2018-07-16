<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesechoRequest;
use App\Http\Requests\UpdateDesechoRequest;
use App\Models\Biodigestor;
use App\Models\Desecho;
use App\Models\TipoDesecho;
use App\Repositories\DesechoRepository;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
class DesechoController extends AppBaseController
{
    /** @var  DesechoRepository */
    private $desechoRepository;

    public function __construct(DesechoRepository $desechoRepo)
    {
        $this->desechoRepository = $desechoRepo;
    }

    /**
     * Display a listing of the Desecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $biodigestor = Biodigestor::all()->pluck('ubicacion', 'id');
        $this->desechoRepository->pushCriteria(new RequestCriteria($request));
        $desechos = Desecho::name($request->get('name'))->date($request->get('date1'))->date1($request->get('date2'))->orderBy('id', 'DESC')->paginate();

        return view('desechos.index')
            ->with('desechos', $desechos)->with('biodigestor', $biodigestor)->with('chart',$this->createChart($desechos));
    }

    /**
     * Show the form for creating a new Desecho.
     *
     * @return Response
     */
    public function create()
    {

        $biodigestor = Biodigestor::all()->pluck('ubicacion', 'id');
        $tipodesecho = TipoDesecho::all()->pluck('nombre', 'id');
        return view('desechos.create', ['biodigestor' => $biodigestor], ['tipodesecho' => $tipodesecho]);
    }

    /**
     * Store a newly created Desecho in storage.
     *
     * @param CreateDesechoRequest $request
     *
     * @return Response
     */
    public function store(CreateDesechoRequest $request)
    {
        $input = $request->all();

        $desecho = $this->desechoRepository->create($input);

        Flash::success('Desecho
guardado exitosamente.');

        return redirect(route('desechos.index'));
    }

    /**
     * Display the specified Desecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        return view('desechos.show')->with('desecho', $desecho);
    }

    /**
     * Show the form for editing the specified Desecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desecho     = $this->desechoRepository->findWithoutFail($id);
        $biodigestor = Biodigestor::all()->pluck('ubicacion', 'id');
        $tipodesecho = TipoDesecho::all()->pluck('nombre', 'id');

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        return view('desechos.edit')->with('desecho', $desecho)->with('biodigestor', $biodigestor)->with('tipodesecho', $tipodesecho);
    }

    /**
     * Update the specified Desecho in storage.
     *
     * @param  int              $id
     * @param UpdateDesechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesechoRequest $request)
    {
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        $desecho = $this->desechoRepository->update($request->all(), $id);

        Flash::success('Desecho updated successfully.');

        return redirect(route('desechos.index'));
    }

    /**
     * Remove the specified Desecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        $this->desechoRepository->delete($id);

        Flash::success('Desecho deleted successfully.');

        return redirect(route('desechos.index'));
    }
    public function desechosHTMLPDF(Request $request)
    {
        $productos = $this->desechoRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('desechos',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaDesechos',compact('productos'));//CARGO LA VISTA
            return $pdf->stream('Desechos.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('desechos-pdf');//RETORNO A MI VISTA
    }

    public function createChart($desechos) {
//dd($desechos);

        $preprocessedDataset = $desechos->sortBy('fecha');
        $preprocessedDataset = $preprocessedDataset->filter(function ($item) {
            return $item->fecha->diffInMonths(Carbon::now()) <= 12;
        });
        $dataset = collect();
        foreach ($preprocessedDataset as $desecho) {
            $temp = [
                'peso' => (float)$desecho->peso,
                'fecha' => Carbon::parse($desecho->fecha)->format('M-Y') ,
                'ubicacion' => $desecho->biodigestor->ubicacion
            ];
            $dataset->push($temp);
        }
        $dataset = $dataset->groupBy('ubicacion');
        $dataset = $dataset->map(function ($item) {
            return $item->groupBy('fecha')->map(function ($item2){
                return $item2->sum('peso');
            });
        });
        $labels = $dataset->collapse()->toArray();
        $labels = array_fill_keys(array_keys($labels), 0);

        $dataset = $dataset->toArray();

        $chart = new DefaultChart;
        foreach ($dataset as $key => $item) {
            $chart->dataset($key, 'column', array_values(array_merge($labels,$item)));
        }
        $chart->labels(array_keys($labels));
        $chart->title('Total de Desechos Generados por Ubicación');
        $chart->label("Cantidad de Desechos (Kg)");
        return $chart;
    }

}
