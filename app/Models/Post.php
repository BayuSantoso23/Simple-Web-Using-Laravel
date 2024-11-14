<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// Model parent class will automatically connect Post to posts table
class Post extends Model{
    // If the database name is different with the model name, we can specify it here
    // protected $table = 'table name'

    // If the primary key is not id you can specify it here
    // protected $primaryKey = 'Your Primary Key'

    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}

