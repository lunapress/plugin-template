<?php
/**
 * Plugin Name: Wp Plugin Template
 * Description: Desc
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

$prefixedAutoload = __DIR__ . '/vendor-prefixed/autoload.php';
$vendorAutoload   = __DIR__ . '/vendor/autoload.php';

if (file_exists($prefixedAutoload)) {
    require_once $prefixedAutoload;
} else {
    require_once $vendorAutoload;
}

TemplatePlugin::getInstance()
    ->setContainerBuilder(
        new PhpDiContainerBuilder()
    )->boot(__FILE__);
