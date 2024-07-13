<?php

declare(strict_types=1);

use GuzzleHttp\Client;

class BotHandler
{
    const TOKEN = "7407969760:AAFQ-TeQg2y76rqFNSejmHnnsDvIw82p1kk";
    const API = "https://api.telegram.org/bot" . self::TOKEN . "/";
    public Client $http;

    public function __construct()
    {
        $this->http = new Client(['base_uri' => self::API]);
    }

    public function handleStartCommand(int $chatId): void
    {
        $this->http->post('sendMessage', [
            'form_params' => [
                'chat_id' => $chatId,
                'text' => 'Welcome to Currency Converter Bot. Please choose conversion type:',
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => 'USD > UZS', 'callback_data' => 'usd2uzs'],
                            ['text' => 'UZS > USD', 'callback_data' => 'uzs2usd']
                        ],
                    ]
                ])
            ]
        ]);
    }
}
