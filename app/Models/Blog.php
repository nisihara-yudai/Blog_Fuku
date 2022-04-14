<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model //modelを引き継いだBlogというclassが
{
    use HasFactory;

    // テーブル名を命名して紐付ける
    protected $table = 'blogs';

    // 可変項目
    protected $fillable = 
    [
        'title',
        'content'
    ];

}
