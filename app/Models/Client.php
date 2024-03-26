<?php

namespace App\Models;

use App\Filters\ClientFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Client extends Model
{
    use HasFactory, Filterable, SoftDeletes, Userstamps;

    protected string $default_filters = ClientFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'titclt',
		'rsnclt',
		'telclt',
		'maiclt',
		'adrclt',
		'cptaux',
		'agence_id',
    ];

	public function agence(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Agence::class);
	}

}
