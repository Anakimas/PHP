<?php


// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
function dividesBy5 (int $valueA): int
{
    $result = $valueA % 5;
     return $result;
}
var_dump(dividesBy5(109));


///*
//2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
//išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
//Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
//Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
//'some text'
//'another text'
//...
//*/
$arr = ['some text', 'another text'];
function arrayPrinter(array $list): void {
    var_dump($list);
    arrayPrinter($list);
}

arrayPrinter($arr);

/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/
$arr = ['some text', 'another text'];
function stringEnhancer(string $text, string $enhancer): string {
   return "$enhancer$text$enhancer";
}

$text = "labas";
$enhancer = "ate";
echo  stringEnhancer($text, $enhancer);
/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/
function stringModifier(string &$x, string $b): void{
$x =$b. $x . $b; // '##some text##'
}

$x = 'some text';
stringModifier($x, '##');
echo $x.PHP_EOL;

///5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
//Funkcijos kvietimas:
//textReplicator('some_text', 3);
//Funkcija grąžina: 'some_text-some_text-some_text'
//Funkcijos kvietimas:
//textReplicator('some_text', null);
//Funkcija grąžina: 'some_text'
//*/
//
///*
//4. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
//*/