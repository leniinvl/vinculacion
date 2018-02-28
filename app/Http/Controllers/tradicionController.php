<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTradicionRequest;
use App\Http\Requests\UpdateTradicionRequest;
use App\Repositories\TradicionRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TradicionController extends AppBaseController
{
    /** @var  TradicionRepository */
    private $tradicionRepository;

    public function __construct(TradicionRepository $tradicionRepo)
    {
        $this->tradicionRepository = $tradicionRepo;
    }

    /**
     * Display a listing of the Tradicion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tradicionRepository->pushCriteria(new RequestCriteria($request));
        $tradicions = $this->tradicionRepository->all();

        return view('tradicions.index')
            ->with('tradicions', $tradicions);
    }

    /**
     * Show the form for creating a new Tradicion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tradicions.create');
    }

    /**
     * Store a newly created Tradicion in storage.
     *
     * @param CreateTradicionRequest $request
     *
     * @return Response
     */
    public function store(CreateTradicionRequest $request)
    {
        $input = $request->all();

        $tradicion = $this->tradicionRepository->create($input);

        Flash::success('Tradicion saved successfully.');

        return redirect(route('tradicions.index'));
    }

    /**
     * Display the specified Tradicion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tradicion = $this->tradicionRepository->findWithoutFail($id);

        if (empty($tradicion)) {
            Flash::error('Tradicion not found');

            return redirect(route('tradicions.index'));
        }

        return view('tradicions.show')->with('tradicion', $tradicion);
    }

    /**
     * Show the form for editing the specified Tradicion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tradicion = $this->tradicionRepository->findWithoutFail($id);

        if (empty($tradicion)) {
            Flash::error('Tradicion not found');

            return redirect(route('tradicions.index'));
        }

        return view('tradicions.edit')->with('tradicion', $tradicion);
    }

    /**
     * Update the specified Tradicion in storage.
     *
     * @param  int              $id
     * @param UpdateTradicionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTradicionRequest $request)
    {
        $tradicion = $this->tradicionRepository->findWithoutFail($id);

        if (empty($tradicion)) {
            Flash::error('Tradicion not found');

            return redirect(route('tradicions.index'));
        }

        $tradicion = $this->tradicionRepository->update($request->all(), $id);

        Flash::success('Tradicion updated successfully.');

        return redirect(route('tradicions.index'));
    }

    /**
     * Remove the specified Tradicion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tradicion = $this->tradicionRepository->findWithoutFail($id);

        if (empty($tradicion)) {
            Flash::error('Tradicion not found');

            return redirect(route('tradicions.index'));
        }

        $this->tradicionRepository->delete($id);

        Flash::success('Tradicion deleted successfully.');

        return redirect(route('tradicions.index'));
    }
}
