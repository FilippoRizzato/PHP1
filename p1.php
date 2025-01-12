<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo DBMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modulo DBMS</h1>
    <form action="risultati.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <h2>Domande sui DBMS</h2>

        <!-- Esempio di pulsanti di scelta -->
        <label>Quale tra questi è un DBMS relazionale?</label><br>
        <input type="radio" id="mysql" name="dbms" value="MySQL">
        <label for="mysql">MySQL</label><br>
        <input type="radio" id="mongodb" name="dbms" value="MongoDB">
        <label for="mongodb">MongoDB</label><br><br>

        <!-- Esempio di caselle di selezione -->
        <label>Seleziona i seguenti concetti relativi ai DBMS:</label><br>
        <input type="checkbox" id="sql" name="concetti[]" value="SQL">
        <label for="sql">SQL</label><br>
        <input type="checkbox" id="noSql" name="concetti[]" value="NoSQL">
        <label for="noSql">NoSQL</label><br><br>

        <!-- Campo di testo per la risposta libera -->
        <label for="opinione">Esprimi la tua opinione sui DBMS:</label><br>
        <textarea id="opinione" name="opinione" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>
