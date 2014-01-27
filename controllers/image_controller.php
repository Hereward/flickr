<?php

class Image_controller extends Base_controller {

    public $vars, $url_params, $view, $layout, $model;

    public function __construct($vars) {
        $this->vars = $vars;
    }

    public function index() {
        $this->layout = 'main';
        $this->view = 'image';
        $this->render_view();
    }


}

