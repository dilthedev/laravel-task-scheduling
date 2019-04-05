<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class updateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updatePckgVal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Update User's Package Values";

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

        DB::table('user')
            ->where('id', 1)
            ->update(['pckgVal' => 15]);




        // DB::table('user')->update(['pckgVal'=>'pckgVal'+1]);
        $this->info('Package Value has been changed successfully!');
    }
}
