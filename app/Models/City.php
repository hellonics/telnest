<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    // protected $table = 'cities'; dilakukan jika nama model dan table berbeda

    protected $fillable = ['name', 'photo'];
    // fillable adalah kolom table yg boleh diisi

    protected $guarded = ['id'];
    // guarded kebalikan dari fillable

    public function houtel()
    {
        return $this->hasMany(Houtel::class, 'cities_id', 'id');
    }

}
