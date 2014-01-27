<?php

class Search_model extends Base_model {

    public $vars, $url_params, $view, $layout, $keyword, $page;

    public function __construct($vars) {
        $this->vars = $vars;
        //var_dump($config);
        //die();
        $this->keyword = $_GET['keyword'];
        $this->page = $_GET['page'];

        //die("KEYWORD = $this->keyword");
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

        // 'tags'	=> $this->keyword,

        //var_dump($params);
       // die();

        $encoded_params = array();

        foreach ($params as $k => $v){

            $encoded_params[] = urlencode($k).'='.urlencode($v);
        }

        $url = "http://api.flickr.com/services/rest/?".implode('&', $encoded_params);

        $rsp = file_get_contents($url);

        $rsp_obj = unserialize($rsp);

       //var_dump($rsp_obj);
        //die();

        //$obj =  $rsp_obj['photos']['photo'][0];

        //$url_t = "http://farm{$obj['farm']}.staticflickr.com/{$obj['server']}/{$obj['id']}_{$obj['secret']}_t.jpg";
        //$url_c = "http://farm{$obj['farm']}.staticflickr.com/{$obj['server']}/{$obj['id']}_{$obj['secret']}_c.jpg";

        //var_dump("$url_t \n $url_c");
        //die();

        return $rsp_obj;

    }





}

