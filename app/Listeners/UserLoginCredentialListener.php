<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserLoginCredentialListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;

        // Tambahkan entry di dalam tabel login_credentials
        LoginCredential::create([
            'nik' => $user->nik,
            'password' => $user->password,
            'role' => 'user', // Sesuaikan dengan role user
        ]);
    }
}
