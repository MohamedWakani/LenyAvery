<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHowRequest;
use App\Http\Requests\UpdateHowRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\HowRepository;
use Illuminate\Http\Request;
use Flash;

class HowController extends AppBaseController
{
    /** @var HowRepository $howRepository*/
    private $howRepository;

    public function __construct(HowRepository $howRepo)
    {
        $this->howRepository = $howRepo;
    }

    /**
     * Display a listing of the How.
     */
    public function index(Request $request)
    {
        $hows = $this->howRepository->paginate(10);

        return view('hows.index')
            ->with('hows', $hows);
    }

    /**
     * Show the form for creating a new How.
     */
    public function create()
    {
        return view('hows.create');
    }

    /**
     * Store a newly created How in storage.
     */
    public function store(CreateHowRequest $request)
    {
        $input = $request->all();

        $how = $this->howRepository->create($input);

        Flash::success('How saved successfully.');

        return redirect(route('hows.index'));
    }

    /**
     * Display the specified How.
     */
    public function show($id)
    {
        $how = $this->howRepository->find($id);

        if (empty($how)) {
            Flash::error('How not found');

            return redirect(route('hows.index'));
        }

        return view('hows.show')->with('how', $how);
    }

    /**
     * Show the form for editing the specified How.
     */
    public function edit($id)
    {
        $how = $this->howRepository->find($id);

        if (empty($how)) {
            Flash::error('How not found');

            return redirect(route('hows.index'));
        }

        return view('hows.edit')->with('how', $how);
    }

    /**
     * Update the specified How in storage.
     */
    public function update($id, UpdateHowRequest $request)
    {
        $how = $this->howRepository->find($id);

        if (empty($how)) {
            Flash::error('How not found');

            return redirect(route('hows.index'));
        }

        $how = $this->howRepository->update($request->all(), $id);

        Flash::success('How updated successfully.');

        return redirect(route('hows.index'));
    }

    /**
     * Remove the specified How from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $how = $this->howRepository->find($id);

        if (empty($how)) {
            Flash::error('How not found');

            return redirect(route('hows.index'));
        }

        $this->howRepository->delete($id);

        Flash::success('How deleted successfully.');

        return redirect(route('hows.index'));
    }
}
