<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireStyles
    @vite([
    'resources/js/app.js',
    'resources/css/app.css'
    ])
    @livewireScripts
</head>

<body style="margin: 0;padding: 0;overflow: hidden;">
    <div class="login-wrapper">
        <div class="login-container">
            <livewire:login-form>
        </div>
    </div>
</body>

</html>