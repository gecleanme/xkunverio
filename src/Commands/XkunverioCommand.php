<?php

namespace gecleanme\Xkunverio\Commands;

use Illuminate\Console\Command;

class XkunverioCommand extends Command
{
    public $signature = 'xkunverio';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
