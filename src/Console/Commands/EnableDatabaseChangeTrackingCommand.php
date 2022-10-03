<?php

namespace Patabugen\MssqlChanges\Console\Commands;

use Illuminate\Console\Command;
use Patabugen\MssqlChanges\Actions\EnableDatabaseChangeTracking;
use Patabugen\MssqlChanges\Actions\GetVersion;

class EnableDatabaseChangeTrackingCommand extends Command
{
    protected $signature = 'mssql:enable-database-change-tracking';

    public function handle()
    {
        EnableDatabaseChangeTracking::make()->asCommand($this);
    }
}
