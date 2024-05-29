<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkiraan_model extends Model
{
    use HasFactory;
    protected $table="perkiraan";
    protected $primaryKey="PerkiraanID";

    public $timestamps = false;

}
