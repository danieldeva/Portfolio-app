<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model {
    protected $fillable = ['title','company','company_url','location','start_date','end_date','is_current','description','achievements','technologies','employment_type','sort_order'];
    protected $casts = [
        'is_current' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
        'achievements' => 'array',
        'technologies' => 'array',
    ];
    public function getDurationAttribute(): string {
        $start = $this->start_date;
        $end = $this->is_current ? now() : $this->end_date;
        $months = $start->diffInMonths($end);
        if ($months < 12) return $months . ' months';
        $years = floor($months / 12);
        $rem = $months % 12;
        return $years . 'y' . ($rem > 0 ? ' ' . $rem . 'm' : '');
    }
}
