<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";
    protected $primaryKey = "IdMenu";
    protected $fillable = ['Nombre','Url','Icono'];
    protected $guarded = ['IdMenu'];
}
