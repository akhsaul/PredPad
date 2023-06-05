<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static getAll()
 * */
class Predict extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'produksi_actual',
        'produksi_predict',
    ];

    protected $casts = [
        'tahun' => 'date',
    ];

    public function setTahunAttribute($value)
    {
        $this->attributes['tahun'] = Carbon::createFromFormat('Y', $value)
            ->format('Y-m-d');
    }

    function scopeGetAll($query)
    {
        return $query->select('*')->get();
    }
}
