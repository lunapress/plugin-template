<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\Test\Subscribers;

use Onepix\WpContracts\Core\Plugin\IConfig;
use Onepix\WpContracts\Core\Plugin\IContext;
use Onepix\WpContracts\Hook\ActionSubscriber;
use Onepix\WpCore\Hook\Hook;
use Onepix\WpFrontendContracts\Vite\ViteConfig;

defined('ABSPATH') || exit;

#[Hook('plugins_loaded', priority: 20, args: 0)]
final readonly class ConfigTestSubscriber implements ActionSubscriber
{
    public function __construct(
        private IContext $context,
        private IConfig $config,
        private ViteConfig $viteConfig,
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
    }
}
