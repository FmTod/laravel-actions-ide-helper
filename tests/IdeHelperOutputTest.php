<?php

use FmTod\IdeHelperLaravelActions\Service\ActionInfoFactory;
use FmTod\IdeHelperLaravelActions\Service\BuildIdeHelper;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('can render the output so it matches the ', function() {
    $actionInfos = ActionInfoFactory::create(__DIR__ . '/stubs');

    $result = BuildIdeHelper::create()->build($actionInfos);

    assertMatchesSnapshot($result);
});

it('can render intersection types ', function() {
    $actionInfos = ActionInfoFactory::create(__DIR__ . '/stubs/IntersectionTypes');

    $result = BuildIdeHelper::create()->build($actionInfos);

    assertMatchesSnapshot($result);
});
