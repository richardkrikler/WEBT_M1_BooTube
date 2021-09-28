<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BooTube</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<main>
    <?php
    for ($i = 0; $i < 20; $i++) {
        echo '<h3>Dark Phoenix Song | This Fire Inside</h3>';
        echo '<h4>Source: YouTube</h4>';
        echo <<<VIDEOCODE
            <iframe
                width="560" height="315"
                src="https://www.youtube.com/embed/gyciPq_lD9U"
                title="Dark Phoenix Song | This Fire Inside"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
VIDEOCODE;
    }
    ?>
</main>
</body>
</html>