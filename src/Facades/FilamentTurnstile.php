<?php

namespace Afatmustafa\FilamentTurnstile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Afatmustafa\FilamentTurnstile\FilamentTurnstile
 */
class FilamentTurnstile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Afatmustafa\FilamentTurnstile\FilamentTurnstile::class;
    }
}
