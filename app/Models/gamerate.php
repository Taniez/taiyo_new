<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gamerate extends Model
{
    public function gamerate(){
        return $this->belongsTo(game::class);  
    }
    use HasFactory;
    use SoftDeletes;

}
