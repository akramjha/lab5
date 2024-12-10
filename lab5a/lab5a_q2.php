<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
   $student = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21,
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20,
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22,
    ],
];

echo "<table>";
echo "<tr><th>Name</th><th>Program</th><th>Age</th></tr>";

foreach($student as $student) {
    echo "<tr>";
    echo "<td>". $student['name']. "</td>";
    echo "<td>". $student['program']. "</td>";
    echo "<td>". $student['age']. "</td>";
    echo "</tr>";
}
echo "</table>";
	  ?>

</body>
</html>
