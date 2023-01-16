<?php
require __DIR__ . '/../vendor/autoload.php';

use Delvego\PhpUpper\Models\Blog\Comment;
use Delvego\PhpUpper\Models\Blog\Post;
use Delvego\PhpUpper\Models\Person\User;
use Faker\Factory as FakerFactory;

$faker = FakerFactory::create();

$commandArgs = array_slice($argv, 1);

$selectedClass = array_shift($commandArgs);

switch ($selectedClass) {
    case "user":
        $user = new User($faker->randomDigitNotZero(), $faker->firstName(), $faker->lastName());
        echo $user . "\n";
        break;
    case "blog":
        $blog = new Post($faker->randomDigitNotZero(), $faker->randomDigitNotZero(), $faker->text(20), $faker->text());
        echo $blog  . "\n";
        break;
    case "comment":
        $comment = new Comment($faker->randomDigitNotZero(), $faker->randomDigitNotZero(), $faker->randomDigitNotZero(), $faker->text(100));
        echo $comment  . "\n";
        break;
    default:
        echo "available commands => user, comment, blog" . "\n";
}

