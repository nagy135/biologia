<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    // RELATIONS
    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
