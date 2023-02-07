<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dynamicheader extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function subheader()
    {
        return $this->hasMany(Subheader::class);
    }

}
