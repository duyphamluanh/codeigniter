<?php

namespace App\Libraries;

use Smarty\Smarty as SmartyBase;

class Smarty extends SmartyBase
{
    public function __construct()
    {
        parent::__construct();

        // Set the template directory
        $this->setTemplateDir(APPPATH . 'Views');

        // Set the compile directory
        $this->setCompileDir(WRITEPATH . 'cache/smarty/compiled');

        // Set the cache directory
        $this->setCacheDir(WRITEPATH . 'cache/smarty/cache');
    }
}