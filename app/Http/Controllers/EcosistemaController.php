<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateEcosistemaRequest;
use App\Http\Requests\UpdateEcosistemaRequest;
use App\Repositories\EcosistemaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EcosistemaController extends AppBaseController
{
    /** @var  EcosistemaRepository */
    private $ecosistemaRepository;

    public function __construct(EcosistemaRepository $ecosistemaRepo)
    {
        $this->ecosistemaRepository = $ecosistemaRepo;
    }

    /**
     * Display a listing of the Ecosistema.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ecosistemaRepository->pushCriteria(new RequestCriteria($request));
        $ecosistemas = $this->ecosistemaRepository->all();

        return view('ecosistemas.index')
            ->with('ecosistemas', $ecosistemas);
    }

    /**
     * Show the form for creating a new Ecosistema.
     *
     * @return Response
     */
    public function create()
    {
        return view('ecosistemas.create');
    }

    /**
     * Store a newly created Ecosistema in storage.
     *
     * @param CreateEcosistemaRequest $request
     *
     * @return Response
     */
    public function store(CreateEcosistemaRequest $request)
    {
        $input = $request->all();

        $ecosistema = $this->ecosistemaRepository->create($input);

        Flash::success('Ecosistema
guardado exitosamente.');

        return redirect(route('ecosistemas.index'));
    }

    /**
     * Display the specified Ecosistema.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ecosistema = $this->ecosistemaRepository->findWithoutFail($id);

        if (empty($ecosistema)) {
            Flash::error('Ecosistema not found');

            return redirect(route('ecosistemas.index'));
        }

        return view('ecosistemas.show')->with('ecosistema', $ecosistema);
    }

    /**
     * Show the form for editing the specified Ecosistema.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ecosistema = $this->ecosistemaRepository->findWithoutFail($id);

        if (empty($ecosistema)) {
            Flash::error('Ecosistema not found');

            return redirect(route('ecosistemas.index'));
        }

        return view('ecosistemas.edit')->with('ecosistema', $ecosistema);
    }

    /**
     * Update the specified Ecosistema in storage.
     *
     * @param  int              $id
     * @param UpdateEcosistemaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcosistemaRequest $request)
    {
        $ecosistema = $this->ecosistemaRepository->findWithoutFail($id);

        if (empty($ecosistema)) {
            Flash::error('Ecosistema not found');

            return redirect(route('ecosistemas.index'));
        }

        $ecosistema = $this->ecosistemaRepository->update($request->all(), $id);

        Flash::success('Ecosistema updated successfully.');

        return redirect(route('ecosistemas.index'));
    }

    /**
     * Remove the specified Ecosistema from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ecosistema = $this->ecosistemaRepository->findWithoutFail($id);

        if (empty($ecosistema)) {
            Flash::error('Ecosistema not found');

            return redirect(route('ecosistemas.index'));
        }

        $this->ecosistemaRepository->delete($id);

        Flash::success('Ecosistema deleted successfully.');

        return redirect(route('ecosistemas.index'));
    }
}
