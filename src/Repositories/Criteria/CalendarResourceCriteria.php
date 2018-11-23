<?php

namespace Cms_Framework_Seed\Calendar\Repositories\Criteria;

use Cms_Framework_Seed\Repository\Contracts\CriteriaInterface;
use Cms_Framework_Seed\Repository\Contracts\RepositoryInterface;

class CalendarResourceCriteria implements CriteriaInterface
{

    public function apply($model, RepositoryInterface $repository)
    {
        $start = request()->input('start');
        $end   = request()->input('end' );
        $model = $model
            ->where('user_id', '=', user_id())
            ->where('user_type', '=', user_type())
            ->whereBetween('start', [$start, $end]);
        return $model;
    }
}
