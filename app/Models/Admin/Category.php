<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
