<?php

namespace App\Models;

use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'exerpt', 'body', 'slug'];
    protected $guarded = ['id'];

    // protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
