<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Subscriber;

use LunaPress\Core\Hook\Hook;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\Frontend\Modules\Vite\DTO\WpViteEntryPoint;
use LunaPress\FrontendContracts\Vite\IViteAssetsLoader;
use LunaPress\PluginTemplate\Modules\TestNotice\Constant\AssetHandle;

#[Hook('admin_enqueue_scripts')]
final readonly class AdminScriptsSubscriber extends AbstractActionSubscriber
{
    public function __construct(
        private IViteAssetsLoader $loader,
    ) {
    }

    public function __invoke(): void
    {
        $this->loader->connect(
            [
                new WpViteEntryPoint(AssetHandle::TEST_NOTICE->value),
            ],
            isAdmin: true,
        );
    }
}
