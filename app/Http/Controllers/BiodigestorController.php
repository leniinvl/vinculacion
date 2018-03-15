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
use App\Models\unidadproduccion;
use Illuminate\Support\Facades\Input;
use App\Models\Biodigestor;

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
        $unidadproduccion=unidadproduccion::all()->pluck('nombre','id');
        return view('biodigestors.create',[
            'unidadproduccion' => $unidadproduccion,
        ]);
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
        
        if(!Input::file("imagen"))
        {
            return redirect('uploads')->with('error-message', 'File has required field');
        }
     
        $mime = Input::file('imagen')->getMimeType();
        $extension = strtolower(Input::file('imagen')->getClientOriginalExtension());
        $fileName = uniqid().'.'.$extension;
        $path = "imagenes";
     
        switch ($mime)
        {
            case "image/jpeg":
            case "image/png":
            case "image/gif":
                if (\Request::file('imagen')->isValid())
                {
                    \Request::file('imagen')->move($path, $fileName);
                    $biodigestor = new Biodigestor();
                    $biodigestor->ubicacion=$request->get('ubicacion');
                    $biodigestor->tamañoPropiedad=$request->get('tamañoPropiedad');
                    $biodigestor->video=$request->get('video');
                    $biodigestor->anchoBio=$request->get('anchoBio');
                    $biodigestor->largoBio=$request->get('largoBio');
                    $biodigestor->profundBio=$request->get('profundBio');
                    $biodigestor->anchoCaja=$request->get('anchoCaja');
                    $biodigestor->largoCaja=$request->get('largoCaja');
                    $biodigestor->profundCaja=$request->get('profundCaja');
                    $biodigestor->temperatura=$request->get('temperatura');
                    $biodigestor->UnidadProduccion_id=$request->get('UnidadProduccion_id');
                    $biodigestor->imagen = $fileName;
                    $biodigestor->save();
                }
            break;
        }

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
        $unidadproduccion=unidadproduccion::all()->pluck('nombre','id');
        $biodigestor = $this->biodigestorRepository->findWithoutFail($id);

        if (empty($biodigestor)) {
            Flash::error('Biodigestor not found');

            return redirect(route('biodigestors.index'));
        }

        return view('biodigestors.edit')->with('biodigestor', $biodigestor)->with('unidadproduccion', $unidadproduccion);
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
