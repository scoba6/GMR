<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class CategorieFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
