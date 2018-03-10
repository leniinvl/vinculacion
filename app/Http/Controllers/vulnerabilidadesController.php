<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevulnerabilidadesRequest;
use App\Http\Requests\UpdatevulnerabilidadesRequest;
use App\Repositories\vulnerabilidadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vulnerabilidadesController extends AppBaseController
{
    /** @var  vulnerabilidadesRepository */
    private $vulnerabilidadesRepository;

    public function __construct(vulnerabilidadesRepository $vulnerabilidadesRepo)
    {
        $this->vulnerabilidadesRepository = $vulnerabilidadesRepo;
    }

    /**
     * Display a listing of the vulnerabilidades.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vulnerabilidadesRepository->pushCriteria(new RequestCriteria($request));
        $vulnerabilidades = $this->vulnerabilidadesRepository->all();

        return view('vulnerabilidades.index')
            ->with('vulnerabilidades', $vulnerabilidades);
    }

    /**
     * Show the form for creating a new vulnerabilidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('vulnerabilidades.create');
    }

    /**
     * Store a newly created vulnerabilidades in storage.
     *
     * @param CreatevulnerabilidadesRequest $request
     *
     * @return Response
     */
    public function store(CreatevulnerabilidadesRequest $request)
    {
        $input = $request->all();

        $vulnerabilidades = $this->vulnerabilidadesRepository->create($input);

        Flash::success('Vulnerabilidades saved successfully.');

        return redirect(route('vulnerabilidades.index'));
    }

    /**
     * Display the specified vulnerabilidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vulnerabilidades = $this->vulnerabilidadesRepository->findWithoutFail($id);

        if (empty($vulnerabilidades)) {
            Flash::error('Vulnerabilidades not found');

            return redirect(route('vulnerabilidades.index'));
        }

        return view('vulnerabilidades.show')->with('vulnerabilidades', $vulnerabilidades);
    }

    /**
     * Show the form for editing the specified vulnerabilidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vulnerabilidades = $this->vulnerabilidadesRepository->findWithoutFail($id);

        if (empty($vulnerabilidades)) {
            Flash::error('Vulnerabilidades not found');

            return redirect(route('vulnerabilidades.index'));
        }

        return view('vulnerabilidades.edit')->with('vulnerabilidades', $vulnerabilidades);
    }

    /**
     * Update the specified vulnerabilidades in storage.
     *
     * @param  int              $id
     * @param UpdatevulnerabilidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevulnerabilidadesRequest $request)
    {
        $vulnerabilidades = $this->vulnerabilidadesRepository->findWithoutFail($id);

        if (empty($vulnerabilidades)) {
            Flash::error('Vulnerabilidades not found');

            return redirect(route('vulnerabilidades.index'));
        }

        $vulnerabilidades = $this->vulnerabilidadesRepository->update($request->all(), $id);

        Flash::success('Vulnerabilidades updated successfully.');

        return redirect(route('vulnerabilidades.index'));
    }

    /**
     * Remove the specified vulnerabilidades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vulnerabilidades = $this->vulnerabilidadesRepository->findWithoutFail($id);

        if (empty($vulnerabilidades)) {
            Flash::error('Vulnerabilidades not found');

            return redirect(route('vulnerabilidades.index'));
        }

        $this->vulnerabilidadesRepository->delete($id);

        Flash::success('Vulnerabilidades deleted successfully.');

        return redirect(route('vulnerabilidades.index'));
    }
}
