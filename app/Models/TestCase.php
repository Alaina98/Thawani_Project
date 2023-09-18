<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCase extends Model
{
    protected $table = 'test_case';
        protected $primaryKey = 'id';
         protected $fillable = [
            'user_id',
              'title',
              'Type',
              'parent_testcase_id',
          ];
    use HasFactory;
}
