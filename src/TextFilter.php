<?php

namespace Reedware\NovaTextFilter;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;
use Illuminate\Container\Container;
use Laravel\Nova\Http\Requests\NovaRequest;

abstract class TextFilter extends Filter
{
    public $component = 'text-filter';

    public function options(NovaRequest $request)
    {
        //
    }
}
