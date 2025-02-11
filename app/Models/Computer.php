<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Computer extends BaseModel
{
   
	public $model = 'Computers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['computer','active'];

	
    public function Monitor()
    {
        return $this->hasMany(Monitor::class, 'monitorId', 'id');
    }

	public static function Fields()
	{
	   return array('computer' 		=> ['type'    	  => 'input', 
											'label'  	  => 'computer',
											'placeholder' => 'Enter a computer',
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
