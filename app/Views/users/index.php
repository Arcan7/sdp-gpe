<!DOCTYPE html>
<html>

<head>
    <title>Liste des utilisateurs</title>
</head>

<body>
    <h1>Liste des utilisateurs</h1>
    <a href="<?= base_url('users/create')?>">Créer un nouvel utilisateur</a>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li>
                <?= $user['username'] ?> - <?= $user['email'] ?>
                <a href="<?= base_url('users/edit/' . $user['uid']) ?>">Modifier</a>
                <a href="<?= base_url('users/' . $user['uid']) ?>">Voir</a>
                <form action="<?= base_url('users/delete/' . $user['uid']) ?>" method="post" style="display:inline;">
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>