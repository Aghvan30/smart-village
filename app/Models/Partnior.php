<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnior extends Model
{
    public function menus()
    {
        return $this->belongsTo(Menu::class);
    }
}
