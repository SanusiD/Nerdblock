<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $primaryKey = 'customerSubID';
    protected $tableName = 'customerSubscription';
}
