<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Subscribers;

use LunaPress\Core\Hook\Hook;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\Frontend\Modules\Vite\Entity\WpViteEntryPoint;
use LunaPress\FrontendContracts\Vite\IViteAssetsLoader;
use LunaPress\PluginTemplate\Modules\TestNotice\Constants\AssetHandle;

defined('ABSPATH') || exit;

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
                WpViteEntryPoint::of(AssetHandle::TEST_NOTICE->value)
            ],
            isAdmin: true,
        );
    }
}
