<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version December 30, 2022, 1:43 am UTC
 *
 * @property string $nim
 * @property string $nama_mahasiswa
 * @property string $alamat
 * @property string $email
 * @property string $no_telp
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahasiswa';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nim',
        'nama_mahasiswa',
        'alamat',
        'email',
        'no_telp',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nim' => 'string',
        'nama_mahasiswa' => 'string',
        'alamat' => 'string',
        'email' => 'string',
        'no_telp' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nim' => 'required|max:25',
        'nama_mahasiswa' => 'required|max:50',
        'alamat' => 'required|max:255',
        'email' => 'required',
        'no_telp' => 'required|max:15',
    ];

    
}
