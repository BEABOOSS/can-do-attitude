<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CustomerMargin extends BaseModel
{
   
	public $model = 'customer-margins';	

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['customer_id', 'customer','letter', 'envelope', 'box', 'pallet', 'truckload', 'active'];



	public static function Fields()
	{
	   return array('customer_id' 		=> ['type'    	  => 'select', 
											'label'  	  => 'customer Id',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

					// 'customer' 			=> ['type'    	  => 'input', 
					// 						'label'  	  => 'customer',
					// 						'placeholder' => 'Enter letter margin',
					// 						'obligatory'  => 'obligatory',
					// 						'class' 	  => 'must-have-value'],
						
					'letter' 			=> ['type'    	  => 'input', 
											'label'  	  => 'letter',
											'placeholder' => 'Enter letter margin',
											'default' => '0.2',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
															
									
					'envelope' 			=> ['type'    	  => 'input', 
											'label'  	  => 'envelop',
											'placeholder' => 'Enter envelop margin',
											'default' => '0.2',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
									
					'box' 				=> ['type'    	  => 'input', 
											'label'  	  => 'box',
											'placeholder' => 'Enter box margin',
											'default' => '0.2',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

					'pallet' 			=> ['type'    	  => 'input', 
											'label'  	  => 'pallet',
											'placeholder' => 'Enter pallet margin',
											'default' => '0.2',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

					'truckload' 		=> ['type'    	  => 'input', 
											'label'  	  => 'truckload',
											'placeholder' => 'Enter truckload margin',
											'default' => '0.2',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
									

	   
					'active' 			=> ['type' 	 	  => 'boolean', 
											'label' 	  => 'active',
											'text' 		  => 'active',
											'default' 	  => '1',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value']);
   }

   
}
