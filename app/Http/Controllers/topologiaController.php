<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetopologiaRequest;
use App\Http\Requests\UpdatetopologiaRequest;
use App\Repositories\topologiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class topologiaController extends AppBaseController
{
    /** @var  topologiaRepository */
    private $topologiaRepository;

    public function __construct(topologiaRepository $topologiaRepo)
    {
        $this->topologiaRepository = $topologiaRepo;
    }

    /**
     * Display a listing of the topologia.
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
     * Show the form for creating a new topologia.
     *
     * @return Response
     */
    public function create()
    {
        return view('topologias.create');
    }

    /**
     * Store a newly created topologia in storage.
     *
     * @param CreatetopologiaRequest $request
     *
     * @return Response
     */
    public function store(CreatetopologiaRequest $request)
    {
        $input = $request->all();

        $topologia = $this->topologiaRepository->create($input);

        Flash::success('Topologia saved successfully.');

        return redirect(route('topologias.index'));
    }

    /**
     * Display the specified topologia.
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
     * Show the form for editing the specified topologia.
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
     * Update the specified topologia in storage.
     *
     * @param  int              $id
     * @param UpdatetopologiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetopologiaRequest $request)
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
     * Remove the specified topologia from storage.
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
