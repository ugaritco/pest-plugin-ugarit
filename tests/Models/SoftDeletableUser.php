<?php

namespace Tests\Models;

use Heritage\Database\Eloquent\Model;
use Heritage\Database\Eloquent\SoftDeletes;

class SoftDeletableUser extends Model
{
    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
