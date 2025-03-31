<?php
namespace App\Models;
use \App\Models\Event as Event;
class event extends Model
{
    public $table = 'event';
    public $timestamps = false;
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'start' => 'string',
        'end' => 'string',
        'venue' => 'string'
    ];
}