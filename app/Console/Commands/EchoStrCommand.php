<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EchoStrCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:echo_str';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Echo string';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo 'Hello Japan!' . "\n";
    }
}
