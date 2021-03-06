<?php

namespace App\Models\Subscriptions;

use App\Models\Profiles\User;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'name','user_id','subscription_type_id','actual_price','expired_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function subscriptionType()
    {
        return $this->belongsTo(SubscriptionType::class, 'subscription_type_id', 'id');
    }
}
