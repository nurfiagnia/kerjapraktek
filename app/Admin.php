<?php

namespace App;

use App\User;

class Admin extends User
{
    protected $guard = 'admin';

    protected $table = 'admin_view';
}
