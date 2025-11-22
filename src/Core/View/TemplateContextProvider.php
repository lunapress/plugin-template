<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Core\View;

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\FoundationContracts\View\ITemplateContextProvider;
use LunaPress\PluginTemplate\Core\Translator\IPluginTranslator;
use LunaPress\Wp\I18nContracts\Function\RenderTranslate\IRenderTranslateFactory;

defined('ABSPATH') || exit;

final readonly class TemplateContextProvider implements ITemplateContextProvider
{
    public function __construct(
        private IConfig $config,
        private IPluginTranslator       $translator,
        private IRenderTranslateFactory $renderTranslate,
    ) {
    }

    public function getContext(): array
    {
        return [
            'config' => $this->config,
            'translator' => $this->translator,
            'renderTranslate' => $this->renderTranslate,
        ];
    }
}
