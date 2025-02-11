<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Monitor extends BaseModel
{
   
	public $model = 'monitors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['monitor','computerId','active'];

	
    public function Computer()
    {
        return $this->hasOne(Computer::class, 'id', 'computerId');
    }

	public static function Fields()
	{
	   return array('monitor' 		=> ['type'    	  => 'input', 
											'label'  	  => 'monitor',
											'placeholder' => 'Enter a monitor',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
									
									
					'computerId' 			=> ['type'    	  => 'select', 
											'label'  	  => 'computerId',
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
