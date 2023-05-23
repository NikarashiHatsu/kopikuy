<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    /** @var array<string> $fillable */
    protected $fillable = [
        'key',
        'coltypes',
        'props',
    ];

    /** @var array<string, string> $casts */
    protected $casts = [
        'coltypes' => 'array',
        'props' => 'array',
    ];
}
