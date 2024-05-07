<?php 


// Load plugin text-domain

$locale = apply_filters('plugin_locale', get_locale(), 'uama_wp_branch-branch');

load_textdomain('uama_wp_branch-branch', WP_LANG_DIR . 'uama_wp_branch-branch/uama_wp_branch-branch-' . $locale . '.mo');
load_plugin_textdomain('uama_wp_branch-branch', false, plugin_basename(dirname(__FILE__)) . '/languages');
