<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];
    public function photos(){
        return $this->belongsToMany(Photo::class);
    }
}
