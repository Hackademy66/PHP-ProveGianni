<?php
// Dato un array di numeri, scrivere un programma che mi permetta di avere la media SOLO dei numeri pari contenuti all’interno dell’array
$numbers = [1,2,3,4,5,6];

        $tot = 0;
        $count = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $tot += $number;
        $count = $count + 1;
        $media = $tot / $count;
    } 
}
echo "La media dei numeri pari, è $media \n";

// Dato un array di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere

$user = [
    [
        'name' => 'Gianni',
        'surname' => 'Musardo',
        'gender' => 'm',
    ], [
        'name' => 'Pina',
        'surname' => 'Pinella',
        'gender' => 'f',
    ]
];



foreach ($user as $user) {
    if ($user['gender'] == "m") {
        echo "Buongiorno Sig." . " " . $user['name'] . " " . $user['surname'] . "\n";
        } else {
        echo "Buongiorno Sig.ra" . " " . $user['name'] . " " . $user['surname'] . "\n";    
        }
};

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY66".

for ($i=1; $i <=100; $i++) { 
    if ($i % 15 == 0) {
        print "HACKADEMY66 \n";
    } else if ($i % 5 == 0) {
        print "JAVASCRIPT \n";
    } else if ($i % 3 == 0) {
        print "PHP \n";
    } else {
        print $i . "\n";
    }
}


//check di una password

//chiedo password all' utente

$pwd = readline("inserire password:\n");

//almeno 8 caratteri

if(strlen($pwd) >= 8) {
    echo "Caratteri > 8\n";
} else {
        echo "Password RIFIUTATA (Caratteri <8)\n";
}

//almeno una lettera naiuscola
//data una stringa, ciclare lettera per lettera e fare un check per verificare se la lettera é maiuscola.

