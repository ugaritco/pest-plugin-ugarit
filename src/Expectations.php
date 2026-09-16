<?php

declare(strict_types=1);

namespace Pest\Ugarit;

use Heritage\Support\Collection;
use Pest\Expectation;

/*
 * Asserts that the value is an instance of \Heritage\Support\Collection
 */
expect()->extend('toBeCollection', function (): Expectation {
    // @phpstan-ignore-next-line
    return $this->toBeInstanceOf(Collection::class);
});
