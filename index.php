<?php

$records = include 'app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOB Students</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
    <br>
    <br>
    <h1 style="text-align: center;">University of Bahrain Students Enrollment by Nationality</h1>
    <br>
    <table>
        <thead>
            <tr>
                <?php if (!empty($records)): ?>
                    <?php foreach ($records[0] as $field => $value): ?>
                        <th><?php echo htmlspecialchars($field); ?></th>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
                <tr>
                    <?php foreach ($record as $value): ?>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>