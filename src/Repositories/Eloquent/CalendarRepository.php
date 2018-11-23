<?php

namespace Cms_Framework_Seed\Calendar\Repositories\Eloquent;

use Cms_Framework_Seed\Calendar\Interfaces\CalendarRepositoryInterface;
use Cms_Framework_Seed\Repository\Eloquent\BaseRepository;

class CalendarRepository extends BaseRepository implements CalendarRepositoryInterface
{
    /**
     * Booting the repository.
     *
     * @return null
     */
    public function boot()
    {
       
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        $this->fieldSearchable = config('cms_framework_seed.calendar.calendar.search');
        return config('cms_framework_seed.calendar.calendar.model');
    }


}
