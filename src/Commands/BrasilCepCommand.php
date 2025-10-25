<?php

namespace Paulo Hortelan\BrasilCep\Commands;

use Illuminate\Console\Command;

class BrasilCepCommand extends Command
{
    public $signature = 'brasil-cep';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
