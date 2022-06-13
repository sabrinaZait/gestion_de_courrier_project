<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure_user extends Model
{
    use HasFactory;
    protected $table='structure_user';
    protected $foreignKey='structure_id';
}
