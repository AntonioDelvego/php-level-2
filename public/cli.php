<?php
require __DIR__ . '/../vendor/autoload.php';

use Delvego\PhpUpper\User;
use Delvego\PhpUpper\Blog;
use Delvego\PhpUpper\Comment;
use Faker\Factory;

$faker = Factory::create();

switch ($argv[1]) {
    case "user":
        $user = new User($faker->randomDigitNotZero(), $faker->firstName(), $faker->lastName());
        echo $user . "\n";
        break;
    case "blog":
        $blog = new Blog($faker->randomDigitNotZero(), $faker->randomDigitNotZero(), $faker->text(20), $faker->text());
        echo $blog  . "\n";
        break;
    case "comment":
        $comment = new Comment($faker->randomDigitNotZero(), $faker->randomDigitNotZero(), $faker->randomDigitNotZero(), $faker->text(100));
        echo $comment  . "\n";
        break;
    default:
        echo "available commands => user, comment, blog" . "\n";
}

if (array_key_exists(1, $argv)) {
    echo $argv[1] . "\n";
} else {
    echo "no param" . "\n";
}
