<?php

class Search_controller extends Base_controller {

    public $vars, $url_params, $view, $layout, $model;

    public function __construct($vars) {
        $this->vars = $vars;
        $this->model = new Search_model($vars);
    }

    public function index() {
        $this->layout = 'main';
        $this->view = 'search';
        $data = $this->model->load();
        $this->render_view($data);
    }

}

