<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Core\View;

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\FoundationContracts\View\ITemplateContextProvider;

defined('ABSPATH') || exit;

final readonly class TemplateContextProvider implements ITemplateContextProvider
{
    public function __construct(
        private IConfig $config,
    ) {
    }

    public function getContext(): array
    {
        return [
            'config' => $this->config,
        ];
    }
}
