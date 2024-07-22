<!DOCTYPE html>
<html>
<head>
    <title>Créer un utilisateur</title>
</head>
<body>
    <h1>Créer un utilisateur</h1>
    <form action="<?= base_url('users') ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Créer</button>
    </form>
</body>
</html>
