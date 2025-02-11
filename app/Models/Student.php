<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends BaseModel
{
   
	public $model = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name','teacherId','active'];

	
    public function Teacher()
    {
        return $this->hasOne(Teacher::class, 'id', 'teacherId');
    }

	public static function Fields()
	{
	   return array('name' 		=> ['type'    	  => 'input', 
											'label'  	  => 'name',
											'placeholder' => 'Enter a name',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
									
									
					'teacherId' 			=> ['type'    	  => 'select', 
											'label'  	  => 'teacherId',
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
