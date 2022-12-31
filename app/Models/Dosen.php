<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dosen
 * @package App\Models
 * @version December 30, 2022, 1:39 am UTC
 *
 * @property string $nama_dosen
 * @property string $alamat
 * @property string $email
 * @property string $no_telp
 * @property string $matkul_yang_diampu
 */
class Dosen extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dosen';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_dosen',
        'alamat',
        'email',
        'no_telp',
        'matkul_yang_diampu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_dosen' => 'string',
        'alamat' => 'string',
        'email' => 'string',
        'no_telp' => 'string',
        'matkul_yang_diampu' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_dosen' => 'required|max:50',
        'alamat' => 'required|max:255',
        'email' => 'required',
        'no_telp' => 'required|max:15',
        'matkul_yang_diampu' => 'required'
    ];

    
}
