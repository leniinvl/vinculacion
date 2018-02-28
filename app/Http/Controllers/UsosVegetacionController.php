<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUsosVegetacionRequest;
use App\Http\Requests\UpdateUsosVegetacionRequest;
use App\Repositories\UsosVegetacionRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsosVegetacionController extends AppBaseController
{
    /** @var  UsosVegetacionRepository */
    private $usosVegetacionRepository;

    public function __construct(UsosVegetacionRepository $usosVegetacionRepo)
    {
        $this->usosVegetacionRepository = $usosVegetacionRepo;
    }

    /**
     * Display a listing of the UsosVegetacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usosVegetacionRepository->pushCriteria(new RequestCriteria($request));
        $usosVegetacions = $this->usosVegetacionRepository->all();

        return view('usos_vegetacions.index')
            ->with('usosVegetacions', $usosVegetacions);
    }

    /**
     * Show the form for creating a new UsosVegetacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('usos_vegetacions.create');
    }

    /**
     * Store a newly created UsosVegetacion in storage.
     *
     * @param CreateUsosVegetacionRequest $request
     *
     * @return Response
     */
    public function store(CreateUsosVegetacionRequest $request)
    {
        $input = $request->all();

        $usosVegetacion = $this->usosVegetacionRepository->create($input);

        Flash::success('Usos Vegetacion saved successfully.');

        return redirect(route('usosVegetacions.index'));
    }

    /**
     * Display the specified UsosVegetacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usosVegetacion = $this->usosVegetacionRepository->findWithoutFail($id);

        if (empty($usosVegetacion)) {
            Flash::error('Usos Vegetacion not found');

            return redirect(route('usosVegetacions.index'));
        }

        return view('usos_vegetacions.show')->with('usosVegetacion', $usosVegetacion);
    }

    /**
     * Show the form for editing the specified UsosVegetacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usosVegetacion = $this->usosVegetacionRepository->findWithoutFail($id);

        if (empty($usosVegetacion)) {
            Flash::error('Usos Vegetacion not found');

            return redirect(route('usosVegetacions.index'));
        }

        return view('usos_vegetacions.edit')->with('usosVegetacion', $usosVegetacion);
    }

    /**
     * Update the specified UsosVegetacion in storage.
     *
     * @param  int              $id
     * @param UpdateUsosVegetacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsosVegetacionRequest $request)
    {
        $usosVegetacion = $this->usosVegetacionRepository->findWithoutFail($id);

        if (empty($usosVegetacion)) {
            Flash::error('Usos Vegetacion not found');

            return redirect(route('usosVegetacions.index'));
        }

        $usosVegetacion = $this->usosVegetacionRepository->update($request->all(), $id);

        Flash::success('Usos Vegetacion updated successfully.');

        return redirect(route('usosVegetacions.index'));
    }

    /**
     * Remove the specified UsosVegetacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usosVegetacion = $this->usosVegetacionRepository->findWithoutFail($id);

        if (empty($usosVegetacion)) {
            Flash::error('Usos Vegetacion not found');

            return redirect(route('usosVegetacions.index'));
        }

        $this->usosVegetacionRepository->delete($id);

        Flash::success('Usos Vegetacion deleted successfully.');

        return redirect(route('usosVegetacions.index'));
    }
}
