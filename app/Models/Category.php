<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'category';

    // Kolom yang dapat diisi
    protected $fillable = ['category_name', 'slug'];

    public function categories(): HasMany{
        return $this->hasMany(Post::class, 'category_id');
    }
}
