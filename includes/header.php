<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Default Title'; ?></title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <script src="/public/assets/js/app.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/blogs/add">Add Blog</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </header>