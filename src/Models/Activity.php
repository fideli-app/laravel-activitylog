<?php

namespace Spatie\Activitylog\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use Spatie\ActivityLog\Traits\ActivityModelTrait;
}
