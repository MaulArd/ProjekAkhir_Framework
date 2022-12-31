<?php

namespace App\Repositories;

use App\Models\Nilai;
use App\Repositories\BaseRepository;

/**
 * Class NilaiRepository
 * @package App\Repositories
 * @version December 30, 2022, 6:28 am UTC
*/

class NilaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nim',
        'nama_mahasiswa',
        'wali_dosen',
        'mata_kuliah',
        'nilai',
        'predikat',
        'keterangan'
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
        return Nilai::class;
    }
}
