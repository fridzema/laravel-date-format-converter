<?php

namespace Fridzema\DateFormatConvert\Commands;

use Illuminate\Console\Command;

class DateFormatConvertCommand extends Command
{
    public $signature = 'laravel-date-format-converter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
