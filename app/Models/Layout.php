<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layout extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    /** @var array<string> $fillable */
    protected $fillable = [
        'name',
        'grid_w',
        'grid_h',
        'is_active',
    ];
}
