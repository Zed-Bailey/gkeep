<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public static $noteColours = [
        'white',
        'yellow',
        'pink',
        'red',
        'green',
        'blue',
        'orange',
        'cyan',
        'teal'
    ];

    protected $fillable = [
        'title',
        'body',
        'colour'
    ];

    /**
     * get the user this note belongs to
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
