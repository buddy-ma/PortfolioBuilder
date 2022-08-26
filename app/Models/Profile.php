<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'bio',
        'user_id',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(
            related: Experience::class,
            foreignKey: 'profile_id',
        );
    }
    
    public function projects_categories(): HasMany
    {
        return $this->hasMany(
            related: ProjectCategory::class,
            foreignKey: 'profile_id',
        );
    }

    public function projects(): HasMany
    {
        return $this->hasMany(
            related: Project::class,
            foreignKey: 'profile_id',
        );
    }

    public function hero(): HasOne
    {
        return $this->hasOne(
            related: Hero::class,
            foreignKey: 'profile_id',
        );
    }

    public function template(): HasOne
    {
        return $this->hasOne(
            related: Template::class,
            foreignKey: 'template_id'
        );
    }
}
