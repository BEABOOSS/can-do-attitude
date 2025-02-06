<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Car extends BaseModel
{
   
	public $model = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['makeId','brand','year','active'];

	
    public function Make()
    {
        return $this->hasOne(Make::class, 'id', 'makeId');
    }

	public static function Fields()
	{
	   return array('makeId' 			=> ['type' 		  => 'select', 
											'label' 	  => 'make',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
	   
					'brand' 		=> ['type'    	  => 'input', 
											'label'  	  => 'model',
											'placeholder' => 'Enter a french model',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
									
									
					'year' 			=> ['type'    	  => 'input', 
											'label'  	  => 'year',
											'placeholder' => 'Enter a year',
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
