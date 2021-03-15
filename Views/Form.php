<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <form action="index.php?action=upload" method="post" enctype="multipart/form-data">
        <div>
            <label>Nom</label>
            <input type="text" name='name' />
        </div>
        <div>
            <label>Image</label>
            <input type="file" name='file' />
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>