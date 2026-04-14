<?php
/**
 * @var IConfig $config
 * @var IPluginTranslator $translator
 */
declare(strict_types=1);

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\PluginTemplate\Core\Translator\IPluginTranslator;

?>

<div class="notice notice-info">
<div style="padding:10px;">
    <h2>🎨 <?php $translator->render('Example TemplateManager'); ?></h2>
    <p><?php $translator->render('The template has been successfully connected'); ?></p>
    <p><strong><?php $translator->render('Plugin path:'); ?></strong> <?= $config->getPluginPath(); ?></p>
</div>
</div>

<div class="block notice frontend-preview-notice"></div>