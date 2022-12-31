<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDosenRequest;
use App\Http\Requests\UpdateDosenRequest;
use App\Repositories\DosenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DosenController extends AppBaseController
{
    /** @var DosenRepository $dosenRepository*/
    private $dosenRepository;

    public function __construct(DosenRepository $dosenRepo)
    {
        $this->dosenRepository = $dosenRepo;
    }

    /**
     * Display a listing of the Dosen.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dosen = $this->dosenRepository->all();

        return view('dosen.index')
            ->with('dosen', $dosen);
    }

    /**
     * Show the form for creating a new Dosen.
     *
     * @return Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created Dosen in storage.
     *
     * @param CreateDosenRequest $request
     *
     * @return Response
     */
    public function store(CreateDosenRequest $request)
    {
        $dosen = $this->dosenRepository->createDosen($request);

        Flash::success('Data dosen berhasil disimpan.');

        return redirect(route('dosen.index'));
    }

    /**
     * Display the specified Dosen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dosen = $this->dosenRepository->find($id);

        if (empty($dosen)) {
            Flash::error('Data dosen tidak ditemukan');

            return redirect(route('dosen.index'));
        }

        return view('dosen.show')->with('dosen', $dosen);
    }

    /**
     * Show the form for editing the specified Dosen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dosen = $this->dosenRepository->find($id);

        if (empty($dosen)) {
            Flash::error('Data dosen tidak ditemukan');

            return redirect(route('dosen.index'));
        }

        return view('dosen.edit')->with('dosen', $dosen);
    }

    /**
     * Update the specified Dosen in storage.
     *
     * @param int $id
     * @param UpdateDosenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDosenRequest $request)
    {
        $dosen = $this->dosenRepository->find($id);

        if (empty($dosen)) {
            Flash::error('Data dosen tidak ditemukan');

            return redirect(route('dosen.index'));
        }

        $dosen = $this->dosenRepository->update($request->all(), $id);

        Flash::success('Data dosen berhasil diperbarui.');

        return redirect(route('dosen.index'));
    }

    /**
     * Remove the specified Dosen from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dosen = $this->dosenRepository->find($id);

        if (empty($dosen)) {
            Flash::error('Data dosen tidak ditemukan');

            return redirect(route('dosen.index'));
        }

        $this->dosenRepository->delete($id);

        Flash::success('Data dosen berhasil dihapus.');

        return redirect(route('dosen.index'));
    }
}
