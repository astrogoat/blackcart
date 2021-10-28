<?php

namespace Astrogoat\Blackcart\Settings;

use Helix\Lego\Settings\AppSettings;

class BlackcartSettings extends AppSettings
{
    public string $url;

    protected array $rules = [
        'url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'BlackCart makes online shopping risk-free, boosting conversions and AOV, while giving your customers a frictionless shopping experience they\'ll love. ';
    }
}
