<?php

class Fancy_Lifesaver_Controller
{
    public function __construct()
    {
        add_action('admin_footer', [$this, 'widget_template']);
        add_action('admin_footer', [$this, 'modal_template']);
        if (current_user_can('administrator')) {
            add_action('wp_footer', [$this, 'modal_template']);
        }
    }

    public function widget_template()
    {
        include_once Fancy_Lifesaver::PLUGIN_DIR.'/templates/widget.html.php';
    }

    public function options_template()
    {
        include_once Fancy_Lifesaver::PLUGIN_DIR.'/templates/options.html.php';
    }

    public function modal_template()
    {
        include_once Fancy_Lifesaver::PLUGIN_DIR.'/templates/modal.html.php';
    }
}
