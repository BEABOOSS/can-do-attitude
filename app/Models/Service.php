<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Service extends BaseModel
{
   	public $model = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'service',
        'service_fr',
        'description',
        'description_fr',
        'active',
    ];

	public function service()
	{
		//echo app()->getLocale();
		//die();

		if ( app()->getLocale() == 'en' )
			return $this->service;
		else
			return $this->service_fr;
	}

	public static function Fields()
	{
	   return array('service' 			=> ['type' 		  => 'input',
											'label' 	  => 'service',
											'placeholder' => 'Enter a service',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

					'service_fr' 		=> ['type'    	  => 'input',
											'label'  	  => 'service',
											'placeholder' => 'Enter a french service',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],


					'description' 		=> ['type'    	  => 'textarea',
											'label'  	  => 'description',
											'placeholder' => 'Enter a description',
											'obligatory'  => 'obligatory',
											'class' 	  => 'must-have-value'],

	                'description_fr' 	=> ['type'    	  => 'textarea',
											'label'  	  => 'description',
											'placeholder' => 'Enter a french +description',
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
