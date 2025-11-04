<?php
$kurse = [
    "EUR" => 96,
    "USD" => 90,
    "GBP" => 112,
    "CHF" => 101,
    "JPY" => 0.60,
    "CAD" => 66,
    "AUD" => 61
];

if (isset($_POST['lek']) && isset($_POST['monedha'])) {
    $lek = floatval($_POST['lek']);
    $monedha = $_POST['monedha'];

    if (array_key_exists($monedha, $kurse)) {
        $vlera = $lek / $kurse[$monedha];
    }
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Konvertues Lek në Monedha të Huaja</title>
</head>
<body>
    <h2>Konvertues nga Lek në Monedha të Huaja</h2>

    <form method="post">
        Shuma në Lek:
        <input type="number" name="lek" step="0.01" required>

        <label for="monedha">Zgjidh monedhën:</label>
        <select name="monedha" id="monedha" required>
            <?php foreach ($kurse as $emri => $kursi): ?>
                <option value="<?php echo $emri; ?>"><?php echo $emri; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Konverto</button>
    </form>

    <?php if (isset($vlera)): ?>
        <p><?php echo $lek; ?> LEK = <?php echo round($vlera, 2); ?> <?php echo $monedha; ?></p>
    <?php endif; ?>
</body>
</html>
