<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellCrypto extends Model
{
    protected $fillable = [
      'crypto_name',
      'crypto_value',
      'crypto_rate',
      'brl_value',
      'crypto_adress',
      'bank_name',
      'ag_number',
      'acc_number',
      'status',
      'confirmation_time'
    ];
}
