<?php

namespace Akichi139\Bladeboostrap\Commands;

use Illuminate\Console\Command;

class BladeboostrapCommand extends Command
{
    public $signature = 'bladeboostrap';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
