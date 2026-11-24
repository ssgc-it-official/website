<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BlacklistedFirm extends Model
{
    protected $fillable = [
        'name',
        'address',
        'from',
        'to',
        'reasons',
        'type',
        'user_id',
    ];

    /**
     * @param $value
     * @return string
     */
    public function getFromAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('j-M-Y');
    }

    /**
     * @param $value
     * @return string
     */
    public function getToAttribute($value)
    {
        return $value
            ? Carbon::createFromFormat('Y-m-d', $value)->format('j-M-Y')
            : null;
    }
}
