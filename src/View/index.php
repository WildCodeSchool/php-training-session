<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Website Ever - Home</title>
    <!-- TODO: look at the stylesheet and watch how the dark theme works -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/_navigation.php'; ?>
    <main>
        <form action="/" method="POST">
            <label>
                Light theme:
                <input name="theme" type="radio" value="light" checked />
            </label>
            <label>
                Dark theme:
                <input name="theme" type="radio" value="dark" />
            </label>
            <input type="submit" value="Save preference" />
            <!-- TODO: save the value in cookie and use the selected theme -->
            <!-- BONUS: check the selected theme -->
        </form>
    </main>
</body>
</html>
