<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectCategory extends Model
{
    use HasFactory;

    public function projects(): HasMany
    {
        return $this->hasMany(
            related: Project::class,
            foreignKey: 'profile_id',
        );
    }
}
