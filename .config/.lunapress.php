<?php

use LunaPress\Config\ProjectConfig;

return ProjectConfig::createDefault()
    ->withStrauss([
        "namespace_prefix" => "LunaPress\\WpPluginTemplateVendor\\",
        "classmap_prefix" => "LunaPress_WpPluginTemplateVendor_",
        "constant_prefix" => "LPWPT_",
        'update_call_sites' => [
            'src',
            'templates',
            'plugin.php',
        ],
        'include_root_autoload' => true,
]);