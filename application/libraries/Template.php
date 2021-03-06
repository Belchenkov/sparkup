<?php if( ! defined('BASEPATH')) exit ('No direct script acces allowed');

    class Template
    {
        var $ci;

        public function __construct()
        {
            $this->ci=& get_instance();
        }

        /**
         * @name:               load
         * @desc:               Load the template and view specified
         * @param:loc:          Location (admin or public)
         * @param:tpl_name:     Name of the template
         * @param:view:         Name of the view to load
         * @param:data:         Optional data array
         */
        public function load($loc, $tpl_name, $view, $data = null)
        {
            if($loc == 'admin' && $tpl_name == 'default') {
                $tpl_name = 'admin';
            }

            if($loc == 'public' && $tpl_name == 'default') {
                $tpl_name = 'public';
            }

            $data['main'] = $loc . '/' . $view;
            $this->ci->load->view('/templates/' . $tpl_name, $data);


        }

    }


