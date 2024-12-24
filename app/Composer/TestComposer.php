<?php

namespace App\Composer;

use Illuminate\View\View;

class TestComposer
{
public function compose(View $view)
{
    $count=100;
    $view->with('count',$count);
}


}
