<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hero extends Model
{
    use HasFactory;

    public function projects_categories(): BelongsTo
    {
        return $this->belongsTo(
            related: Profile::class,
            foreignKey: 'profile_id',
        );
        
    }
}
