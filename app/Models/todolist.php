<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required|max:20',
    );
    public function getData()
    {
        return $this->id . $this->created_at . $this->content;
    }
}
