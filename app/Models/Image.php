<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    /**
     * Get the parent imageable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    /** @var array<string> $fillable */
    protected $fillable = [
        'filename',
        'path',
        'extension',
        'size',
    ];
}
