<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = [
        'name',
        'province_id'
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'provinceId');
    }

    public function wards(): HasMany
    {
        return $this->hasMany(Ward::class, 'districtId');
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'districtId');
    }
}
