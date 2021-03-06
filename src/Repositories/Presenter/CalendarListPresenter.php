<?php

namespace Cms_Framework_Seed\Calendar\Repositories\Presenter;

use Cms_Framework_Seed\Repository\Presenter\FractalPresenter;

class CalendarListPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CalendarListTransformer();
    }
}