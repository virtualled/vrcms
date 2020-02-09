<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public $fillable = [
        'user_id',
        'type_game_id',
        'date_booking',
        'date_visit',
        'time_visit',
        'game_id',
        'book_method_id',
        'amount_visitors',
        'price_start',
        'promocode',
        'sertificate',
        'price_final',
        'prepaid',
        'local_payment',
        'method_payment',
        'phone',
        'email',
        'found_us',
        'reason_visit',
        'comment',
        'staff',
    ];

    public function TypeGame(){
      return  $this->belongsTo('App\TypeGame');
    }
    public function game(){
        return $this->belongsTo('App\Game');
    }
    public function BookMethod(){
        return $this->belongsTo('App\BookMethod');
    }
    public function PaymentMethod(){
        return $this->belongsTo('App\PaymentMethod');
    }
}
