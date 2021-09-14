<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'open',
        'ticket_type_id',
        'subject',
        'escalated',
        'opened_by',
        'opened_for',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'open' => 'boolean',
        'ticket_type_id' => 'integer',
        'escalated' => 'integer',
        'opened_by' => 'integer',
        'opened_for' => 'integer',
    ];


    public function ticketType()
    {
        return $this->belongsTo(\App\Models\TicketType::class);
    }

    public function ticketType()
    {
        return $this->belongsTo(\App\Models\TicketType::class);
    }

    public function escalated()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function openedBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function openedFor()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function ticketActivities()
    {
        return $this->hasMany(\App\Models\TicketActivity::class);
    }
}
