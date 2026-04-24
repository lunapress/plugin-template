<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Subscriber;

use LunaPress\Core\Hook\Hook;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\FoundationContracts\View\TemplateManager;

#[Hook('admin_notices', priority: 20, args: 0)]
final readonly class TemplateTestSubscriber extends AbstractActionSubscriber
{
    public function __construct(
        private TemplateManager $templateManager,
    ) {
    }

    public function __invoke(): void
    {
        $this->templateManager->render('notices/example');
    }
}
