<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model {
    use HasFactory;

    protected $fillable = ['title','slug','excerpt','body','cover_image','tags','category','reading_time','published','published_at','views'];
    protected $casts = ['published' => 'boolean', 'published_at' => 'datetime', 'tags' => 'array'];
    public function scopePublished($query) { return $query->where('published', true)->whereNotNull('published_at'); }
    public function getRouteKeyName() { return 'slug'; }
}

