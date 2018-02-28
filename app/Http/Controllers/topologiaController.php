<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTopologiaRequest;
use App\Http\Requests\UpdateTopologiaRequest;
use App\Repositories\TopologiaRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TopologiaController extends AppBaseController
{
    /** @var  TopologiaRepository */
    private $topologiaRepository;

    public function __construct(TopologiaRepository $topologiaRepo)
    {
        $this->topologiaRepository = $topologiaRepo;
    }

    /**
     * Display a listing of the Topologia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->topologiaRepository->pushCriteria(new RequestCriteria($request));
        $topologias = $this->topologiaRepository->all();

        return view('topologias.index')
            ->with('topologias', $topologias);
    }

    /**
     * Show the form for creating a new Topologia.
     *
     * @return Response
     */
    public function create()
    {
        return view('topologias.create');
    }

    /**
     * Store a newly created Topologia in storage.
     *
     * @param CreateTopologiaRequest $request
     *
     * @return Response
     */
    public function store(CreateTopologiaRequest $request)
    {
        $input = $request->all();

        $topologia = $this->topologiaRepository->create($input);

        Flash::success('Topologia saved successfully.');

        return redirect(route('topologias.index'));
    }

    /**
     * Display the specified Topologia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $topologia = $this->topologiaRepository->findWithoutFail($id);

        if (empty($topologia)) {
            Flash::error('Topologia not found');

            return redirect(route('topologias.index'));
        }

        return view('topologias.show')->with('topologia', $topologia);
    }

    /**
     * Show the form for editing the specified Topologia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $topologia = $this->topologiaRepository->findWithoutFail($id);

        if (empty($topologia)) {
            Flash::error('Topologia not found');

            return redirect(route('topologias.index'));
        }

        return view('topologias.edit')->with('topologia', $topologia);
    }

    /**
     * Update the specified Topologia in storage.
     *
     * @param  int              $id
     * @param UpdateTopologiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopologiaRequest $request)
    {
        $topologia = $this->topologiaRepository->findWithoutFail($id);

        if (empty($topologia)) {
            Flash::error('Topologia not found');

            return redirect(route('topologias.index'));
        }

        $topologia = $this->topologiaRepository->update($request->all(), $id);

        Flash::success('Topologia updated successfully.');

        return redirect(route('topologias.index'));
    }

    /**
     * Remove the specified Topologia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topologia = $this->topologiaRepository->findWithoutFail($id);

        if (empty($topologia)) {
            Flash::error('Topologia not found');

            return redirect(route('topologias.index'));
        }

        $this->topologiaRepository->delete($id);

        Flash::success('Topologia deleted successfully.');

        return redirect(route('topologias.index'));
    }
}
