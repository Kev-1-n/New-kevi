<?php
$kursi = 96;

if (isset($_POST['lek'])) {
    $lek = floatval($_POST['lek']);
    $euro = $lek / $kursi;
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Konvertues Lek në Euro</title>
</head>
<body>
    <h2>Konvertues nga Lek në Euro</h2>
    <form method="post">
        Shuma në Lek: <input type="number" name="lek" step="0.01" required>
        <button type="submit">Konverto</button>
    </form>

    <?php if (isset($euro)): ?>
        <p><?php echo $lek; ?> LEK = <?php echo round($euro, 2); ?> EUR</p>
    <?php endif; ?>
</body>
</html>
