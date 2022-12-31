<?php

namespace App\Repositories;

use App\Models\Dosen;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class DosenRepository
 * @package App\Repositories
 * @version December 30, 2022, 1:39 am UTC
*/

class DosenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_dosen',
        'alamat',
        'email',
        'no_telp',
        'matkul_yang_diampu'
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
        return Dosen::class;
    }
    public function createDosen(Request $request) {

        $input = $request->all();

        return $this->create($input);
    }
}
