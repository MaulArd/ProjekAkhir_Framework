<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Repositories\MahasiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MahasiswaController extends AppBaseController
{
    /** @var MahasiswaRepository $mahasiswaRepository*/
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepo)
    {
        $this->mahasiswaRepository = $mahasiswaRepo;
    }

    /**
     * Display a listing of the Siswa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mahasiswa = $this->mahasiswaRepository->all();

        return view('mahasiswa.index')
            ->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new Siswa.
     *
     * @return Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created Siswa in storage.
     *
     * @param CreateMahasiswaRequest $request
     *
     * @return Response
     */
    public function store(CreateMahasiswaRequest $request)
    {
        $mahasiswa = $this->mahasiswaRepository->createMahasiswa($request);

        Flash::success('Data mahasiswa berhasil disimpan.');

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Display the specified Siswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Data mahasiswa tidak ditemukan');

            return redirect(route('mahasiswa.index'));
        }

        return view('mahasiswa.show')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for editing the specified Siswa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Data mahasiswa tidak ditemukan');

            return redirect(route('mahasiswa.index'));
        }

        return view('mahasiswa.edit')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Update the specified Siswa in storage.
     *
     * @param int $id
     * @param UpdateMahasiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMahasiswaRequest $request)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Data mahasiswa tidak ditemukan');

            return redirect(route('mahasiswa.index'));
        }

        $mahasiswa = $this->mahasiswaRepository->update($request->all(), $id);

        Flash::success('Data mahasiswa berhasil diperbarui.');

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Remove the specified Siswa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mahasiswa = $this->mahasiswaRepository->find($id);

        if (empty($mahasiswa)) {
            Flash::error('Data mahasiswa tidak ditemukan');

            return redirect(route('mahasiswa.index'));
        }

        $this->mahasiswaRepository->delete($id);

        Flash::success('Data mahasiswa berhasil dihapus.');

        return redirect(route('mahasiswa.index'));
    }
}
