<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trialbalance extends Model
{
        protected $fillable = ['year', 'coa', 'description', 'seo', 'comments',
        'debit-credit', 'amount'];

}
