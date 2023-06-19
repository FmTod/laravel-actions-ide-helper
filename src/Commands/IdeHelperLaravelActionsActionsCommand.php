<?php

namespace FmTod\IdeHelperLaravelActions\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use FmTod\IdeHelperLaravelActions\Service\ActionInfoFactory;
use FmTod\IdeHelperLaravelActions\Service\BuildIdeHelper;

class IdeHelperLaravelActionsActionsCommand extends Command
{
    public $signature = 'ide-helper:actions';

    public $description = 'Generate a new IDE Helper file for Laravel Actions.';

    public function handle(): void
    {
        $outfile = base_path('_ide_helper_actions.php');
        $actionInfos = collect(config('ide-helper-laravel-actions.paths', [app_path('Actions')]))
            ->map(fn ($path) => ActionInfoFactory::create($path))
            ->flatten()
            ->toArray();

        $result = BuildIdeHelper::create()->build($actionInfos);

        file_put_contents($outfile, $result);

        $this->info('IDE Helpers generated for Laravel Actions at ' . Str::of($outfile));
    }
}
