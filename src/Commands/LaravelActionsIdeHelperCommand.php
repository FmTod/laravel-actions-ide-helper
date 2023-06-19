<?php

namespace Wulfheart\LaravelActionsIdeHelper\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Wulfheart\LaravelActionsIdeHelper\Service\ActionInfoFactory;
use Wulfheart\LaravelActionsIdeHelper\Service\BuildIdeHelper;

class LaravelActionsIdeHelperCommand extends Command
{
    public $signature = 'ide-helper:actions';

    public $description = 'Generate a new IDE Helper file for Laravel Actions.';

    public function handle(): void
    {
        $outfile = base_path('_ide_helper_actions.php');
        $actionInfos = collect(config('actions-ide-helper.paths', [app_path('Actions')]))
            ->map(fn ($path) => ActionInfoFactory::create($path))
            ->flatten()
            ->toArray();

        $result = BuildIdeHelper::create()->build($actionInfos);

        file_put_contents($outfile, $result);

        $this->info('IDE Helpers generated for Laravel Actions at ' . Str::of($outfile));
    }
}
