<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // sử dụng trait HasFactory để hỗ trợ khởi tạo đối tượng
    use HasFactory;
    protected $guarded=[];
    // cho phép các thuộc tính của model có thể được gán giá trị từ bất kỳ đầu vào nào
}
