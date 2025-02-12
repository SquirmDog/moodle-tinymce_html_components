<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.



namespace tinymce_html_components;

use context;
use editor_tiny\plugin;
use editor_tiny\plugin_with_buttons;
use editor_tiny\plugin_with_configuration;
use editor_tiny\plugin_with_menuitems;

/**
 * Gets the value of a configuration key with a default fallback.
 *
 * @param object $cfg       The configuration object.
 * @param string $key       The key to check in the configuration object.
 * @param mixed  $default   The default value to return if the key is not found.
 *
 * @return mixed The value of the key if it exists, or the default value.
 */

function tinymce_html_components_cfgwithdefault(object $cfg, string $key, $default) {
    return property_exists($cfg, $key) ? $cfg->$key : $default;
}

/**
 * Summary of plugininfo
 */
class plugininfo extends plugin implements
    plugin_with_buttons,
    plugin_with_menuitems,
    plugin_with_configuration {

    /**
     * Get the editor buttons for this plugins
     *
     * @return array
     */
    // public static function get_available_buttons(): array {
    //     return [
    //         'tiny_codepro/codepro',
    //     ];
    // }
    /**
     * Get the dropdown menu items for this plugin
     *
     * @return array
     */
    // public static function get_available_menuitems(): array {
    //     return [
    //         'tiny_codepro/codepro',
    //     ];
    // }

    /**
     * Get the configuration for the plugin, capabilities and
     * config (from settings.php)
     *
     * @param context $context
     * @param array $options
     * @param array $fpoptions
     * @param \editor_tiny\editor|null $editor
     * @return void
     *
     * @return array
     */
    
}
