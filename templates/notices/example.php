<?php
/**
 * @var IConfig $config
 */
declare(strict_types=1);

use LunaPress\CoreContracts\Plugin\IConfig;

?>

<div class="notice notice-info">
<div style="padding:10px;">
    <h2>🎨 Example TemplateManager</h2>
    <p>The template has been successfully connected</p>
    <p><strong>Plugin path:</strong> <?= $config->getPluginPath(); ?></p>
</div>
</div>

<div class="block notice frontend-preview-notice"></div>