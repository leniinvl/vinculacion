<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesechoRequest;
use App\Http\Requests\UpdateDesechoRequest;
use App\Repositories\DesechoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Biodigestor;

class DesechoController extends AppBaseController
{
    /** @var  DesechoRepository */
    private $desechoRepository;

    public function __construct(DesechoRepository $desechoRepo)
    {
        $this->desechoRepository = $desechoRepo;
    }

    /**
     * Display a listing of the Desecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->desechoRepository->pushCriteria(new RequestCriteria($request));
        $desechos = $this->desechoRepository->all();

        return view('desechos.index')
            ->with('desechos', $desechos);
    }

    /**
     * Show the form for creating a new Desecho.
     *
     * @return Response
     */
    public function create()
    {
        $biodigestor=Biodigestor::all()->pluck('ubicacion','id');
        return view('desechos.create',[
            'biodigestor' => $biodigestor,
        ]);
    }

    /**
     * Store a newly created Desecho in storage.
     *
     * @param CreateDesechoRequest $request
     *
     * @return Response
     */
    public function store(CreateDesechoRequest $request)
    {
        $input = $request->all();

        $desecho = $this->desechoRepository->create($input);

        Flash::success('Desecho saved successfully.');

        return redirect(route('desechos.index'));
    }

    /**
     * Display the specified Desecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        return view('desechos.show')->with('desecho', $desecho);
    }

    /**
     * Show the form for editing the specified Desecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $biodigestor=Biodigestor::all()->pluck('ubicacion','id');
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        return view('desechos.edit')->with('desecho', $desecho)->with('biodigestor', $biodigestor);
    }

    /**
     * Update the specified Desecho in storage.
     *
     * @param  int              $id
     * @param UpdateDesechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesechoRequest $request)
    {
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        $desecho = $this->desechoRepository->update($request->all(), $id);

        Flash::success('Desecho updated successfully.');

        return redirect(route('desechos.index'));
    }

    /**
     * Remove the specified Desecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desecho = $this->desechoRepository->findWithoutFail($id);

        if (empty($desecho)) {
            Flash::error('Desecho not found');

            return redirect(route('desechos.index'));
        }

        $this->desechoRepository->delete($id);

        Flash::success('Desecho deleted successfully.');

        return redirect(route('desechos.index'));
    }
}
