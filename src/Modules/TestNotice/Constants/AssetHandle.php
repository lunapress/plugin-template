<?php
declare(strict_types=1);

namespace LunaPress\PluginTemplate\Modules\TestNotice\Constants;

defined('ABSPATH') || exit;

enum AssetHandle: string
{
    case TEST_NOTICE = 'src/modules/TestNotice/index.tsx';
}
