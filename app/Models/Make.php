<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Make extends BaseModel
{
   
	public $model = 'makes';

    protected $fillable = ['make', 'active'];


    public function Cars()
    {
        return $this->hasMany(Car::class, 'makeId', 'id');
    }

	public static function Fields()
	{
	   return array('make' 		=> ['type' 		  => 'input', 
									'label' 	  => 'make',
									'placeholder' => 'Enter a make',
									'obligatory'  => 'obligatory',
									'class' 	  => 'must-have-value'],	              		    
	   
					'active' 	=> ['type' 	 	  => 'boolean', 
									'label' 	  => 'active',
									'text' 		  => 'active',
									'default' 	  => '1',
									'obligatory'  => 'obligatory',
									'class' 	  => 'must-have-value']);
   }

   
}
