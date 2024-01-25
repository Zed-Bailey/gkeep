<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Note extends Model
{
    use HasFactory;

    public static $noteColours = [
        'slate',
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

    public function tag(): HasMany {
        return $this->hasMany(Tag::class);
    }
}
