<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Service;

use LunaPress\PluginTemplate\Core\Translator\IPluginTranslator;

defined('ABSPATH') || exit;

final readonly class ExampleService
{
    public function __construct(
        private IPluginTranslator $translator,
    ) {
    }

    public function __toString(): string
    {
        return $this->translator->translate('Example Service');
    }
}
