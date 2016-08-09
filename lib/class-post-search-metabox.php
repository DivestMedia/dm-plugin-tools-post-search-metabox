<?php

if(!class_exists('PostSearchMetabox')){

    class PostSearchMetabox{

        // Declare Default Variables
        public $defaults = [

        ];

        // Merged Options
        public $settings = [];

        public function __CONSTRUCT($opts = []){

            // Merge Default Settings
            $this->settings = array_replace_recursive($this->defaults, $opts);
            $this->display();
        }

        function display(){
            // MetaBox Display
            include DM_PLUGIN_TOOL_PSM_PLUGIN_DIR . 'tpl/post-search-metabox.php';
        }

    }

}
