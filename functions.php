<?php

function stingReverse(string $string): string
{
    //разбиваем строку на слова и пунктуацию
    // [^\w\s]+ - группа правил для поиска знаков препинания
    preg_match_all('/\w+|\s|[^\w\s]+/u',$string, $matches);
    $reverseDataStorage = [];

    foreach ($matches[0] as $match)
    {
        //ищем слово и переворачиваем
        if (preg_match('/\w/u', $match))
        {
            $match = wordReverse($match);
        }

        $reverseDataStorage[] = $match;
    }

    return implode($reverseDataStorage);
}

function wordReverse(string $string): string
{
    //сохраняем оригинальное слово для проверки регистров
    $originalString = preg_split(
        '//u',
        $string,
        -1,
        PREG_SPLIT_NO_EMPTY
    );

    //приводим слово к нижнему регистру
    $string = mb_strtolower($string);

    //разбиваем слово на буквы и получаем массив
    preg_match_all('/./u', $string, $matches);

    //переворачиваем массив и сравниваем позиции регистров
    // оригинального слова с перевернутым
    $reversed = array_reverse($matches[0]);

    foreach ($reversed as $index => $letter)
    {
        //если в данной позиции оригинального слова есть верхний регистр -
        // приводим к верхнему текущую букву перевернутого слова
        if(isUpper($originalString[$index]))
        {
            $reversed[$index] = mb_strtoupper($letter);
        }
    }

    return implode($reversed);
}

function isUpper(string $char): bool
{
    return mb_strtoupper($char, 'UTF-8') === $char;
}

function dd(mixed $data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    die();
}