<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessUpload extends Model
{
    //
    protected $fillable = [

        'vendor_id', 'bank_proof','cr_document','merchant_document','trade_document','computer_document','authorised_document'

    ]; 
}
