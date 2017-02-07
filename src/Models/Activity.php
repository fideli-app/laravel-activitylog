<?php

namespace Spatie\Activitylog\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Interfaces\ActivityModelInterface;

class Activity extends Model implements ActivityModelInterface
{
    use \Spatie\ActivityLog\Traits\ActivityModelTrait;
}
