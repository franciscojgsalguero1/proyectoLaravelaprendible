<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $table = 'projects';
    // permitimos la asignación masiva a los parámetros del array fillable
    //protected $fillable = ['title', 'url', 'description'];
    // guarded impide la asignación masiva a los parámetros del array
    // si está vacío pues permitimos la asignación masiva a todos
    protected $guarded = [];
    
    
    public function getRouteKeyName() {
        // buscamos en la ruta por la url en vez de por el id
        return 'url';
    }
}
