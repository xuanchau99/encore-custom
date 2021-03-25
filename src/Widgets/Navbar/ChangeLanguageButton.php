<?php

namespace Encore\Admin\Widgets\Navbar;

use Encore\Admin\Admin;
use Illuminate\Contracts\Support\Renderable;

class ChangeLanguageButton implements Renderable
{
    public function render()
    {
        return Admin::component('admin::components.change-language-btn');
    }
}
