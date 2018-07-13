<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesechotRequest;
use App\Http\Requests\UpdateDesechotRequest;
use App\Models\Taller;
use App\Models\TipoDesechot;
use App\Repositories\DesechotRepository;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

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
        $tipodesechot = TipoDesechot::all()->pluck('nombre', 'id');
        $this->desechotRepository->pushCriteria(new RequestCriteria($request));
        $desechots = $this->desechotRepository->all();

        return view('desechots.index')
            ->with('desechots', $desechots)
            ->with('tipodesechot', $tipodesechot)
            ->with('chart',$this->createChart($desechots));
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

    public function createChart($desechos) {
        $preprocessedDataset = $desechos->sortBy('fecha');
        $preprocessedDataset = $preprocessedDataset->filter(function ($item) {
            return $item->fecha->diffInMonths(Carbon::now()) <= 12;
        });

        $dataset = collect();
        foreach ($preprocessedDataset as $desecho) {
            $temp = [
                'peso' => (float)$desecho->peso,
                'fecha' => Carbon::parse($desecho->fecha)->format('M-Y') ,
                'taller' => $desecho->taller->nombre
            ];
            $dataset->push($temp);
        }
        $dataset = $dataset->groupBy('taller');
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
        $chart->title('Total de Desechos Generados por Taller en los Últimos 12 Meses');
        $chart->label("Cantidad de Desechos (Kg)");
        return $chart;
    }
}
