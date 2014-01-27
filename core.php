<?php

class Core  {

    public $config, $url_params, $view, $layout;

    public function __construct($config) {
        $this->config = $config;
    }

    public function init() {

      if ($this->config['debug']) {

          error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
          ini_set('display_errors', '1');
      } else {
          error_reporting(0);
      }

        $param_str = $_SERVER['REQUEST_URI'];
        $this->url_params = explode('/', $_SERVER['REQUEST_URI']);
        $this->route();


    }


    public function run() {

        $this->render_view();

        //var_dump($this->url_params);
        //die("VIEW = " . $this->view);
        //ob_start();


    }

    public function render_view() {



        $path = __DIR__."/views/layouts/$this->layout.view.php";

        //die($path);

        //ob_start();
        include $path;
        //$content = ob_get_contents();
       // ob_end_clean();

        /*

        ob_start();
        include __DIR__."/views/$this->view.view.php";
        $view = ob_get_contents();
        ob_end_clean();

        */


       // echo $content;

    }



    public function route() {
        if ($this->url_params[1] == '') {
            $this->view = 'index';
            $this->layout = 'main';
        } else {
            $this->view = $this->url_params[1];
            $this->layout = 'main';
        }

    }

}

