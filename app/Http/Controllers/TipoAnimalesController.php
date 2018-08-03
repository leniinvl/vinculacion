<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTipoAnimalesRequest;
use App\Http\Requests\UpdateTipoAnimalesRequest;
use App\Models\destino;
use App\Models\precuaria;
use App\Models\tipoproduccion;
use App\Models\tipounidad;
use App\Repositories\TipoAnimalesRepository;
use Barryvdh\DomPDF\Facade as PDF;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

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
            ->with('tipoAnimales', $tipoAnimales)
            ->with('chart', $this->createChart($tipoAnimales, $request->get('selectTipoAnimales')));
    }

    /**
     * Show the form for creating a new TipoAnimales.
     *
     * @return Response
     */
    public function create()
    {
        $tipoproduccion = tipoproduccion::all()->pluck('nombre', 'id');
        $tipounidad = tipounidad::all()->pluck('nombre', 'id');
        $destino = destino::all()->pluck('nombre', 'id');
        $precuaria = precuaria::all()->pluck('nombre', 'id');
        return view('tipo_animales.create', [
            'tipoproduccion' => $tipoproduccion,
            'tipounidad' => $tipounidad,
            'destino' => $destino,
            'precuaria' => $precuaria,
        ]);

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

        Flash::success('Tipo Animales guardado exitosamente.');

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
        $tipoproduccion = tipoproduccion::all()->pluck('nombre', 'id');
        $tipounidad = tipounidad::all()->pluck('nombre', 'id');
        $destino = destino::all()->pluck('nombre', 'id');
        $precuaria = precuaria::all()->pluck('nombre', 'id');

        $tipoAnimales = $this->tipoAnimalesRepository->findWithoutFail($id);

        if (empty($tipoAnimales)) {
            Flash::error('Tipo Animales not found');

            return redirect(route('tipoAnimales.index'));
        }

        return view('tipo_animales.edit')->with('tipoAnimales', $tipoAnimales)->with('tipoproduccion', $tipoproduccion)
            ->with('tipounidad', $tipounidad)->with('destino', $destino)->with('precuaria', $precuaria);

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

    public function tipoAnimalesHTMLPDF(Request $request)
    {
        $productos = $this->tipoAnimalesRepository->all(); //OBTENGO TODOS MIS PRODUCTO
        view()->share('tipoAnimales', $productos); //VARIABLE GLOBAL PRODUCTOS
        if ($request->has('descargar')) {
            $pdf = PDF::loadView('pdf.tablaAnimales', compact('productos')); //CARGO LA VISTA
            return $pdf->stream('tipoAnimales.pdf'); //SUGERIR NOMBRE A DESCARGAR
        }
        return view('tipoAnimales-pdf'); //RETORNO A MI VISTA
    }

    public function createChart($tipoAnimales, $tipoVariable)
    {

        $preprocessedDataset = $tipoAnimales->sortBy('nombre');

        $dataset = collect();
        foreach ($preprocessedDataset as $tipoanimales) {
            $temp = [
                'nombre' => (string) $tipoanimales->nombre,
                'pecuaria' => (string) $tipoanimales->precuaria->nombre,
                'tipoUnidad' => (string) $tipoanimales->tipounidad->nombre,
                'tipoProduccion' => (string) $tipoanimales->tipoproduccion->nombre,
                'destino' => (string) $tipoanimales->destino->nombre,
            ];
            $dataset->push($temp);
        }

        switch ($tipoVariable) {
            case '0':
                $dataset = $dataset->groupBy('pecuaria');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('tipoProduccion')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });
                break;
            case '1':
                $dataset = $dataset->groupBy('pecuaria');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('destino')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });

                break;

            default:
                $dataset = $dataset->groupBy('pecuaria');
                $dataset = $dataset->map(function ($item) {
                    return $item->groupBy('tipoProduccion')->map(function ($item2) {
                        return $item2->count('nombre');
                    });
                });
                break;
        }
        $labels = $dataset->collapse()->toArray();
        $dataset = $dataset->toArray();
        $labels = array_fill_keys(array_keys($labels), 0);
        $chart = new DefaultChart;
        foreach ($dataset as $key => $item) {
            $chart->dataset($key, 'column', array_values(array_merge($labels, $item)));
        }
        $chart->labels(array_keys($labels));
        $chart->title('Tipos de Animales');
        $chart->label("Cantidad de Tipo de Producción");
        return $chart;
    }

}
