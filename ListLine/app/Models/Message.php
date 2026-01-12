<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =
    [
        "transmissor_id",
        "receiver_id",
        "header",
        "body",
        'image',
    ];

    public function transmissor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'transmissor_id', 'id');
    }
    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
}
