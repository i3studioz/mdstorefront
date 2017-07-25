<?php

/*
 * Copyright (C) 2017 arunsingh
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('MDStorefront')) :

    /**
     * The main Storefront class
     */
    class MDStorefront {

        /**
         * Setup class.
         *
         * @since 1.0
         */
        public function __construct() {
            add_action('wp_enqueue_scripts', array($this, 'scripts'), 30);
        }

        /**
         * Enqueue scripts and styles.
         *
         * @since  1.0.0
         */
        public function scripts() {
            global $storefront_version;

            /**
             * Styles 
             */
            wp_enqueue_style('google-material-css', get_stylesheet_directory_uri() . '/assets/bower_components/material-design-lite/material.min.css', '', $md_storefront_version);
            wp_enqueue_script('google-material-js', get_stylesheet_directory_uri() . '/assets/bower_components/material-design-lite/material.min.js', array(), 'v1.3.0', true);
        }

    }

    endif;

return new MDStorefront();
