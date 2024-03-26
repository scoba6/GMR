<?php

namespace App\Models;

use App\Filters\BrancheFilters;
use Wildside\Userstamps\Userstamps;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branche extends Model
{
    use HasFactory, Filterable, SoftDeletes, Userstamps;

    protected string $default_filters = BrancheFilters::class;
    
    
    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libbrc',
    ];

    /**
     * Get all of the branches for the Branche
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categorie(): HasMany
    {
        return $this->hasMany(Categorie::class, 'id', 'branche_id');
    }


}
