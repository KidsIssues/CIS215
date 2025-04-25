<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Survey: Dogs</title>  

    <style>
        body { background-color: lightcyan;}
        table, th, td { border: 1px solid; text-align: center;}
        div {align-content: center;}
    </style>
</head>
<body>

<?php
include 'dbconfig.php';
$db = connectDB();

$select = $db->prepare("SELECT * FROM Project2SQL");
$select->execute();
$info = $select->fetchAll(PDO::FETCH_ASSOC);
?>

<table class = "table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Animal</th>
            <th scope="col">Pet Age</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($info as $row) : ?>
            <tr>
                <td scope="row"><?php echo htmlspecialchars($row['id']); ?></td>
                <td scope="row"><?php echo htmlspecialchars($row['email']); ?></td>
                <td scope="row"><?php echo htmlspecialchars($row['age']); ?></td>
                <td scope="row"><?php echo htmlspecialchars($row['gender']); ?></td>
                <td scope="row"><?php echo htmlspecialchars($row['petType']); ?></td>
                <td scope="row"><?php echo htmlspecialchars($row['petAge']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>