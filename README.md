## Technology Stack

- [PHP 8.2.2](https://php.net): Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.
- [Composer 2.5.3](https://getcomposer.org): A Dependency Manager for PHP.
- [PHPUnit 10](https://docs.phpunit.de/en/10.0/): Sebastian Bergmann's framework for unit test. PHPUnit requires the dom and json extensions, which are normally enabled by default.

##  Install the composer packages:

```
composer require fpastana/fisher-yates-shuffle
```

## Run the Unit Tests
```
./vendor/bin/phpunit tests/Unit --color
```

## URL for 10000 randomly generated numbers
```
http://127.0.0.1:8000/?initialNumber=1&finalNumber=10000
```

# About the APP

The Fisher–Yates shuffle is an algorithm for generating a random permutation of a finite sequence—in plain terms, the algorithm shuffles the sequence. The algorithm effectively puts all the elements into a hat; it continually determines the next element by randomly drawing an element from the hat until no elements remain. The algorithm produces an unbiased permutation: every permutation is equally likely. The modern version of the algorithm is efficient: it takes time proportional to the number of items being shuffled and shuffles them in place.

The Fisher–Yates shuffle is named after Ronald Fisher and Frank Yates, who first described it, and is also known as the Knuth shuffle after Donald Knuth. A variant of the Fisher–Yates shuffle, known as Sattolo's algorithm, may be used to generate random cyclic permutations of length n instead of random permutations.

Source: [Wikipedia: Fisher–Yates shuffle](https://en.wikipedia.org/wiki/Fisher%E2%80%93Yates_shuffle)
