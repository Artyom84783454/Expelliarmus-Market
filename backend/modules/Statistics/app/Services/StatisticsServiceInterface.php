<?php

namespace Modules\Statistics\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface StatisticsServiceInterface
{
    /**
     * Initiate model(s).
     *
     * @param  array|string<Model>  $model
     * @return StatisticsServiceInterface
     */
    public function for(array|string $model): StatisticsServiceInterface;

    /**
     * Apply all handlers to model(s) and retrieve information.
     *
     * @param  array<StatisticsHandlerInterface>  $handlers
     * @return Collection
     */
    public function apply(array $handlers): Collection;
}