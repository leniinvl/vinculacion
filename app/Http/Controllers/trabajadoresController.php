<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatetrabajadoresRequest;
use App\Http\Requests\UpdatetrabajadoresRequest;
use App\Models\PlanRiesgos;
use App\Repositories\trabajadoresRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class trabajadoresController extends AppBaseController
{
    /** @var  trabajadoresRepository */
    private $trabajadoresRepository;

    public function __construct(trabajadoresRepository $trabajadoresRepo)
    {
        $this->trabajadoresRepository = $trabajadoresRepo;
    }

    /**
     * Display a listing of the trabajadores.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajadoresRepository->pushCriteria(new RequestCriteria($request));
        $trabajadores = $this->trabajadoresRepository->all();

        return view('trabajadores.index')
            ->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for creating a new trabajadores.
     *
     * @return Response
     */
    public function create()
    {
        $planriesgoss = PlanRiesgos::all()->pluck('id', 'id');
        return view('trabajadores.create', [
            'planriesgoss' => $planriesgoss,
        ]);
    }

    /**
     * Store a newly created trabajadores in storage.
     *
     * @param CreatetrabajadoresRequest $request
     *
     * @return Response
     */
    public function store(CreatetrabajadoresRequest $request)
    {
        $input = $request->all();

        $trabajadores = $this->trabajadoresRepository->create($input);

        Flash::success('Trabajadores saved successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Display the specified trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.show')->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for editing the specified trabajadores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planriesgoss = PlanRiesgos::all()->pluck('id', 'id');
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.edit')->with('trabajadores', $trabajadores)
            ->with('planriesgos', $planriesgoss);
    }

    /**
     * Update the specified trabajadores in storage.
     *
     * @param  int              $id
     * @param UpdatetrabajadoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetrabajadoresRequest $request)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $trabajadores = $this->trabajadoresRepository->update($request->all(), $id);

        Flash::success('Trabajadores updated successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Remove the specified trabajadores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajadores = $this->trabajadoresRepository->findWithoutFail($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $this->trabajadoresRepository->delete($id);

        Flash::success('Trabajadores deleted successfully.');

        return redirect(route('trabajadores.index'));
    }
}
