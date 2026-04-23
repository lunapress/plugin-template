<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Core\View;

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\FoundationContracts\View\ITemplateContextProvider;
use LunaPress\PluginTemplate\Core\Translator\IPluginTranslator;

final readonly class TemplateContextProvider implements ITemplateContextProvider
{
    public function __construct(
        private IConfig $config,
        private IPluginTranslator $translator,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function getContext(): array
    {
        return [
            'config' => $this->config,
            'translator' => $this->translator,
        ];
    }
}
