<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyCrypto extends Model
{
  protected $fillable = [
    'crypto_name',
    'crypto_value',
    'crypto_rate',
    'brl_value',
    'crypto_address',
    'filename',
    'extension',
    'filesize',
    'user_id',
    'confirmation_time',
    'status',
  ];
}
