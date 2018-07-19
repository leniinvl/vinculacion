<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipousuariosRequest;
use App\Http\Requests\UpdatetipousuariosRequest;
use App\Repositories\tipousuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipousuariosController extends AppBaseController
{
    /** @var  tipousuariosRepository */
    private $tipousuariosRepository;

    public function __construct(tipousuariosRepository $tipousuariosRepo)
    {
        $this->tipousuariosRepository = $tipousuariosRepo;
    }

    /**
     * Display a listing of the tipousuarios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipousuariosRepository->pushCriteria(new RequestCriteria($request));
        $tipousuarios = $this->tipousuariosRepository->all();

        return view('tipousuarios.index')
            ->with('tipousuarios', $tipousuarios);
    }

    /**
     * Show the form for creating a new tipousuarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipousuarios.create');
    }

    /**
     * Store a newly created tipousuarios in storage.
     *
     * @param CreatetipousuariosRequest $request
     *
     * @return Response
     */
    public function store(CreatetipousuariosRequest $request)
    {
        $input = $request->all();

        $tipousuarios = $this->tipousuariosRepository->create($input);

        Flash::success('Tipousuarios saved successfully.');

        return redirect(route('tipousuarios.index'));
    }

    /**
     * Display the specified tipousuarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipousuarios = $this->tipousuariosRepository->findWithoutFail($id);

        if (empty($tipousuarios)) {
            Flash::error('Tipousuarios not found');

            return redirect(route('tipousuarios.index'));
        }

        return view('tipousuarios.show')->with('tipousuarios', $tipousuarios);
    }

    /**
     * Show the form for editing the specified tipousuarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipousuarios = $this->tipousuariosRepository->findWithoutFail($id);

        if (empty($tipousuarios)) {
            Flash::error('Tipousuarios not found');

            return redirect(route('tipousuarios.index'));
        }

        return view('tipousuarios.edit')->with('tipousuarios', $tipousuarios);
    }

    /**
     * Update the specified tipousuarios in storage.
     *
     * @param  int              $id
     * @param UpdatetipousuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipousuariosRequest $request)
    {
        $tipousuarios = $this->tipousuariosRepository->findWithoutFail($id);

        if (empty($tipousuarios)) {
            Flash::error('Tipousuarios not found');

            return redirect(route('tipousuarios.index'));
        }

        $tipousuarios = $this->tipousuariosRepository->update($request->all(), $id);

        Flash::success('Tipousuarios updated successfully.');

        return redirect(route('tipousuarios.index'));
    }

    /**
     * Remove the specified tipousuarios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipousuarios = $this->tipousuariosRepository->findWithoutFail($id);

        if (empty($tipousuarios)) {
            Flash::error('Tipousuarios not found');

            return redirect(route('tipousuarios.index'));
        }

        $this->tipousuariosRepository->delete($id);

        Flash::success('Tipousuarios deleted successfully.');

        return redirect(route('tipousuarios.index'));
    }
}
