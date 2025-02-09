<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Company extends BaseModel
{
   
	public $model = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['company','phone_number', 'address','active'];



	public static function Fields()
	{
	   return array('company' 		=> ['type'    	  => 'input', 
											'label'  	  => 'company',
											'placeholder' => 'Enter your company',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

					// 'phone_number' 		=> ['type'    	  => 'tel', 
					// 						'label'  	  => 'phone number',
					// 						'placeholder' => '514-123-1234',
					// 						'pattern'	=> '[0-9]{3}-[0-9]{3}-[0-9]{4}',
					// 						'obligatory'  => 'obligatory',
					// 						'class' 	  => 'must-have-value'],
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
