<?php

namespace App\Console\Commands;

use App\Users;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\ActiveAccounts as ActiveUsers;

class ActiveAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'accounts:active';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily store active accounts';

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
        $active = Users::where('expire_date', '>=', Carbon::today())->count();

        ActiveUsers::create([
            'active_accounts' => $active
        ]);
        
        $this->info('Today total count of active users is: '.$active);
    }
}
