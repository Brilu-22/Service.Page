<!-- project_management.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
</head>
<body>
    <h1>Project Task Tracking</h1>
    <form method="POST" action="create_task.php">
        <input type="text" name="task_name" placeholder="Task Name" required>
        <input type="date" name="deadline" required>
        <textarea name="task_description" placeholder="Task Description" required></textarea>
        <button type="submit">Create Task</button>
    </form>
</body>
</html>
