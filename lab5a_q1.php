<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Muhammad Irfan bin Ishak";
        $matric_number = "AI220138";
        $course = "Bachelor of Computer Science";
        $year_of_study = "Year 3";
        $address = "No 15,jalan 6/7b,Seksyen 6,Bandar Rinching";
    ?>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Details</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
    
</body>
</html>

