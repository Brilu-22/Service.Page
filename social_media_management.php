<!-- social_media_management.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Management</title>
</head>
<body>
    <h1>Schedule a Social Media Post</h1>
    <form method="POST" action="schedule_post.php">
        <select name="platform">
            <option value="instagram">Instagram</option>
            <option value="linkedin">LinkedIn</option>
            <option value="facebook">Facebook</option>
        </select>
        <textarea name="postContent" placeholder="Your post content"></textarea>
        <button type="submit">Schedule Post</button>
    </form>
</body>
</html>
