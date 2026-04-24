<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Subscriber;

use LunaPress\Core\Hook\Hook;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\FrontendContracts\Vite\DTO\ViteAsset;
use LunaPress\FrontendContracts\Vite\ViteAssetsLoader;
use LunaPress\PluginTemplate\Modules\TestNotice\Constant\AssetHandle;

#[Hook('admin_enqueue_scripts')]
final readonly class AdminScriptsSubscriber extends AbstractActionSubscriber
{
    public function __construct(
        private ViteAssetsLoader $loader,
    ) {
    }

    public function __invoke(): void
    {
        $this->loader->connect(
            [
                new ViteAsset(AssetHandle::TEST_NOTICE),
            ],
            isAdmin: true,
        );
    }
}
