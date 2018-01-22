<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBiodigestorRequest;
use App\Http\Requests\UpdateBiodigestorRequest;
use App\Repositories\BiodigestorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BiodigestorController extends AppBaseController
{
    /** @var  BiodigestorRepository */
    private $biodigestorRepository;

    public function __construct(BiodigestorRepository $biodigestorRepo)
    {
        $this->biodigestorRepository = $biodigestorRepo;
    }

    /**
     * Display a listing of the Biodigestor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->biodigestorRepository->pushCriteria(new RequestCriteria($request));
        $biodigestors = $this->biodigestorRepository->all();

        return view('biodigestors.index')
            ->with('biodigestors', $biodigestors);
    }

    /**
     * Show the form for creating a new Biodigestor.
     *
     * @return Response
     */
    public function create()
    {
        return view('biodigestors.create');
    }

    /**
     * Store a newly created Biodigestor in storage.
     *
     * @param CreateBiodigestorRequest $request
     *
     * @return Response
     */
    public function store(CreateBiodigestorRequest $request)
    {
        $input = $request->all();

        $biodigestor = $this->biodigestorRepository->create($input);

        Flash::success('Biodigestor saved successfully.');

        return redirect(route('biodigestors.index'));
    }

    /**
     * Display the specified Biodigestor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        return view('biodigestors.show')->with('biodigestor', $biodigestor);
    }

    /**
     * Show the form for editing the specified Biodigestor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        return view('biodigestors.edit')->with('biodigestor', $biodigestor);
    }

    /**
     * Update the specified Biodigestor in storage.
     *
     * @param  int              $id
     * @param UpdateBiodigestorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBiodigestorRequest $request)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        $biodigestor = $this->biodigestorRepository->update($request->all(), $id);

        Flash::success('Biodigestor updated successfully.');

        return redirect(route('biodigestors.index'));
    }

    /**
     * Remove the specified Biodigestor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        $this->biodigestorRepository->delete($id);

        Flash::success('Biodigestor deleted successfully.');

        return redirect(route('biodigestors.index'));
    }
}
