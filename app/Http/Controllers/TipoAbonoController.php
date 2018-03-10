<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipoabonoRequest;
use App\Http\Requests\UpdatetipoabonoRequest;
use App\Repositories\tipoabonoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipoabonoController extends AppBaseController
{
    /** @var  tipoabonoRepository */
    private $tipoabonoRepository;

    public function __construct(tipoabonoRepository $tipoabonoRepo)
    {
        $this->tipoabonoRepository = $tipoabonoRepo;
    }

    /**
     * Display a listing of the tipoabono.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoabonoRepository->pushCriteria(new RequestCriteria($request));
        $tipoabonos = $this->tipoabonoRepository->all();

        return view('tipoabonos.index')
            ->with('tipoabonos', $tipoabonos);
    }

    /**
     * Show the form for creating a new tipoabono.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoabonos.create');
    }

    /**
     * Store a newly created tipoabono in storage.
     *
     * @param CreatetipoabonoRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoabonoRequest $request)
    {
        $input = $request->all();

        $tipoabono = $this->tipoabonoRepository->create($input);

        Flash::success('Tipoabono saved successfully.');

        return redirect(route('tipoabonos.index'));
    }

    /**
     * Display the specified tipoabono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoabono = $this->tipoabonoRepository->findWithoutFail($id);

        if (empty($tipoabono)) {
            Flash::error('Tipoabono not found');

            return redirect(route('tipoabonos.index'));
        }

        return view('tipoabonos.show')->with('tipoabono', $tipoabono);
    }

    /**
     * Show the form for editing the specified tipoabono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoabono = $this->tipoabonoRepository->findWithoutFail($id);

        if (empty($tipoabono)) {
            Flash::error('Tipoabono not found');

            return redirect(route('tipoabonos.index'));
        }

        return view('tipoabonos.edit')->with('tipoabono', $tipoabono);
    }

    /**
     * Update the specified tipoabono in storage.
     *
     * @param  int              $id
     * @param UpdatetipoabonoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoabonoRequest $request)
    {
        $tipoabono = $this->tipoabonoRepository->findWithoutFail($id);

        if (empty($tipoabono)) {
            Flash::error('Tipoabono not found');

            return redirect(route('tipoabonos.index'));
        }

        $tipoabono = $this->tipoabonoRepository->update($request->all(), $id);

        Flash::success('Tipoabono updated successfully.');

        return redirect(route('tipoabonos.index'));
    }

    /**
     * Remove the specified tipoabono from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoabono = $this->tipoabonoRepository->findWithoutFail($id);

        if (empty($tipoabono)) {
            Flash::error('Tipoabono not found');

            return redirect(route('tipoabonos.index'));
        }

        $this->tipoabonoRepository->delete($id);

        Flash::success('Tipoabono deleted successfully.');

        return redirect(route('tipoabonos.index'));
    }
}
