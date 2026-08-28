<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista del Súper</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 40px auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border-bottom: 1px solid #ddd; text-align: left; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>🛒 Lista del Súper</h1>
    @if (session('success'))
    <div style="background:#d4edda; color:#155724; padding:10px; border-radius:4px; margin-bottom:15px;">
        {{ session('success') }}
    </div>
    @endif

    @yield('content')

</body>
</html>