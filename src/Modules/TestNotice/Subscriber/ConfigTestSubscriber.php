<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Subscriber;

use LunaPress\Core\Hook\Hook;
use LunaPress\CoreContracts\Plugin\PluginConfig;
use LunaPress\CoreContracts\Plugin\PluginContext;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\FrontendContracts\Vite\DTO\ViteConfig;
use function error_log;

#[Hook('plugins_loaded', priority: 20, args: 0)]
final readonly class ConfigTestSubscriber extends AbstractActionSubscriber
{
    public function __construct(
        private PluginContext $context,
        private PluginConfig $config,
        private ViteConfig $viteConfig,
    ) {
    }

    public function __invoke(): void
    {
        error_log($this->context->context->namespace);
        error_log($this->context->context->prefix);
        error_log($this->config->pluginPath);
        error_log($this->config->pluginVersion);
        error_log($this->viteConfig->buildVitePath);
    }
}
