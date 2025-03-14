<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    public function __construct(User $user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    public function build()
    {
        return $this->view('emails.passwordreset')
                    ->subject('Password Reset Request')
                    ->with([
                        'user' => $this->user,
                        'resetLink' => url('/password/reset/form?email=' . $this->user->email . '&token=' . $this->token)
                    ]);
    }
}
