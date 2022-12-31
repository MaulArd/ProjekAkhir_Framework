<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Nilai
 * @package App\Models
 * @version December 30, 2022, 6:28 am UTC
 *
 * @property string $nim
 * @property string $nama_mahasiswa
 * @property string $wali_dosen
 * @property string $mata_kuliah
 * @property integer $nilai
 * @property string $predikat
 * @property string $keterangan
 */
class Nilai extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'nilais';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nim',
        'nama_mahasiswa',
        'wali_dosen',
        'mata_kuliah',
        'nilai',
        'predikat',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nim' => 'string',
        'nama_mahasiswa' => 'string',
        'wali_dosen' => 'string',
        'mata_kuliah' => 'string',
        'nilai' => 'integer',
        'predikat' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nim' => 'required|max:25',
        'nama_mahasiswa' => 'required|max:50',
        'wali_dosen' => 'required|max:50',
        'mata_kuliah' => 'required',
        'nilai' => 'required|max:100',
        'predikat' => 'required',
        'keterangan' => 'required'
    ];

    
}
