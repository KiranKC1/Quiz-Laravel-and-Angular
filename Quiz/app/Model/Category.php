<?php

namespace App\Model;

use App\Model\Information;
use App\Model\Question;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];
  public function informations()
  {
      return $this->hasMany(Information::class);
  }
  public function questions()
  {
      return $this->hasMany(Question::class);
  }
}
