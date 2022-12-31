<?php

namespace App\Repositories;

use App\Models\Mahasiswa;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class MahasiswaRepository
 * @package App\Repositories
 * @version December 30, 2022, 1:43 am UTC
*/

class MahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nim',
        'nama_mahasiswa',
        'alamat',
        'email',
        'no_telp',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mahasiswa::class;
    }
    public function createMahasiswa(Request $request) {

        $input = $request->all();

        return $this->create($input);
    }
}
