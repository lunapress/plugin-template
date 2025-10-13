<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\Test\Subscribers;

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\CoreContracts\Plugin\IPluginContext;
use LunaPress\CoreContracts\Subscriber\ActionSubscriber;
use LunaPress\Core\Hook\Hook;
use LunaPress\FrontendContracts\Vite\IViteConfig;
use LunaPress\Wp\AssetsContracts\IAssetDependency;

defined('ABSPATH') || exit;

#[Hook('plugins_loaded', priority: 20, args: 0)]
final readonly class ConfigTestSubscriber implements ActionSubscriber
{
    public function __construct(
        private IPluginContext $context,
        private IConfig $config,
        private IViteConfig $viteConfig,
        private IAssetDependency $assetDependency,
    ) {
    }

    public function callback(): callable
    {
        return $this->handle(...);
    }

    public function handle(): void
    {
        error_log($this->context->getNamespace());
        error_log($this->context->getPrefix());
        error_log($this->config->getPluginPath());
        error_log($this->viteConfig->getBuildVitePath());
        error_log($this->assetDependency::class);
    }
}
