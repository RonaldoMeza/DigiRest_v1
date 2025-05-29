<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',     // quien hizo la reserva
        'table_id',    // mesa asignada
        'guests',      // número de comensales
        'status',      // pending, confirmed, cancelled
        'starts_at',   // inicio de la reserva
        'ends_at',     // fin de la reserva (nullable)
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    // Boot para actualizar el estado de la mesa
    protected static function booted()
    {
        static::created(function ($r) {
            $r->table->update(['status' => 'occupied']);
        });

        static::deleted(function ($r) {
            $r->table->update(['status' => 'available']);
        });

        static::updated(function ($r) {
            // Si cambias a 'cancelled', liberar la mesa
            if ($r->status === 'cancelled') {
                $r->table->update(['status' => 'available']);
            }
        });
    }

    /**
     * Accesor para obtener la duración en minutos.
     */
    public function getDurationInMinutesAttribute()
    {
        return Carbon::parse($this->ends_at)
                    ->diffInMinutes(Carbon::parse($this->starts_at));
    }

}
