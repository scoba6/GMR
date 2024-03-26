<?php

namespace App\Models;

use App\Filters\ReseauFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Reseau extends Model
{
    use HasFactory, Filterable, SoftDeletes, Userstamps;

    protected string $default_filters = ReseauFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'compagnie_id',
		'agence_id',
		'codcrt',
    ];

	public function compagnie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Compagnie::class);
	}

	public function agence(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Agence::class);
	}

}
