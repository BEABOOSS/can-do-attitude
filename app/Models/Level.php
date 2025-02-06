<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Level extends BaseModel
{
   
	public $model = 'levels';

    protected $fillable = ['level', 'active'];


    public function Books()
    {
        return $this->hasMany(Book::class, 'levelId', 'id');
    }

	public static function Fields()
	{
	   return array('level' 	=> ['type' 		  => 'input', 
									'label' 	  => 'level',
									'placeholder' => 'Enter a level',
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
