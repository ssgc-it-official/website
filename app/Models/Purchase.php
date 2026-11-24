<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Purchase extends Model
{
    protected $table = 'tbl_purchase';

    protected $connection = 'mysql_old';

    /**
     * @param $value
     * @return string
     */
    public function getBidDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
    }

    /**
     * @param $value
     * @return void
     */
    public function setBidDateAttribute($value)
    {
        $this->attributes['bid_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }

    /**
     * @param $value
     * @return string
     */
    public function getIssueDateAttribute($value)
    {
        if ($value) {
            return Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
        }
    }

    /**
     * @param $value
     * @return void
     */
    public function setIssueDateAttribute($value)
    {
        if ($value) {
            $this->attributes['issue_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    /**
     * @return HasMany
     */
    public function purchaseDocuments(): HasMany
    {
        return $this->hasMany(PurchaseDocument::class, 'purchase_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function purchaseDetail(): HasMany
    {
        return $this->hasMany(PurchaseDetail::class, 'purchase_id', 'id');
    }

}
