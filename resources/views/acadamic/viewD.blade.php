<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Document</title>
</head>
<body>
    
    <iframe
        src="{{ asset($filePath) }}"
        style="width: 100%; height: 800px; border: none;">
    </iframe>
</body>
</html>
