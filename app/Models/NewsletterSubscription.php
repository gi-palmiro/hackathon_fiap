<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    protected $table = 'newsletter_subscriptions';
    protected $id = 'id';
    protected $fillable = ['name','email'];
    public $timestamps = false;
}
