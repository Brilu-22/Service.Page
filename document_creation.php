<!-- document_creation.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#documentEditor'
        });
    </script>
    <title>Document Creation</title>
</head>
<body>
    <h1>Create a Document</h1>
    <form method="POST" action="save_document.php">
        <textarea id="documentEditor" name="documentContent"></textarea>
        <button type="submit">Save Document</button>
    </form>
</body>
</html>
