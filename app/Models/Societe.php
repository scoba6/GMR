<?php

namespace App\Models;

use App\Filters\SocieteFilters;
use Wildside\Userstamps\Userstamps;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Societe extends Model
{
    use HasFactory, Filterable,SoftDeletes,Userstamps;

    protected string $default_filters = SocieteFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'codsoc',
        'rsnsoc',
        'nifsoc',
        'rcmsoc',
        'adrsoc',
        'logsoc',
    ];

    /**
     * Get all of the agences for the Societe
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agences(): HasMany
    {
        return $this->hasMany(Agence::class, 'foreign_key', 'local_key');
    }


}
