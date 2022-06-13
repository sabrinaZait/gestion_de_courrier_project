<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Structure extends Model
{
    use HasFactory;
    protected $table='structures';
    protected $primaryKey='id';
    protected $fillable =['code','designiation'];
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
