# Bingo Tech Task



## Introduction

Welcome to this Sky Bingo tech task. Thanks for taking the time to attempt this. Please note the following:

1. This is just to give us a rough idea of your skills and approach - there is no 'right' or 'wrong' way to accomplish this task
2. We don't expect a fully featured, fully tested application - spend as much time and effort as you can reasonably spare (generally 2-3 hours)
3. Anything you don't get done, please mention so we know you had it in mind. Anything you might want to improve, please also mention.

Please add your notes and instructions to SUBMISSION-README.md in the root directory.

## Pre-requisites

* docker
* node


## Getting Started

1. docker-compose up

This should spin up a PHP JSON game api available on http://localhost:8080

Hit the endpoint for brief instructions on how to use the API.


## Objectives

Set up a NEXT application.

Within the application:

* Add a basic homepage
* Link to game list page, populated via the API

The game list page needs the game image and the game name.

Each game needs a link to a more detailed game info page, again populated via the game API

This page needs to diplay the following information:

* Name
* Description
* Return to player (RTP)
* Bonus round
* Price from & to
* Whether the game has a jackpot
* Instructions
* T&Cs
* Game image

There needs to be a way to launch the game(s) from the list and info page. The game launcher will be added later, but you should hit /game/launcher/{game-slug}


## Things to Consider

* Tests
* Caching
* Errors
* Game search
* Presentation
* Ease of use
* Documentation
