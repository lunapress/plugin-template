<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Subscriber;

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\CoreContracts\Plugin\IPluginContext;
use LunaPress\Core\Hook\Hook;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\FrontendContracts\Vite\IViteConfig;
use LunaPress\Wp\AssetsContracts\Entity\IAssetDependency;

defined('ABSPATH') || exit;

#[Hook('plugins_loaded', priority: 20, args: 0)]
final readonly class ConfigTestSubscriber extends AbstractActionSubscriber
{
    public function __construct(
        private IPluginContext $context,
        private IConfig $config,
        private IViteConfig $viteConfig,
        private IAssetDependency $assetDependency,
    ) {
    }

    public function __invoke(): void
    {
        error_log($this->context->getNamespace());
        error_log($this->context->getPrefix());
        error_log($this->config->getPluginPath());
        error_log($this->config->getPluginVersion());
        error_log($this->viteConfig->getBuildVitePath());
        error_log($this->assetDependency::class);
    }
}
