<?php

namespace App\Models;

use App\Filters\AgenceFilters;
use Wildside\Userstamps\Userstamps;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    use HasFactory, Filterable, SoftDeletes, Userstamps;

    protected string $default_filters = AgenceFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'codage',
		'libage',
        'estsie'
    ];

    /**
     * Get the societe that owns the Agence
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function societe(): BelongsTo
    {
        return $this->belongsTo(Societe::class, 'foreign_key', 'other_key');
    }
    /**
     * Get all of the compagnies for the Agence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compagnies(): HasMany
    {
        return $this->hasMany(Compagnie::class, 'foreign_key', 'local_key');
    }


}
