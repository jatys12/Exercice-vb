<!DOCTYPE html>
<html>
<head>
    <title>Chute Libre</title>
</head>
<body>
    <h2>Simulation de Chute Libre</h2>
    <form method="post" action="/chutelibre/calculer">
        <label for="astre">Choisir un astre :</label>
        <select name="astre" id="astre">
            <option value="Soleil">Soleil</option>
            <option value="Terre">Terre</option>
            <option value="Lune">Lune</option>
            <option value="Mars">Mars</option>
            <option value="Jupiter">Jupiter</option>
        </select><br><br>

        <label for="temps">Temps (secondes) :</label>
        <input type="number" step="0.1" name="temps" id="temps" required><br><br>

        <input type="submit" value="Calculer">
    </form>
</body>
</html>
