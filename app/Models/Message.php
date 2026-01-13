<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'phone_number',
        'email_content',
        'full_name',
        'message_content',
        'reply_default_message',
    ];
  

}
