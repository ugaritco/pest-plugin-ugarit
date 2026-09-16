<?php

use function Pest\Ugarit\startSession;

startSession(['foo' => 'bar'])->assertGuest();
