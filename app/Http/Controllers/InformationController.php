<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformationRequest;
use App\Http\Requests\UpdateInformationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InformationRepository;
use Illuminate\Http\Request;
use Flash;

class InformationController extends AppBaseController
{
    /** @var InformationRepository $informationRepository*/
    private $informationRepository;

    public function __construct(InformationRepository $informationRepo)
    {
        $this->informationRepository = $informationRepo;
    }

    /**
     * Display a listing of the Information.
     */
    public function index(Request $request)
    {
        $information = $this->informationRepository->paginate(10);

        return view('information.index')
            ->with('information', $information);
    }

    /**
     * Show the form for creating a new Information.
     */
    public function create()
    {
        return view('information.create');
    }

    /**
     * Store a newly created Information in storage.
     */
    public function store(CreateInformationRequest $request)
    {
        $input = $request->all();

        $information = $this->informationRepository->create($input);

        Flash::success('Information saved successfully.');

        return redirect(route('information.index'));
    }

    /**
     * Display the specified Information.
     */
    public function show($id)
    {
        $information = $this->informationRepository->find($id);

        if (empty($information)) {
            Flash::error('Information not found');

            return redirect(route('information.index'));
        }

        return view('information.show')->with('information', $information);
    }

    /**
     * Show the form for editing the specified Information.
     */
    public function edit($id)
    {
        $information = $this->informationRepository->find($id);

        if (empty($information)) {
            Flash::error('Information not found');

            return redirect(route('information.index'));
        }

        return view('information.edit')->with('information', $information);
    }

    /**
     * Update the specified Information in storage.
     */
    public function update($id, UpdateInformationRequest $request)
    {
        $information = $this->informationRepository->find($id);

        if (empty($information)) {
            Flash::error('Information not found');

            return redirect(route('information.index'));
        }

        $information = $this->informationRepository->update($request->all(), $id);

        Flash::success('Information updated successfully.');

        return redirect(route('information.index'));
    }

    /**
     * Remove the specified Information from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $information = $this->informationRepository->find($id);

        if (empty($information)) {
            Flash::error('Information not found');

            return redirect(route('information.index'));
        }

        $this->informationRepository->delete($id);

        Flash::success('Information deleted successfully.');

        return redirect(route('information.index'));
    }
}
