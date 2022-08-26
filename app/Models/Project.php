<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    public function projects_categories(): BelongsTo
    {
        return $this->belongsTo(
            related: ProjectCategory::class,
            foreignKey: 'project_categories_id',
        );
        
    }
}
