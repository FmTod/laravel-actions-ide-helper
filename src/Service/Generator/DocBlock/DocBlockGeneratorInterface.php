<?php

namespace FmTod\IdeHelperLaravelActions\Service\Generator\DocBlock;

use FmTod\IdeHelperLaravelActions\Service\ActionInfo;

interface DocBlockGeneratorInterface
{
    public static function create(): self;

    /**
     * @param  \FmTod\IdeHelperLaravelActions\Service\ActionInfo  $info
     * @return \phpDocumentor\Reflection\DocBlock\Tag[]
     */
    public function generate(ActionInfo $info): array;
}
