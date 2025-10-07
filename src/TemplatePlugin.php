<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate;

use Onepix\WpCore\Core\Plugin\AbstractPlugin;
use Onepix\WpFrontend\FrontendPackage;
use LunaPress\PluginTemplate\Modules\Test\TestModule;

defined('ABSPATH') || exit;

final class TemplatePlugin extends AbstractPlugin
{
    /**
     * @inheritDoc
     */
    public function getModules(): array
    {
        return [
            TestModule::class,
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
