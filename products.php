<!-- products.php -->
<?php
include "db_connection.php";
include"styles.css";
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>


<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h2>Product List</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
        <li>
            <h3><?php echo $row["name"]; ?></h3>
            <p>Description: <?php echo $row["description"]; ?></p>
            <p>Price: <?php echo $row["price"]; ?></p>
            <img src="<?php echo $row["image_path"]; ?>" alt="<?php echo $row["name"]; ?>" width="150">
        </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
