<?php

namespace LaravelEnso\Products\app\Http\Controllers\Products;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Init;
use LaravelEnso\Products\app\Tables\Builders\ProductTable;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = ProductTable::class;
}
