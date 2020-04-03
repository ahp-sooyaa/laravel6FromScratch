<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test page</title>
</head>
<body>
    <h1>Hello from test.blade.php</h1>
    <p><?= htmlspecialchars($name, ENT_QUOTES) ?></p>
    <p>{{ $name }}</p> {{-- this code changed to <p><?php echo e($name); ?></p> --}}
</body>
</html>