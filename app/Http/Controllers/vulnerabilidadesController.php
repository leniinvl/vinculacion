<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateVulnerabilidadesRequest;
use App\Http\Requests\UpdateVulnerabilidadesRequest;
use App\Repositories\VulnerabilidadesRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VulnerabilidadesController extends AppBaseController
{
    /** @var  VulnerabilidadesRepository */
    private $vulnerabilidadesRepository;

    public function __construct(VulnerabilidadesRepository $vulnerabilidadesRepo)
    {
        $this->vulnerabilidadesRepository = $vulnerabilidadesRepo;
    }

    /**
     * Display a listing of the Vulnerabilidades.
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
     * Show the form for creating a new Vulnerabilidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('vulnerabilidades.create');
    }

    /**
     * Store a newly created Vulnerabilidades in storage.
     *
     * @param CreateVulnerabilidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateVulnerabilidadesRequest $request)
    {
        $input = $request->all();

        $vulnerabilidades = $this->vulnerabilidadesRepository->create($input);

        Flash::success('Vulnerabilidades
guardado exitosamente.');

        return redirect(route('vulnerabilidades.index'));
    }

    /**
     * Display the specified Vulnerabilidades.
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
     * Show the form for editing the specified Vulnerabilidades.
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
     * Update the specified Vulnerabilidades in storage.
     *
     * @param  int              $id
     * @param UpdateVulnerabilidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVulnerabilidadesRequest $request)
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
     * Remove the specified Vulnerabilidades from storage.
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
