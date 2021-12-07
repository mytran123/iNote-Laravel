<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Note extends Model
{
    use HasFactory;
    protected $fillable = ["category","title","content"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
