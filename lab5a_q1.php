<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Lab 5a Q1</title>
    </head>
<body>
    <?php
    $name = "Ding Zi Ling";
    $matric = "AI240172";
    $course = "Bachelor of Computer Science (Information Security)";
    $study_year = "3";
    $address = "Parit Raja, Batu Pahat";
    ?>

    <table border="1">
        <tr><td>Name</td><td><?php echo "$name"; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo "$matric"; ?></td></tr>
        <tr><td>Course</td><td><?php echo "$course"; ?></td></tr>
        <tr><td>Year of study</td><td><?php echo "$study_year"; ?></td></tr>
        <tr><td>Address</td><td><?php echo "$address"; ?></td></tr>
    </table>

</body>
</html>
