<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialReport extends Model
{
    protected $fillable = [
        'year',
        'period_title',
        'document_title',
        'file_path',
        'sort_order',
        'user_id',
    ];
}
