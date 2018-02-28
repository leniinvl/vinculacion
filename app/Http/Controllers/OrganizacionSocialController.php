<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateOrganizacionSocialRequest;
use App\Http\Requests\UpdateOrganizacionSocialRequest;
use App\Repositories\OrganizacionSocialRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrganizacionSocialController extends AppBaseController
{
    /** @var  OrganizacionSocialRepository */
    private $organizacionSocialRepository;

    public function __construct(OrganizacionSocialRepository $organizacionSocialRepo)
    {
        $this->organizacionSocialRepository = $organizacionSocialRepo;
    }

    /**
     * Display a listing of the OrganizacionSocial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->organizacionSocialRepository->pushCriteria(new RequestCriteria($request));
        $organizacionSocials = $this->organizacionSocialRepository->all();

        return view('organizacion_socials.index')
            ->with('organizacionSocials', $organizacionSocials);
    }

    /**
     * Show the form for creating a new OrganizacionSocial.
     *
     * @return Response
     */
    public function create()
    {
        return view('organizacion_socials.create');
    }

    /**
     * Store a newly created OrganizacionSocial in storage.
     *
     * @param CreateOrganizacionSocialRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganizacionSocialRequest $request)
    {
        $input = $request->all();

        $organizacionSocial = $this->organizacionSocialRepository->create($input);

        Flash::success('Organizacion Social saved successfully.');

        return redirect(route('organizacionSocials.index'));
    }

    /**
     * Display the specified OrganizacionSocial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organizacionSocial = $this->organizacionSocialRepository->findWithoutFail($id);

        if (empty($organizacionSocial)) {
            Flash::error('Organizacion Social not found');

            return redirect(route('organizacionSocials.index'));
        }

        return view('organizacion_socials.show')->with('organizacionSocial', $organizacionSocial);
    }

    /**
     * Show the form for editing the specified OrganizacionSocial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organizacionSocial = $this->organizacionSocialRepository->findWithoutFail($id);

        if (empty($organizacionSocial)) {
            Flash::error('Organizacion Social not found');

            return redirect(route('organizacionSocials.index'));
        }

        return view('organizacion_socials.edit')->with('organizacionSocial', $organizacionSocial);
    }

    /**
     * Update the specified OrganizacionSocial in storage.
     *
     * @param  int              $id
     * @param UpdateOrganizacionSocialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganizacionSocialRequest $request)
    {
        $organizacionSocial = $this->organizacionSocialRepository->findWithoutFail($id);

        if (empty($organizacionSocial)) {
            Flash::error('Organizacion Social not found');

            return redirect(route('organizacionSocials.index'));
        }

        $organizacionSocial = $this->organizacionSocialRepository->update($request->all(), $id);

        Flash::success('Organizacion Social updated successfully.');

        return redirect(route('organizacionSocials.index'));
    }

    /**
     * Remove the specified OrganizacionSocial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organizacionSocial = $this->organizacionSocialRepository->findWithoutFail($id);

        if (empty($organizacionSocial)) {
            Flash::error('Organizacion Social not found');

            return redirect(route('organizacionSocials.index'));
        }

        $this->organizacionSocialRepository->delete($id);

        Flash::success('Organizacion Social deleted successfully.');

        return redirect(route('organizacionSocials.index'));
    }
}
