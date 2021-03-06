<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Keys extends Model {

	protected $table = 'keys';

	protected $fillable = [
	    'unique_id',
        'type_id',
        'user_id',
        'active',
        'key',
        'ips',
        'check_login'
    ]; // every field to fill



}
