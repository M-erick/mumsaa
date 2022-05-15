<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =[
        'admission',
        'amount',
        'adminName',
        'name',
        'payment'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];

    /**
 * Concantate use first and last name
 * @return string
 */

public function getFullName() {
    return "{$this->firstName}{$this->lastName}";

}
}


