<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue, {{ $name }}!</h1>
    <p>Date : {{ $date }}</p>
    <p>Âge : {{ $age }}</p>
    <p>Ville : {{ $ville }}</p>
    <p>Domaine : {{ $domaine }}</p>
    <p id="heureParis">Heure à Paris : {{ $heureParis }}</p>

    <script>
        function mettreAJourHeure() {
            var heureElement = document.getElementById('heureParis');
            var maintenant = new Date();
            var options = { timeZone: 'Europe/Paris', hour: 'numeric', minute: 'numeric', second: 'numeric' };
            var heureParis = maintenant.toLocaleTimeString('fr-FR', options);
            heureElement.innerHTML = 'Heure à Paris : ' + heureParis;
        }

        // Mettre à jour l'heure toutes les secondes (1000 millisecondes)
        setInterval(mettreAJourHeure, 1000);
    </script>
</body>
</html>
