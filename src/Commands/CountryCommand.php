<?php

namespace KinDigi\Country\Commands;

use Illuminate\Console\Command;

class CountryCommand extends Command
{
    public $signature = 'laravel-country';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
