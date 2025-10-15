<?php
/**
 * Plugin Name: Wp Plugin Template
 * Description:
 * Version: 1.0
 * Author: LunaPress
 * Author URI: https://onepix.net/
 * Requires at least: 6.8.3
 * Tested up to: 6.8.3
 * Requires PHP: 8.3
 * Text Domain: wp-plugin-template
 * Domain Path: /languages/
 * Requires Plugins:
 *
 * @package LunaPress\WpPluginTemplate
 */
declare(strict_types=1);

use LunaPress\PhpDiAdapter\PhpDiContainerBuilder;
use LunaPress\PluginTemplate\TemplatePlugin;

require_once __DIR__ . '/vendor/autoload.php';

TemplatePlugin::getInstance()
    ->setContainerBuilder(
        new PhpDiContainerBuilder()
    )->boot(__FILE__);
