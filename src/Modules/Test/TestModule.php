<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\Test;

use LunaPress\CoreContracts\Module\IModule;
use LunaPress\PluginTemplate\Modules\Test\Subscribers\ConfigTestSubscriber;

defined('ABSPATH') || exit;

final readonly class TestModule implements IModule
{
    /**
     * @inheritDoc
     */
    public function subscribers(): array
    {
        return [
            ConfigTestSubscriber::class,
        ];
    }
}
