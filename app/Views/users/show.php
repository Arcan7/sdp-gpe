<!DOCTYPE html>
<html>

<head>
    <title>Voir un utilisateur</title>
</head>

<body>
    <h1>Utilisateur : <?= $user['username'] ?></h1>
    <p>Email: <?= $user['email'] ?></p>
    <a href="<?= base_url('users/edit/' . $user['uid']) ?>">Modifier</a>
    <form action="<?= base_url('users/delete/' . $user['uid']) ?>" method="post" style="display:inline;">
        <button type="submit">Supprimer</button>
    </form>
    <a href="<?= base_url('users') ?>">Retour à la liste</a>
</body>

</html>