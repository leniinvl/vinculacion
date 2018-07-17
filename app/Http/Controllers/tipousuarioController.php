<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreatetipousuarioRequest;
use App\Http\Requests\UpdatetipousuarioRequest;
use App\Repositories\tipousuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
class tipousuarioController extends AppBaseController
{
    /** @var  tipousuarioRepository */
    private $tipousuarioRepository;
    public function __construct(tipousuarioRepository $tipousuarioRepo)
    {
        $this->tipousuarioRepository = $tipousuarioRepo;
    }
    /**
     * Display a listing of the tipousuario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipousuarioRepository->pushCriteria(new RequestCriteria($request));
        $tipousuarios = $this->tipousuarioRepository->all();
        return view('tipousuarios.index')
            ->with('tipousuarios', $tipousuarios);
    }
    /**
     * Show the form for creating a new tipousuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipousuarios.create');
    }
    /**
     * Store a newly created tipousuario in storage.
     *
     * @param CreatetipousuarioRequest $request
     *
     * @return Response
     */
    public function store(CreatetipousuarioRequest $request)
    {
        $input = $request->all();
        $tipousuario = $this->tipousuarioRepository->create($input);
        Flash::success('Tipousuario saved successfully.');
        return redirect(route('tipousuarios.index'));
    }
    /**
     * Display the specified tipousuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipousuario = $this->tipousuarioRepository->findWithoutFail($id);
        if (empty($tipousuario)) {
            Flash::error('Tipousuario not found');
            return redirect(route('tipousuarios.index'));
        }
        return view('tipousuarios.show')->with('tipousuario', $tipousuario);
    }
    /**
     * Show the form for editing the specified tipousuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipousuario = $this->tipousuarioRepository->findWithoutFail($id);
        if (empty($tipousuario)) {
            Flash::error('Tipousuario not found');
            return redirect(route('tipousuarios.index'));
        }
        return view('tipousuarios.edit')->with('tipousuario', $tipousuario);
    }
    /**
     * Update the specified tipousuario in storage.
     *
     * @param  int              $id
     * @param UpdatetipousuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipousuarioRequest $request)
    {
        $tipousuario = $this->tipousuarioRepository->findWithoutFail($id);
        if (empty($tipousuario)) {
            Flash::error('Tipousuario not found');
            return redirect(route('tipousuarios.index'));
        }
        $tipousuario = $this->tipousuarioRepository->update($request->all(), $id);
        Flash::success('Tipousuario updated successfully.');
        return redirect(route('tipousuarios.index'));
    }
    /**
     * Remove the specified tipousuario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipousuario = $this->tipousuarioRepository->findWithoutFail($id);
        if (empty($tipousuario)) {
            Flash::error('Tipousuario not found');
            return redirect(route('tipousuarios.index'));
        }
        $this->tipousuarioRepository->delete($id);
        Flash::success('Tipousuario deleted successfully.');
        return redirect(route('tipousuarios.index'));
    }
}
