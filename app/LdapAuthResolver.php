<?php

namespace App;

use Adldap\Models\User as LdapUser;
use Adldap\Laravel\Auth\Resolver;

class LdapAuthResolver extends Resolver
{
    public function authenticate(LdapUser $user, array $credentials = [])
    {
        return $this->provider->auth()->attempt($user->getAttribute('dn'), $credentials['password']);
    }
}
