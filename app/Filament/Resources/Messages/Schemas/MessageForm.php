<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Schemas\Schema;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                'phone_number',
                'email_content',
                'full_name',
                'message_content',
                'reply_default_message',
            ]);
    }
}
