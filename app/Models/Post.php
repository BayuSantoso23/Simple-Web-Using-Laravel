<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Model parent class will automatically connect Post to posts table
class Post extends Model{
    // If the database name is different with the model name, we can specify it here
    // protected $table = 'table name'

    // If the primary key is not id you can specify it here
    // protected $primaryKey = 'Your Primary Key'

    protected $with = ['author', 'category'];

    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void{
        $query->when(
            $filters['search'] ?? false, fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }


}

