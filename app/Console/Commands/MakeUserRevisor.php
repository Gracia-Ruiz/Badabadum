<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class MakeUserRevisor extends Command
{
    protected $signature = 'badabadum:makeUserRevisor';
    protected $description = 'hace a un usuario revisor';
    

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    
 
    public function handle()
    {
        $email = $this->ask("introducir el correo del usuario que quieres hacer como revisor");
        $user = User::where('email', $email)->first();
        if ( !$user) {
            $this->error("usuario no encontrado");
            return;
        }
        $user->is_revisor = true;
        $user->save();
        $this->info(" el usuario {$user->name} ahora es un revisor");
    }
}
