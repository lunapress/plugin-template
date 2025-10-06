<?php
declare(strict_types=1);

namespace Onepix\WpPluginTemplate\Modules\Test;

use Onepix\WpContracts\Core\Module\IModule;
use Onepix\WpPluginTemplate\Modules\Test\Subscribers\ConfigTestSubscriber;

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
