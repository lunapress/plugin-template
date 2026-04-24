<?php

declare(strict_types=1);

defined('ABSPATH') || exit;

use LunaPress\FoundationContracts\View\TemplateContextProvider;
use LunaPress\PluginTemplate\Core\Translator\DefaultPluginTranslator;
use LunaPress\PluginTemplate\Core\Translator\PluginTranslator;
use LunaPress\PluginTemplate\Core\View\ProjectTemplateContextProvider;
use function LunaPress\Foundation\Container\autowire;

return [
    TemplateContextProvider::class => autowire(ProjectTemplateContextProvider::class),

    PluginTranslator::class => autowire(DefaultPluginTranslator::class),
];
