<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $fillable = ['title','slug','description','long_description','cover_image','live_url','github_url','featured','tech_stack','features','challenges','metrics','status','sort_order','category'];
    protected $casts = ['featured' => 'boolean', 'tech_stack' => 'array', 'features' => 'array', 'challenges' => 'array', 'metrics' => 'array'];
    public function screenshots() { return $this->hasMany(ProjectScreenshot::class)->orderBy('sort_order'); }
    public function getRouteKeyName() { return 'slug'; }
}
