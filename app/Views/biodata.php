<!DOCTYPE html>
<html>

<head>
    <title>Data Diri</title>
</head>

<body>
    <h1>Data Diri</h1>
    <ul>
        <li><strong>Nama:</strong> <?= esc($data['nama']) ?></li>
        <li><strong>NIM:</strong> <?= esc($data['nim']) ?></li>
        <li><strong>Alamat:</strong> <?= esc($data['alamat']) ?></li>
        <li><strong>Program Studi:</strong> <?= esc($data['prodi']) ?></li>
        <li><strong>Hobi:</strong>
            <ul>
                <?php foreach ($data['hobi'] as $hobi) : ?>
                    <li><?= esc($hobi) ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</body>

</html>