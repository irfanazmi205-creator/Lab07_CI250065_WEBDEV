<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

</head>

<body>
    <?php
        $students = [['name' => 'Alice', 'program' => 'BIP', 'age' => '21'],
        ['name' => 'Bob', 'program' => 'BIS', 'age' => '20'],
        ['name' => 'Raju', 'program' => 'BIT', 'age' => '22']
        ];
    ?>

    <table border="1">
        <thead>
            <tr>
                <td>Name</td>
                <td>Program</td>
                <td>Age</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['program']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>