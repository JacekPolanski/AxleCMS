<?php

function sortByPriceAscending(string $jsonString): string
{
    $data = json_decode($jsonString, true);

    usort($data, function (array $a, array $b)
    {
        if ($a['price'] === $b['price']) {
            return $a['name'] <=> $b['name'];
        }

        return ($a['price'] < $b['price']) ? -1 : 1;
    });

    return json_encode($data);
}

echo sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"z","price":4.04},{"name":"rice2","price":4.04}]');
