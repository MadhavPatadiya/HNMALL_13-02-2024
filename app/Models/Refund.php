<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $table = 'refunds';

    protected $fillable = ['user_id', 'date', 'refund_amount', 'status','jaamin_nam','login_id'];

}
