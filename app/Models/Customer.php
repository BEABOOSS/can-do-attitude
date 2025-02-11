<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Customer extends BaseModel
{
   
	public $model = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['customer','phone_number', 'address', 'active'];

    public function items()
   {

      $items = '<div class="three-cols">';
      //  
      $items .= '<div class="flx-cs">' . $this->title . '</div>';


      $items .= '<div class="flx-cc">';
      $items .= '    <button data-id="'. $this->id .'" class="btn btn-primary btn-margins">MARGINS</button>';
      $items .= '</div>';

      
      $items .= '<div class="flx-ce">';
      $items .= '    <a href="administration/' . $this->model . '/' . $this->id . '/edit">';
      $items .= '       <button class="btn btn-secondary">EDIT</button>';
      $items .= '    </a>';
      $items .= '</div>';   
   
      
      
      $items .= '</div>';

      return $items;
   }

	public static function Fields()
	{
	   return array('customer' 		=> ['type'    	  => 'input', 
											'label'  	  => 'customer',
											'placeholder' => 'Enter a customer',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

					'phone number' 		=> ['type'    	  => 'input',
											'label'  	  => 'phone number',
											'placeholder' => 'Enter your phone number',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
															
									
					'address' 			=> ['type'    	  => 'input', 
											'label'  	  => 'address',
											'placeholder' => 'Enter your address',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],   
	   
					'active' 		=> ['type' 	 	  => 'boolean', 
											'label' 	  => 'active',
											'text' 		  => 'active',
											'default' 	  => '1',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value']);
   }

   
}
