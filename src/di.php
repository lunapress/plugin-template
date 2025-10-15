<?php
declare(strict_types=1);

use LunaPress\FoundationContracts\View\ITemplateContextProvider;
use LunaPress\PluginTemplate\Core\View\TemplateContextProvider;
use function LunaPress\Foundation\Container\autowire;

return [
    ITemplateContextProvider::class => autowire(TemplateContextProvider::class),
];
