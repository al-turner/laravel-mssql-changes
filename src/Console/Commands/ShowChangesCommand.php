<?php

namespace Patabugen\MssqlChanges\Console\Commands;

use Illuminate\Console\Command;
use Patabugen\MssqlChanges\Actions\ShowChanges;

class ShowChangesCommand extends Command
{
    protected $signature = 'mssql:show-changes';

    public function handle()
    {
        ShowChanges::make()->asCommand($this);
    }
}
