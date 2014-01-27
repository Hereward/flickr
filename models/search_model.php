<?php

class Search_model extends Base_model {

    public $vars, $url_params, $view, $layout, $keyword, $page;

    public function __construct($vars) {
        $this->vars = $vars;
        $this->keyword = $_GET['keyword'];
        $this->page = $_GET['page'];
    }


    public function load() {
        $params = array(
            'api_key'	=> $this->vars['api_key'],
            'method'	=> 'flickr.photos.search',
            'text'	    => $this->keyword,
            'per_page'  => 5,
            'format'	=> 'php_serial',
            'page'      => $this->page
        );

        $encoded_params = array();
        foreach ($params as $k => $v){
            $encoded_params[] = urlencode($k).'='.urlencode($v);
        }
        $url = "http://api.flickr.com/services/rest/?".implode('&', $encoded_params);
        $rsp = file_get_contents($url);
        $rsp_obj = unserialize($rsp);
        return $rsp_obj;
    }


}

