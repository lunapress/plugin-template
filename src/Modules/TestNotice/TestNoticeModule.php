<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice;

use LunaPress\FoundationContracts\Module\IModule;
use LunaPress\PluginTemplate\Modules\TestNotice\Subscriber\AdminScriptsSubscriber;
use LunaPress\PluginTemplate\Modules\TestNotice\Subscriber\ConfigTestSubscriber;
use LunaPress\PluginTemplate\Modules\TestNotice\Subscriber\TemplateTestSubscriber;

defined('ABSPATH') || exit;

final readonly class TestNoticeModule implements IModule
{
    /**
     * @inheritDoc
     */
    public function subscribers(): array
    {
        return [
            ConfigTestSubscriber::class,
            TemplateTestSubscriber::class,
            AdminScriptsSubscriber::class,
        ];
    }
}
