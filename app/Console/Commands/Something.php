<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Something extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'something';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('We are doing something here');
        return Command::SUCCESS;
    }
}
