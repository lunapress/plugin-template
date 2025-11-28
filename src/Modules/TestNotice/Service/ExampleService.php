<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Service;

use LunaPress\PluginTemplate\Core\Translator\IPluginTranslator;
use LunaPress\Wp\I18nContracts\Function\Translate\ITranslateFactory;

defined('ABSPATH') || exit;

final readonly class ExampleService
{
    public function __construct(
        private IPluginTranslator $translator,
        private ITranslateFactory $translate,
    ) {
    }

    public function __toString(): string
    {
        return $this->translator->run(
            $this->translate->make('Example Service')
        );
    }
}
