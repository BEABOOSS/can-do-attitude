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
    protected $fillable = ['customer','phone_number', 'address','active'];



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
