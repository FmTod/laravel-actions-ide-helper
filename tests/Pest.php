<?php

use FmTod\IdeHelperLaravelActions\Service\ActionInfo;
use FmTod\IdeHelperLaravelActions\Service\ActionInfoFactory;
use FmTod\IdeHelperLaravelActions\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/**
 * @param  class-string  $class
 * @throws \phpDocumentor\Reflection\Exception
 */
function getActionInfo(string $class): ActionInfo {
    $actionInfos = collect(ActionInfoFactory::create(__DIR__ . '/stubs'));

    return $actionInfos->filter(fn(ActionInfo $ai) => $ai->fqsen === $class)->firstOrFail();
}
