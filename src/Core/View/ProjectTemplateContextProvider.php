<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Core\View;

use LunaPress\CoreContracts\Plugin\PluginConfig;
use LunaPress\FoundationContracts\View\TemplateContextProvider;
use LunaPress\PluginTemplate\Core\Translator\PluginTranslator;

final readonly class ProjectTemplateContextProvider implements TemplateContextProvider
{
    public function __construct(
        private PluginConfig            $config,
        private PluginTranslator $translator,
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
