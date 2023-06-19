<?php


namespace FmTod\IdeHelperLaravelActions\Service\Generator\DocBlock;

use Lorisleiva\Actions\Concerns\AsListener;

class AsListenerGenerator extends DocBlockGeneratorBase
{
    protected string $context = AsListener::class;
}
