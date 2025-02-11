<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BaseModel extends Model
{

   public static function active()
   {
	   return static::where('active', 1)->get();
   }

   public function items()
   {

      $items = '<div class="two-cols">';
      
      $items .= '<div class="flx-cs">' . $this->title . '</div>';

      
      $items .= '<div><a href="administration/' . $this->model . '/' . $this->id . '/edit"><button class="btn btn-secondary">EDIT</button></a></div>';   
   
      
      
      $items .= '</div>';

      return $items;
   }

   
}
