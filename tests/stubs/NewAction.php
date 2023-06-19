<?php

namespace FmTod\IdeHelperLaravelActions\Tests\stubs;

use Lorisleiva\Actions\Concerns\AsJob;

class NewAction extends BaseAction
{
    use AsJob;
    public function test(){}
}
