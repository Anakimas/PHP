<?php

declare(strict_types=1);

//function exercise1(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [0, 1, 2, 3, 4];
//
//    return  $numbers[3];
//
//}


//
//function exercise2(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//    return $numbers[3] ;
//    var_dump($numbers[3]); arba
//}


//function exercise3(): int
//{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */
//
//    $numbers = [
//        [0, 1],
//        [1, 0, 2],
//        [
//            0,
//            [
//                0, 1, 99
//            ],
//        ],
//    ];
//
//return $numbers [2][1][2];
//
//}
//
//var_dump(exercise3());

//function exercise4(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_2' => [
//                'zero' => 0, 'one' => 1, 'ninetynine' => 99
//            ],
//        ],
//    ];
//
//    return $numbers['fourth']['value_2']['ninetynine'];
//
//}
//var_dump(exercise4());
//function exercise5(): int
//{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_6' => [
//                'zero' => 0, 'one' => 1, 99
//            ],
//        ],
//    ];
//
//    return $numbers['fourth']['value_6']['one'];
//}
//var_dump(exercise5());
//function exercise7(): array
//{
//    /*
//    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
//    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//    unset($numbers['two']);
//return $numbers;
//}
//var_dump(exercise7());

//function exercise8(): array
//{
//    /*
//    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
//    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
//    */
//
//    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
//   foreach ($numbers as $key=>$number){
//    if ($number % 2 == 0 ){
//        unset($numbers[$key]);
//    };
//
//}
//return $numbers;
//}
//
//var_dump(exercise8());

//function exercise9(int $start, int $end): void
//{
//    /*
//    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
//    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
//    */
//
//    if ($start < $end){
//        for ($i = $start; $i <=$end; $i++){
//            echo $i;
//
//        }
//    }
//
//}
//exercise9(1,10);
//function exercise10(int $number): void
//{
//    /*
//    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise10(60)
//    Funkcija spausdina:
//    3
//    6
//    9
//    12
//    ...
//    60
//    */
//    for ($i =0; $i < $number; $i++){
//        if ($i % 3 == 0){
//            echo $i.PHP_EOL;
//        }
//        elseif ($number<0){
//            echo "blank space";
//        }
//    }
//}
//
//var_dump(exercise10(60));
//
//function exercise11(int $number): void
//{
//    /*
//    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise11(21)
//    Funkcija spausdina:
//    21
//    20
//    19
//    ...
//    1
//    0
//    */
//    for ($i = $number; $i >= 0; $i--){
//        echo $i.PHP_EOL;
//    }
//}
//var_dump(exercise11(21));

