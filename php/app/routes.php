<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {
    $games = [
        'bingo-slingo' => [
            'Slug' => 'bingo-slingo',
            'Name' => 'Bingo Slingo',
            'Category' => 'slingo',
            'RTP' => 95,
            'Description' => 'Slingo and bingo, check it out!',
            'Bonus Rounds' => 2,
            'Price From' => 10,
            'Price To' => 200,
            'Jackpot' => false,
            'Instructions' => 'Match 5 in a row to win big',
            'Terms' => 'Standard Terms apply',
            'Image' => 'https://www.skybingo.com/portal-assets/images/games/slingoXxxtreme1.jpg'
        ],
        'bingo-slingo-starburst' => [
            'Slug' => 'bingo-slingo-starburst',
            'Name' => 'Bingo Slingo Starburst',
            'Category' => 'slingo',
            'RTP' => 96,
            'Description' => 'Slingo and bingo with a Starburst twist, check it out!',
            'Bonus Rounds' => 3,
            'Price From' => 25,
            'Price To' => 250,
            'Jackpot' => false,
            'Instructions' => 'Match 5 in a row to win big and open the Starburst',
            'Terms' => 'Standard Terms apply',
            'Image' => 'https://www.skybingo.com/portal-assets/images/games/slingoStarburst.jpg'
        ],
        'bingo-lucky-jackpot' => [
            'Slug' => 'bingo-lucky-jackpot',
            'Name' => 'Bingo Lucky Jackpot',
            'Category' => 'jackpot',
            'RTP' => 96,
            'Description' => 'Get lucky with lucky with an additional jackpot!',
            'Bonus Rounds' => 5,
            'Price From' => 25,
            'Price To' => 250,
            'Jackpot' => true,
            'Instructions' => 'Could you win the jackpot?',
            'Terms' => 'Standard Jackpot Terms apply',
            'Image' => 'https://www.skybingo.com/portal-assets/images/games/luckysjackpottavern.jpg'
        ],
    ];

    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hit /games for full list of games or /game/{slug} to pull a specific game');
        return $response;
    });

    $app->get('/games', function (Request $request, Response $response) use ($games) {
        $response->getBody()->write(json_encode($games));
        return $response
          ->withHeader('content-type', 'application/json')
          ->withStatus(200);
    });

    $app->get('/game/{id}', function (Request $request, Response $response, array $args) use ($games) {
        $id = $args['id'];
        $response->getBody()->write(json_encode($games[$id]));
        return $response
          ->withHeader('content-type', 'application/json')
          ->withStatus(200);
    });
};
