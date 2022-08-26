<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;

    public function profile(): HasOne
    {
        return $this->hasOne(
            related: Profile::class,
            foreignKey: 'template_id',
        );
    }
}
