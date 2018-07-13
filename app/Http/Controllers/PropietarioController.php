<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePropietarioRequest;
use App\Http\Requests\UpdatePropietarioRequest;
use App\Models\Genero;
use App\Repositories\PropietarioRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
class PropietarioController extends AppBaseController
{
    /** @var  PropietarioRepository */
    private $propietarioRepository;

    public function __construct(PropietarioRepository $propietarioRepo)
    {
        $this->propietarioRepository = $propietarioRepo;
    }

    /**
     * Display a listing of the Propietario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->propietarioRepository->pushCriteria(new RequestCriteria($request));
        $propietarios = $this->propietarioRepository->all();

        return view('propietarios.index')
            ->with('propietarios', $propietarios);
    }

    /**
     * Show the form for creating a new Propietario.
     *
     * @return Response
     */
    public function create()
    {
        $generos = Genero::all()->pluck('nombre', 'id');
        return view('propietarios.create', ['generos' => $generos]);
    }

    /**
     * Store a newly created Propietario in storage.
     *
     * @param CreatePropietarioRequest $request
     *
     * @return Response
     */
    public function store(CreatePropietarioRequest $request)
    {
        $input = $request->all();

        $propietario = $this->propietarioRepository->create($input);

        Flash::success('Propietario saved successfully.');

        return redirect(route('propietarios.index'));
    }

    /**
     * Display the specified Propietario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propietario = $this->propietarioRepository->findWithoutFail($id);

        if (empty($propietario)) {
            Flash::error('Propietario not found');

            return redirect(route('propietarios.index'));
        }

        return view('propietarios.show')->with('propietario', $propietario);
    }

    /**
     * Show the form for editing the specified Propietario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propietario = $this->propietarioRepository->findWithoutFail($id);
        $generos     = Genero::all()->pluck('nombre', 'id');

        if (empty($propietario)) {
            Flash::error('Propietario not found');

            return redirect(route('propietarios.index'));
        }

        return view('propietarios.edit')->with('propietario', $propietario)->with('generos', $generos);
    }

    /**
     * Update the specified Propietario in storage.
     *
     * @param  int              $id
     * @param UpdatePropietarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropietarioRequest $request)
    {
        $propietario = $this->propietarioRepository->findWithoutFail($id);

        if (empty($propietario)) {
            Flash::error('Propietario not found');

            return redirect(route('propietarios.index'));
        }

        $propietario = $this->propietarioRepository->update($request->all(), $id);

        Flash::success('Propietario updated successfully.');

        return redirect(route('propietarios.index'));
    }

    /**
     * Remove the specified Propietario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propietario = $this->propietarioRepository->findWithoutFail($id);

        if (empty($propietario)) {
            Flash::error('Propietario not found');

            return redirect(route('propietarios.index'));
        }

        $this->propietarioRepository->delete($id);

        Flash::success('Propietario deleted successfully.');

        return redirect(route('propietarios.index'));
    }
    public function propietariosHTMLPDF(Request $request)
    {
        $productos = $this->propietarioRepository->all();//OBTENGO TODOS MIS PRODUCTO
        view()->share('propietarios',$productos);//VARIABLE GLOBAL PRODUCTOS
        if($request->has('descargar')){
            $pdf = PDF::loadView('pdf.tablaPropietarios',compact('productos'));//CARGO LA VISTA
            return $pdf->download('propietarios.pdf');//SUGERIR NOMBRE A DESCARGAR
        }
        return view('propietarios-pdf');//RETORNO A MI VISTA
    }
}
