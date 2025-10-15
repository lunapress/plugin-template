<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\Test\Subscribers;

use LunaPress\Core\Hook\Hook;
use LunaPress\CoreContracts\Subscriber\ActionSubscriber;
use LunaPress\FoundationContracts\View\ITemplateManager;

defined('ABSPATH') || exit;

#[Hook('admin_notices', priority: 20, args: 0)]
final readonly class TemplateTestSubscriber implements ActionSubscriber
{
    public function __construct(
        private ITemplateManager $templateManager,
    ) {
    }

    public function callback(): callable
    {
        return $this->handle(...);
    }

    private function handle(): void
    {
        $this->templateManager->render('notices/example');
    }
}
