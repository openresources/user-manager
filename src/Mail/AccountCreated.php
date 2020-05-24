<?php

namespace Openresources\UserManager\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $loginUrl = route('email-login.create');

        return $this->from(config("mail.from.address"))
            ->markdown('user-manager::mail.users.account_created', [
                'loginUrl' => $loginUrl,
                'name' => $this->name
                ]);
    }
}
