<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_name',
        'image',
        'description',
        'location',
        'size',
        'type'
    ];

    public function landLord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }
}
