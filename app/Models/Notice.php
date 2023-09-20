<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';
  protected $primaryKey = 'id';
   protected $fillable = [
        'user_id',
        'Note_id',
        'status',
        'mention',
        'comment',
        'screenshot',
        'priority',
        'summary',
    ];
    use HasFactory;
}
