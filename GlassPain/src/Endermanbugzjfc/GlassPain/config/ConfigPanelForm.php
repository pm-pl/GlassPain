<?php

declare(strict_types=1);

namespace Endermanbugzjfc\GlassPain\config;

class ConfigPanelForm
{

    public string $title = "{bold}{darkBlue}Glass{gold}Pain";

    public string $content = <<<EOT
    {yellow}Selected animation: {white}{animation.displayName}
    EOT;


}