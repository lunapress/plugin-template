<?php
/**
 * @var PluginConfig $config
 * @var PluginTranslator $translator
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

use LunaPress\CoreContracts\Plugin\PluginConfig;
use LunaPress\PluginTemplate\Core\Translator\PluginTranslator;

?>

<div class="notice notice-info">
<div style="padding:10px;">
    <h2>🎨 
    <?php
defined('ABSPATH') || exit;

$translator->render('Example TemplateManager');
?>
</h2>
    <p>
    <?php
defined('ABSPATH') || exit;

$translator->render('The template has been successfully connected');
?>
</p>
    <p><strong>
    <?php
defined('ABSPATH') || exit;

$translator->render('Plugin path:');
?>
</strong> <?= $config->pluginPath; ?></p>
</div>
</div>

<div class="block notice frontend-preview-notice"></div>