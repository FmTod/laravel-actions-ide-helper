<?php

namespace FmTod\IdeHelperLaravelActions\Tests\stubs\Jobs;

use Lorisleiva\Actions\Concerns\AsJob;

class WithoutDecoratorAction
{
    use AsJob;

    public function handle(){}

}
