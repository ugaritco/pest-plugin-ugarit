<?php

use PHPUnit\Framework\ExpectationFailedException;
use Tests\Models\User;

use function Pest\Ugarit\assertDatabaseMissing;

test('pass', function () {
    assertDatabaseMissing('users', ['id' => 1]);
});

test('fails', function () {
    $user = User::create([
        'name' => 'test user',
        'email' => 'email@test.xx',
        'password' => Hash::make('password'),
    ]);

    assertDatabaseMissing('users', ['id' => $user->id]);
})->throws(ExpectationFailedException::class);
