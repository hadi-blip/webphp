<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: {{ header_color }}; }
    </style>
</head>
<body>
    <h1>{{ header_text }}</h1>
    <p>{{ body_text }}</p>
    <p>Current date and time: <?php echo date('Y-m-d H:i:s'); ?></p>
</body>
</html>
