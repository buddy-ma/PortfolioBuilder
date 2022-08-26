<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    use HasFactory;

    public function profile(): BelongsTo
    {
        return $this->belongsTo(
            related: Profile::class,
            foreignKey: 'profile_id'
        );
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(
            related: Template::class,
            foreignKey: 'template_id'
        );
    }
}
