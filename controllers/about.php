<?php
Class About extends Theme {
    public static $page_data = array('title' => 'About');
    public static $partial = 'about';
    public static function init_data() {
        global $config;
        parent::init_data();
        parent::$data['title'] = GetPageTitle(self::$partial);
        parent::$data['keywords'] = GetPageKeyword(self::$partial);
        parent::$data['description'] = GetPageDescription(self::$partial);
        // if (isset(self::$page_data['title']) && self::$page_data['title'] !== '') {
        //     parent::$data['title'] = ucfirst(__('About')) . ' . ' . $config->site_name;
        // }
        parent::$data['name'] = self::$partial;
    }
    public static function show($partial = '') {
        self::init_data();
        parent::show(self::$partial);
    }
}