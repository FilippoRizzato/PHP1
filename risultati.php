<?php
$risposte_corrette = [
    'dbms' => 'MySQL',
    'concetti' => ['SQL', 'NoSQL']
];

$risposte_utente = [
    'nome' => $_POST['nome'],
    'cognome' => $_POST['cognome'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'dbms' => $_POST['dbms'],
    'concetti' => $_POST['concetti'],
    'opinione' => $_POST['opinione']
];

$analisi_testo = function($testo) {
    return [
        'parole' => str_word_count($testo),
        'consonanti' => preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $testo),
        'vocali' => preg_match_all('/[aeiouAEIOU]/', $testo),
        'numerici' => preg_match_all('/[0-9]/', $testo)
    ];
};

$risposta_opinione_analisi = $analisi_testo($risposte_utente['opinione']);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Risultati</h1>
    <h2>Informazioni utente</h2>
    <p>Nome: <?= htmlspecialchars($risposte_utente['nome']) ?></p>
    <p>Cognome: <?= htmlspecialchars($risposte_utente['cognome']) ?></p>
    <p>Email: <?= htmlspecialchars($risposte_utente['email']) ?></p>

    <h2>Risposte</h2>

    <p>Quale tra questi è un DBMS relazionale?</p>
    <p>
        <?= htmlspecialchars($risposte_utente['dbms']) ?>
        <?php if ($risposte_utente['dbms'] === $risposte_corrette['dbms']) : ?>
            <span style="color: green;">&#10004;</span>
        <?php else : ?>
            <span style="color: red;">&#10008;</span>
        <?php endif; ?>
    </p>

    <p>Seleziona i seguenti concetti relativi ai DBMS:</p>
    <ul>
        <?php foreach ($risposte_utente['concetti'] as $concetto) : ?>
            <li>
                <?= htmlspecialchars($concetto) ?>
                <?php if (in_array($concetto, $risposte_corrette['concetti'])) : ?>
                    <span style="color: green;">&#10004;</span>
                <?php else : ?>
                    <span style="color: red;">&#10008;</span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Risposta aperta</h2>
    <p><?= nl2br(htmlspecialchars($risposte_utente['opinione'])) ?></p>
    <p>Analisi del testo:</p>
    <ul>
        <li>Parole: <?= $risposta_opinione_analisi['parole'] ?></li>
        <li>Consonanti: <?= $risposta_opinione_analisi['consonanti'] ?></li>
        <li>Vocali: <?= $risposta_opinione_analisi['vocali'] ?></li>
        <li>Caratteri numerici: <?= $risposta_opinione_analisi['numerici'] ?></li>
    </ul>
</body>
</html>
