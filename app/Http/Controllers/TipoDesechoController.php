<?php

namespace App\Http\Controllers;


use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipodesechoRequest;
use App\Http\Requests\UpdateTipodesechoRequest;
use App\Repositories\TipodesechoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipodesechoController extends AppBaseController
{
    /** @var  TipodesechoRepository */
    private $tipodesechoRepository;

    public function __construct(TipodesechoRepository $tipodesechoRepo)
    {
        $this->tipodesechoRepository = $tipodesechoRepo;
    }

    /**
     * Display a listing of the Tipodesecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipodesechoRepository->pushCriteria(new RequestCriteria($request));
        $tipodesechos = $this->tipodesechoRepository->all();

        return view('tipodesechos.index')
            ->with('tipodesechos', $tipodesechos)
            ->with('chart',$this->createChart($tipodesechos));
    }

    /**
     * Show the form for creating a new Tipodesecho.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipodesechos.create');
    }

    /**
     * Store a newly created Tipodesecho in storage.
     *
     * @param CreateTipodesechoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipodesechoRequest $request)
    {
        $input = $request->all();

        $tipodesecho = $this->tipodesechoRepository->create($input);

        Flash::success('Tipodesecho
guardado exitosamente.');

        return redirect(route('tipodesechos.index'));
    }

    /**
     * Display the specified Tipodesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        return view('tipodesechos.show')->with('tipodesecho', $tipodesecho);
    }

    /**
     * Show the form for editing the specified Tipodesecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        return view('tipodesechos.edit')->with('tipodesecho', $tipodesecho);
    }

    /**
     * Update the specified Tipodesecho in storage.
     *
     * @param  int              $id
     * @param UpdateTipodesechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipodesechoRequest $request)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        $tipodesecho = $this->tipodesechoRepository->update($request->all(), $id);

        Flash::success('Tipodesecho updated successfully.');

        return redirect(route('tipodesechos.index'));
    }

    /**
     * Remove the specified Tipodesecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipodesecho = $this->tipodesechoRepository->findWithoutFail($id);

        if (empty($tipodesecho)) {
            Flash::error('Tipodesecho not found');

            return redirect(route('tipodesechos.index'));
        }

        $this->tipodesechoRepository->delete($id);

        Flash::success('Tipodesecho deleted successfully.');

        return redirect(route('tipodesechos.index'));
    }

    public function createChart($tipodesechos) {

      $preprocessedDataset = $tipodesechos->sortBy('nombre');

      $dataset = collect();
      foreach ($preprocessedDataset as $tipodesecho) {
        $temp = [
          'nombre' => (string)$tipodesecho->nombre,
          'descripcion' =>(string) $tipodesecho->descripcion
        ];
        $dataset->push($temp);
      }
      $dataset = $dataset->groupBy('nombre');
      $dataset = $dataset->map(function ($item) {
        return $item->groupBy('descripcion')->map(function ($item2){
          return $item2->count('nombre');
        });
      });

      $labels = $dataset->collapse()->toArray();
      $dataset = $dataset->toArray();
      $labels = array_fill_keys(array_keys($labels), 0);
      $chart = new DefaultChart;
      foreach ($dataset as $key => $item) {
        $chart->dataset($key, 'area', array_values(array_merge($labels,$item)));
      }
      $chart->labels(array_keys($labels));
      $chart->title('Tipos de desechos');
      $chart->label("Cantidad");
      return $chart;
    }
}
