<?php


namespace FmTod\IdeHelperLaravelActions\Service\Generator\DocBlock;

use Lorisleiva\Actions\Concerns\AsController;

class AsControllerGenerator extends DocBlockGeneratorBase
{
    protected string $context = AsController::class;
}
