<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'user_id',
    ];
    public static function showPost()
    {
        return self::with('user')->paginate(3);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function search($input)
    {
        return self::where('title', 'LIKE', '%' . $input . '%')->with('user')->paginate(3);
    }
}
