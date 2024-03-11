<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'Num_Client';
    protected $table = 'clients';
    protected $fillable = ['Nom_Client', 'Pre_Client'];
}
