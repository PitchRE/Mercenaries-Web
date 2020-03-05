<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateKD extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateKD';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates kd history';

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

        $users = \App\User::all();

        foreach ($users as $key => $user) {
            $kd = new \App\kd_history;
            if ($user->deaths == 0) {
                $kd->kd = $user->kills;
            } else {
                $kd->kd = $user->kills / $user->deaths;
            }
            $kd->user_id = $user->id;
            $kd->save();

        }
        $this->info('Done!');
    }
}
