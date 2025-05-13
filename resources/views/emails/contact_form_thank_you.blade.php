<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neue Anfrage - PflegePur</title>
</head>
<body>
    <p>Es wurde eine Nachricht über das Kontaktformular von PflegePur verfasst:</p>

<p>Name: {{ $validatedData["name"] }}</p>
<p>E-Mail: {{ $validatedData["email"] }}</p>
<p>Tel.: {{ $validatedData["phone"] }}</p>
<p>Ort: {{ $validatedData["city"] }}</p>
<p>Nachricht: {{ $validatedData["message"] }}</p>

</body>
</html>
