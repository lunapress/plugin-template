<?php

declare(strict_types=1);

namespace LunaPress\PluginTemplate\Core\Translator;

use LunaPress\Wp\I18n\Attribute\Domain;
use LunaPress\Wp\I18nContracts\Service\Translator\Translator;

#[Domain('wp-plugin-template')]
interface PluginTranslator extends Translator
{
}
