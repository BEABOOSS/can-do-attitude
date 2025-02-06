<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Book extends BaseModel
{
   
	public $model = 'books';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name','levelId','active'];

	
    public function Level()
    {
        return $this->hasOne(Level::class, 'id', 'levelId');
    }

	public static function Fields()
	{
	   return array('name' 		=> ['type'    	  => 'input', 
											'label'  	  => 'name',
											'placeholder' => 'Enter a name',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],
									
									
					'levelId' 			=> ['type'    	  => 'select', 
											'label'  	  => 'levelId',
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
