<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoNews extends Model
{
    use HasFactory;

    protected $table = 'contato_news';

    protected $fillable = ['emailContato'];
}
