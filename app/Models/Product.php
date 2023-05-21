<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    /**
     * A BelongsTo Relation to the \App\Models\Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A MorphToMany Relation to the \App\Models\Image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function images(): MorphToMany
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    /** @var array<string> $fillable */
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
    ];
}
