<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getData()
    {
        $txt = $this->created_at . $this->content;
        return $txt;
    }
}
