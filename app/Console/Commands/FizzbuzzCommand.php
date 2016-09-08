<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FizzbuzzService;

class FizzbuzzCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app.fizzbuzz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $fbservice = new FizzbuzzService();
        for ($i = 1; $i <= 50; $i++) {
            $this->output->write($fbservice->handle($i).', ');
        }
    }
}
