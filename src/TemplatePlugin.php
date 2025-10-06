<?php
declare(strict_types=1);

namespace Onepix\WpPluginTemplate;

use Onepix\WpCore\Core\Plugin\AbstractPlugin;
use Onepix\WpFrontend\FrontendPackage;
use Onepix\WpPluginTemplate\Modules\Test\TestModule;

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
