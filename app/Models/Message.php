<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Message extends Model
{
    use HasFactory;
    protected $table='messages';
    protected $primaryKey='id';
    protected $fillable =['code','objet','contenue','expediteur_id','registre_id','destinataire_id'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
