<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Service;

use LunaPress\PluginTemplate\Core\Translator\PluginTranslator;

final readonly class ExampleService
{
    public function __construct(
        private PluginTranslator $translator,
    ) {
    }

    public function __toString(): string
    {
        return $this->translator->translate('Example Service');
    }
}
