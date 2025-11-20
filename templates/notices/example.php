<?php
/**
 * @var IConfig $config
 * @var IPluginTranslator $translator
 * @var IRenderTranslateFactory $renderTranslate
 */
declare(strict_types=1);

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\PluginTemplate\Core\Translator\IPluginTranslator;
use LunaPress\Wp\I18nContracts\RenderTranslate\IRenderTranslateFactory;

?>

<div class="notice notice-info">
<div style="padding:10px;">
    <h2>🎨 <?php $translator->run($renderTranslate->make('Example TemplateManager')); ?></h2>
    <p><?php $translator->run($renderTranslate->make('The template has been successfully connected')); ?></p>
    <p><strong><?php $translator->run($renderTranslate->make('Plugin path:')); ?></strong> <?= $config->getPluginPath(); ?></p>
</div>
</div>

<div class="block notice frontend-preview-notice"></div>