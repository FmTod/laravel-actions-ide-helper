<?php

namespace FmTod\IdeHelperLaravelActions\Tests\stubs;

use Lorisleiva\Actions\Concerns\AsAction;

class VoidActionWithNoReturnType
{
    use AsAction;

    public function handle(){}

}
