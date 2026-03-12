<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM tasks WHERE user_id=? ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();
?>

<link rel="stylesheet" href="style.css">
<div class="container">

<h2>Your Tasks</h2>

<form action="add_task.php" method="POST">
    <input name="task" placeholder="New task" required>
    <button>Add</button>
</form>

<ul>

<?php while($row = $result->fetch_assoc()): ?>

<li>
    <?php echo htmlspecialchars($row['task']); ?>
    <a href="delete_task.php?id=<?php echo $row['id']; ?>">Delete</a>
</li>

<?php endwhile; ?>

</ul>

<a href="logout.php">Logout</a>

</div>