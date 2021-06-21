<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link', 'parent_id','image'];
    protected $table = "menus";

    public function childs()
    {
        return $this->hasMany(self::class, 'parent_id', 'id')->with('childs');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function allchildren()
    {
        return $this->hasMany(self::class, 'id', 'parent_id')
            ->with('allchildren');
    }

    public function page()
    {
        return $this->hasMany(Page::class, 'menu_id', 'id');

    }
    public function partnior()
    {
        return $this->hasMany(Partnior::class,'id');

    }
}
