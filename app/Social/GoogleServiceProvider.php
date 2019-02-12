<?php

namespace App\Social;

use App\User;

class GoogleServiceProvider extends AbstractServiceProvider
{

public function handle()
{	
    $user = $this->provider->stateless()->user([
        'name', 
        'email', 
        ]);

        
        $newUser = $this->register([
        'name' => $user->name,
        'email' => $user->email,
        'settings' => [
        'google_id' => $user->id, 
        ]
        ]);
        
        return $this->login($newUser);
}
}