<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Anagramme</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link href="css/style.css" rel='stylesheet'>
    </head>
    <body>
        <header>
            <h1>ANAGRAMME</h1>
        </header>
        <form id='form'>
            <input type='text' id='anagramme1' placeholder="Premier Mot"/>
            <input type='text' id='anagramme2' placeholder="Deuxième Mot"/>
            <input type='submit' value='verifier' id='btn'>
        </form>
        
        <div id="result"></div>

        <script type='text/javascript' >
        let content = document.getElementById('result');

function anagramme(anagramme1,anagramme2){
    var ANA1 = anagramme1.split("").sort().join();
    var ANA2 = anagramme2.split("").sort().join();
    return ANA1 == ANA2;
}


document.getElementById('form').addEventListener('submit', function(e){
    e.preventDefault();
    let anagramme1 = document.getElementById('anagramme1').value.toLowerCase();
    let anagramme2 = document.getElementById('anagramme2').value.toLowerCase();

    anagramme(anagramme1, anagramme2) ?  content.innerHTML = "BRAVO" : content.innerHTML = "FAUX";
})




        
        
        </script>
    </body>
</html> 