<?php

namespace Reedware\NovaTextFilter;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;
use Illuminate\Container\Container;

abstract class TextFilter extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'text-filter';

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function options(Request $request)
    {
        //
    }
}
