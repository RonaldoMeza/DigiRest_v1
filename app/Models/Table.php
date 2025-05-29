<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',    // “M1”, “M2”, …
        'status',  // 'available' o 'occupied'
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
