<?php

namespace Spatie\Activitylog\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use \Spatie\ActivityLog\Traits\ActivityModelTrait
    {
        __construct as private _activityModelTraitConstructor;
    }
    
    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->_activityModelTraitConstructor($attributes, __CLASS__);
    }
}
