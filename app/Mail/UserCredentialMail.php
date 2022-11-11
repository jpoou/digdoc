<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Mail\Mailable;

class UserCredentialMail extends Mailable
{
    public User $user;
    public string $password;

    /**
     * @param User $user
     * @param string $password
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Credenciales')->markdown('emails.user-credential');
    }
}
