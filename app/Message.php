<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name_customer', 'email_customer', 'subject', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
