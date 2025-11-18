<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate;

use LunaPress\Core\Plugin\AbstractPlugin;
use LunaPress\Frontend\FrontendPackage;
use LunaPress\PluginTemplate\Modules\TestNotice\TestNoticeModule;

defined('ABSPATH') || exit;

final class TemplatePlugin extends AbstractPlugin
{
    /**
     * @inheritDoc
     */
    public function getModules(): array
    {
        return [
            TestNoticeModule::class,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getPackages(): array
    {
        return [
            FrontendPackage::class,
        ];
    }

    public function getPrefix(): string
    {
        return 'tmpl';
    }
}
