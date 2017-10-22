<?php

class EmailAddressLoader
{
    public function getAllEmails()
    {
        // a class to fake loading emails (e.g. from a database)
        return [
            'iluvhappyemails@symfony.com',
            'grumpy_dude@yahoo.com',
            'sunshine_gurl@gmail.com',
        ];
    }
}
