<?php

namespace Application\Controllers;

use System\Core\View;

class Page extends Main
{
    public function __construct()
    {
        parent::__construct();
    }

    public function action_index()
    {
        $data['title'] = $this->language->get('page');

        $data['styles_vendor'] = $this->styles_vendor;
        $data['scripts_vendor'] = $this->scripts_vendor;
        $data['styles'] = array();
        $data['scripts'] = array();

        $data['lng'] = $this->lng;

        View::render('templates/header', $data);
        View::render('page', $data);
        View::render('templates/footer', $data);
    }

    public function action_another()
    {
        $data['title'] = $this->language->get('page_another');

        $data['styles_vendor'] = $this->styles_vendor;
        $data['scripts_vendor'] = $this->scripts_vendor;
        $data['styles'] = array();
        $data['scripts'] = array();

        $data['lng'] = $this->lng;

        View::render('templates/header', $data);
        View::render('page_another', $data);
        View::render('templates/footer', $data);
    }

}
