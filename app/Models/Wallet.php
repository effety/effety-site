<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['user_id', 'user_type', 'currency_id', 'currency_code', 'balance'];

    /**
     * Polymorphic relationship to User or Patient.
     */
    public function user()
    {
        return $this->morphTo();
    }


    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');  // Ensure it's linked to currency_id
    }
}
