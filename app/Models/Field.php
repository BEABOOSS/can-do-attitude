<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Field extends Model
{
   public static function createField($name, $info, $value = null)
   {
	   
      if ( $info['type'] == 'input' )
      {

         $input = '<fieldset data="' . $name . ' ' . $value . '">';

         $input .= '<label>' . $name . '</label>';

         if (!is_null($value))
            $input .= '<input value="' . $value . '" type="text" name="' . $name . '">';
         else
            $input .= '<input type="text" name="' . $name . '">';

         $input .= '</fieldset>';

         return $input;
      }

      else if ( $info['type'] == 'textarea' )
      {

         $textarea = '<fieldset>';

         $textarea .= '<label>' . $name . '</label>';

         $textarea .= '<textarea name="' . $name  . '"></textarea>';

         $textarea .= '</fieldset>';

         return $textarea;
      }

      else if ( $info['type'] == 'boolean' )
      {

         $boolean = '<fieldset>';

         if ( is_null($value) || $value == '0')
            $boolean .= '<button class="btn btn-primary">NOT ACTIVE</button>';
         else
            $boolean .= '<button class="btn btn-secondary">ACTIVE</button>';

         $boolean .= '</fieldset>';

         return $boolean;

      }

     

   }
   
}
