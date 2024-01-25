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

    public static function boot() {
        parent::boot();

        // https://laracasts.com/discuss/channels/laravel/laravel-soft-delete-cascade
        // handles tag soft deleting
        // without this will get a foreign key constraint error
        self::deleting(function (Note $note) {

            foreach ($note->tag as $tag)
            {
                $tag->delete();
            }
        });
    }
}
