<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subheader extends Model
{
    use HasFactory;

    protected $fillable =['dynamicheader_id','submenu'];

    public function dynamicheader()
    {
        return $this->belongsTo(Dynamicheader::class);
    }
}
