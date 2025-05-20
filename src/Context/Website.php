<?php

namespace Gildsmith\Contract\Context;

use Illuminate\Support\Collection;

/**
 * This interface represents online store instance.
 * Used primarily for context purpose.
 *
 * @property int $id
 * @property string $name
 * @property array<int, string> $domains
 * @property Collection<int, Currency> $currencies
 * @property Collection<int, Language> $languages
 * @property Currency $defaultCurrency
 * @property Language $defaultLanguage
 */
interface Website
{
    //
}
