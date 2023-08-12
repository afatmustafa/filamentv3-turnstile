<?php

namespace Afatmustafa\FilamentTurnstile\Commands;

use Illuminate\Console\Command;

class FilamentTurnstileCommand extends Command
{
    public $signature = 'filamentv3-turnstile';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
