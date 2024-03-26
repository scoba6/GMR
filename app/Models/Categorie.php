<?php

namespace App\Models;

use App\Filters\CategorieFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Categorie extends Model
{
    use HasFactory, Filterable, SoftDeletes, Userstamps;

    protected string $default_filters = CategorieFilters::class;

    protected $table = 'branches_categories';
  


    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libcat',
		'nuordr',
		'branche_id',
    ];

	public function branche(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Branche::class, 'branche_id','id','id','branche');
	}

}
