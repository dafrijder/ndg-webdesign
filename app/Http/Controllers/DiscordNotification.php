<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiscordNotification extends Controller
{
    public function notification()
    {
        return Http::post('https://discord.com/api/webhooks/1466060930298417319/dwp_dUaoBEVfGonX6C26D-r1qe27ytcUGUt5DUZWPZXBzSQ2xuZ-ydyXpZF0wmcfNMx5', [
            'content' => "@everyone New blog",
            'embeds' => [
                [
                    'title' => "dit is een test",
                    'description' => "test",
                    'color' => '7506394',
                ]
            ],
        ]);

    }
}
