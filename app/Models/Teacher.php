<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Teacher extends BaseModel
{
   
	public $model = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['teacher','active'];

	
   
    public function Students()
    {
        return $this->hasMany(Student::class, 'teacherId', 'id');
    }

	public static function Fields()
	{
	   return array('teacher' 		=> ['type'    	  => 'input', 
											'label'  	  => 'teacher',
											'placeholder' => 'Enter a teacher',
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
