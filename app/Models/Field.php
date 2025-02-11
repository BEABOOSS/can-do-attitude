<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Make;
use App\Models\Customer;

class Field extends Model
{
   public static function createField($name, $info, $value = null)
   {
	   
      if ( $info['type'] == 'input' )
      {

         $input = '<fieldset data="' . $name . ' ' . $value . '">';

         $input .= '<label>' . $name . '</label>';

         if (!is_null($value))
            $input .= '<input value="' . $value . '" type="text" name="' . $name . '" >';
         else if (array_key_exists('default', $info))
            $input .= '<input type="text" value="' . $info['default'] . '" name="' . $name . '">';
         else
            $input .= '<input type="text" name="' . $name . '">';

         $input .= '</fieldset>';

         return $input;
      }
      else if ( $info['type'] == 'tel' )
      {

         $input = '<fieldset data="' . $name . ' ' . $value . '">';

         $input .= '<label>' . $name . '</label>';

         if (!is_null($value))
            $input .= '<input value="' . $value . '" type="tel" name="' . $name . '" placeholder=" '. $name .'" pattern="'. $name.'">';
         else
            $input .= '<input type="tel" name="' . $name . '" placeholder="'.$info.'" pattern="'.$name.'">';

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

         $boolean = '<div class="flx-cc mtb-20">';

         if ( is_null($value) || $value == '0')
            $boolean .= '<button class="btn btn-primary">NOT ACTIVE</button>';
         else
            $boolean .= '<button class="btn btn-secondary">ACTIVE</button>';

         $boolean .= '</div>';

         return $boolean;

      }

      else if ( $info['type'] == 'select' )
      {
         //echo $name;
         //die();
         $select = '<fieldset>';

         $select .= '<label>' . $name . '</label>';

         $select .= '<select name="' . $name . '" class="custom-select">';

         if ($name == 'makeId')
         {

            foreach( Make::active() as $Make )
            {
               $select .= '<option value="' . $Make->id . '">' . $Make->make . '</option>';
            }

         } else if ($name == 'levelId'){

            foreach( Level::active() as $Level )
            {
               $select .= '<option value="' . $Level->id . '">' . $Level->level . '</option>';
            }
            
         } else if ($name == 'customer_id'){

            foreach( Customer::active() as $Customer )
            {
               $select .= '<option value="' . $Customer->id . '">' . $Customer->customer . '</option>';
            }
            
         } 
          else if ($name == 'teacherId'){

               foreach( Teacher::active() as $Teacher )
               {
                  $select .= '<option value="' . $Teacher->id . '">' . $Teacher->teacher . '</option>';
               }
               
            } 
          else if ($name == 'computerId'){

               foreach( Computer::active() as $Computer )
               {
                  $select .= '<option value="' . $Computer->id . '">' . $Computer->computer . '</option>';
               }
               
            } 

         $select .= '</select>';

         $select .= '</fieldset>';
         
         echo $select;

      } else if ($info['type'] == 'button'){

         // $button = '<fieldset>'

         // $button .= '<div><a href="administration/' . $this->model . '/' . $this->id . '/edit"><button class="btn btn-secondary">EDIT</button></a></div>'; 

         // $button .= '</fieldset>'

         // return $button;

      }

     

   }
   
}
