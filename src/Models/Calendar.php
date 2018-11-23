<?php

namespace Cms_Framework_Seed\Calendar\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cms_Framework_Seed\Database\Model;
use Cms_Framework_Seed\Database\Traits\DateFormatter;
use Cms_Framework_Seed\Filer\Traits\Filer;
use Cms_Framework_Seed\Hashids\Traits\Hashids;
use Cms_Framework_Seed\Repository\Traits\PresentableTrait;
use Cms_Framework_Seed\User\Traits\User as UserModel;

class Calendar extends Model
{
    use Filer, SoftDeletes, Hashids, DateFormatter, PresentableTrait, UserModel;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'cms_framework_seed.calendar.calendar';

}
