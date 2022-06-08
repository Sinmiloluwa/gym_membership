<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin {name} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new admin user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');

        $user = User::firstOrCreate([
            'firstname' => $name, 
            'email' => $email,
            'role' => 1
            ]);
        $action = 'updated';
        if($user->wasRecentlyCreated)
        {
            $this->info('sending a welcome email....');
            $action = 'created';
        }

        $this->info('User '.$user->email. ' successfuly '.$action);

    }
}
