<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courrier extends Model
{
    use HasFactory;
    
    protected $table = 'courriers';
    protected $primaryKey = 'id';
    protected $fillable = ['objet','expediteur','distinataire','date_envoi'];
}
