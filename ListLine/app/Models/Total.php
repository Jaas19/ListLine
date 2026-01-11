<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $fillable = [
        'type_id',
        'user_id',
        'program_id',
        'day',
        'amount'
    ];
    public function totalType(): BelongsTo
    {
        return $this->belongsTo(TotalType::class, 'type_id', 'id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }
}
