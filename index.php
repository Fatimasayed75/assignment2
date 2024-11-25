<?php

$records = include 'app.php';
$fields_to_display = ['year', 'semester', 'the_programs', 'nationality', 'colleges', 'number_of_students'];
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
    <main class="container">
        <h1 style="text-align: center;">University of Bahrain Students Enrollment by Nationality</h1>
        <table role="grid">
            <thead>
                <tr>
                    <?php if (!empty($records)): ?>
                        <?php foreach ($fields_to_display as $field): ?>
                        <th><?php echo htmlspecialchars($field); ?></th>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                    <?php foreach ($fields_to_display as $field): ?>
                            <td><?php echo htmlspecialchars($record[$field] ?? ''); ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>