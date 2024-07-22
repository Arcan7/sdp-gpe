<!DOCTYPE html>
<html>
<head>
    <title>Modifier un utilisateur</title>
</head>
<body>
    <h1>Modifier un utilisateur</h1>
    <form action="<?= base_url('users/update/' . $user['uid']) ?>" method="post">
        <label for="name">Nom:</label>
        <input type="text" id="username" name="username" value="<?= $user['username'] ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?= $user['email'] ?>">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
