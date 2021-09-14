<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketActivity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity',
        'ticket_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticket_id' => 'integer',
    ];


    public function ticket()
    {
        return $this->belongsTo(\App\Models\Ticket::class);
    }

    public function ticket()
    {
        return $this->belongsTo(\App\Models\Ticket::class);
    }
}
