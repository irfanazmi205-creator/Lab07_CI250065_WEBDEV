<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 7a Q1</title>
</head>

<body>
    <?php
    $name = "MUHAMMAD NOR IRFAN BIN NOR AZMI";
    $matric = "CI250065";
    $course = "Web Development";
    $year = "Year 3";
    $address = "No.25, Jalan Geliga 3, Taman Daiman Jaya";
    ?>
    <table>
        <tr>
            <td>Name :</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number :</td>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td>Course :</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study :</td>
            <td><?php echo "$year"; ?></td>
        </tr>
        <tr>
            <td>Address :</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>

</html>