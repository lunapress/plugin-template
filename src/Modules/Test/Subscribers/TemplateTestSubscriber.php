<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\Test\Subscribers;

use LunaPress\Core\Hook\Hook;
use LunaPress\Foundation\Subscriber\AbstractActionSubscriber;
use LunaPress\FoundationContracts\View\ITemplateManager;

defined('ABSPATH') || exit;

#[Hook('admin_notices', priority: 20, args: 0)]
final readonly class TemplateTestSubscriber extends AbstractActionSubscriber
{
    public function __construct(
        private ITemplateManager $templateManager,
    ) {
    }

    public function __invoke(): void
    {
        $this->templateManager->render('notices/example');
    }
}
