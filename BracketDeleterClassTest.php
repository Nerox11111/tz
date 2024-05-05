<?php
use PHPUnit\Framework\TestCase;
include "BracketDeleterClass.php";

    $sourceString = 'Тест(строки)';
    $bracketDeleter = new BracketDeleter($sourceString);
    $bracketDeleter->process();

    echo "Исходная строка: $sourceString\n";
    echo "Конечная строка: {$bracketDeleter->getResult()}\n";

    $sourceString = 'Тест<>csJ(F@H(@OHgn';
    $bracketDeleter = new BracketDeleter($sourceString);
    $bracketDeleter->process();

    echo "Исходная строка: $sourceString\n";
    echo "Конечная строка: {$bracketDeleter->getResult()}\n";

    $sourceString = 'Тест строки';
    $bracketDeleter = new BracketDeleter($sourceString);
    $bracketDeleter->process();

    echo "Исходная строка: $sourceString\n";
    echo "Конечная строка: {$bracketDeleter->getResult()}\n";

    $sourceString = '(Строка)<должна>{стать}[чистой]';
    $bracketDeleter = new BracketDeleter($sourceString);
    $bracketDeleter->process();

    echo "Исходная строка: $sourceString\n";
    echo "Конечная строка: {$bracketDeleter->getResult()}\n";

?>