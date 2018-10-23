<?php

/*

Plugin Name: Launching

*/

class Newsletter_Plugin

{

    public function __construct()
    {
        include_once plugin_dir_path(__FILE__).'/newsletter.php';

        new Newsletter();
        register_activation_hook(__FILE__, array('Newsletter', 'install'));
        register_uninstall_hook(__FILE__, array('Newsletter', 'uninstall'));

        add_action('admin_menu', array($this, 'add_admin_menu'));
    }

        public function add_admin_menu()
        {
            add_menu_page('Newsletter Plugin', 'Launching', 'manage_options', 'Newsletter', array($this, 'menu_html'));
        }

        public function menu_html()
        {
            global $wpdb;
            echo '<h1>'.get_admin_page_title().'</h1>';
            echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
            $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}newsletter_email");
            ?>
            <ul ><span style='text-decoration: underline; color: red; margin-bottom:40px ;'>Subscriber list :</span>
            <?php
            if (!empty($results)) {
                foreach ($results as $row) {

                    echo "<li>".$row->email."</li>";
                }
            }
            else{
                echo "<li>Nobody's here</li>";
            }
            echo "</ul>";
        }

    }

    new Newsletter_Plugin();