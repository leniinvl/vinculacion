<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesechotRequest;
use App\Http\Requests\UpdateDesechotRequest;
use App\Repositories\DesechotRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\TipoDesechot;
use App\Models\Taller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DesechotController extends AppBaseController
{
    /** @var  DesechotRepository */
    private $desechotRepository;

    public function __construct(DesechotRepository $desechotRepo)
    {
        $this->desechotRepository = $desechotRepo;
    }

    /**
     * Display a listing of the Desechot.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->desechotRepository->pushCriteria(new RequestCriteria($request));
        $desechots = $this->desechotRepository->all();

        return view('desechots.index')
            ->with('desechots', $desechots);
    }

    /**
     * Show the form for creating a new Desechot.
     *
     * @return Response
     */
    public function create()
    {
        $taller= Taller::all()->pluck('nombre','id');
        $tipodesechot=TipoDesechot::all()->pluck('nombre','id');
        return view('desechots.create',[
            'taller'=>$taller,
            'tipodesechot'=>$tipodesechot

        ]);
    }

    /**
     * Store a newly created Desechot in storage.
     *
     * @param CreateDesechotRequest $request
     *
     * @return Response
     */
    public function store(CreateDesechotRequest $request)
    {
        $input = $request->all();

        $desechot = $this->desechotRepository->create($input);


        Flash::success('Desechot saved successfully.');

        return redirect(route('desechots.index'));
    }

    /**
     * Display the specified Desechot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taller= Taller::all()->pluck('nombre','id');
        $tipodesechot=TipoDesechot::all()->pluck('nombre','id');
        $desechot = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('Desechot not found');

            return redirect(route('desechots.index'));
        }

        return view('desechots.show')->with('desechot', $desechot)->with('taller',$taller)->with('tipodesechot',$tipodesechot);
    }

    /**
     * Show the form for editing the specified Desechot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taller= Taller::all()->pluck('nombre','id');
        $tipodesechot=TipoDesechot::all()->pluck('nombre','id');
        $desechot = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('Desechot not found');

            return redirect(route('desechots.index'));
        }

        return view('desechots.edit')->with('desechot', $desechot)->with('taller',$taller)->with('tipodesechot',$tipodesechot);
    }

    /**
     * Update the specified Desechot in storage.
     *
     * @param  int              $id
     * @param UpdateDesechotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesechotRequest $request)
    {
        $desechot = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('Desechot not found');

            return redirect(route('desechots.index'));
        }

        $desechot = $this->desechotRepository->update($request->all(), $id);

        Flash::success('Desechot updated successfully.');

        return redirect(route('desechots.index'));
    }

    /**
     * Remove the specified Desechot from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desechot = $this->desechotRepository->findWithoutFail($id);

        if (empty($desechot)) {
            Flash::error('Desechot not found');

            return redirect(route('desechots.index'));
        }

        $this->desechotRepository->delete($id);

        Flash::success('Desechot deleted successfully.');

        return redirect(route('desechots.index'));
    }
}
