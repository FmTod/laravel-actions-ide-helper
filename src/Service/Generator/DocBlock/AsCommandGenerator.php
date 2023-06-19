<?php


namespace FmTod\IdeHelperLaravelActions\Service\Generator\DocBlock;

use Lorisleiva\Actions\Concerns\AsCommand;

class AsCommandGenerator extends DocBlockGeneratorBase
{
    protected string $context = AsCommand::class;
}
