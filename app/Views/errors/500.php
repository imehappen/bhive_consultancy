<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Server Error</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #0d0d0d; color: #fff; min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 2rem; }
        .container { max-width: 600px; }
        h1 { font-size: 7rem; font-weight: 700; color: #e0b20e; line-height: 1; margin-bottom: 0.5rem; }
        h2 { font-size: 1.8rem; font-weight: 600; margin-bottom: 1rem; }
        p { color: #999; font-size: 1.05rem; margin-bottom: 2rem; }
        a { display: inline-block; background: #e0b20e; color: #0d0d0d; padding: 0.75rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; }
        a:hover { background: #b8920c; transform: translateY(-2px); }
        .trace { background: rgba(255,255,255,0.05); border-radius: 8px; padding: 1rem; margin-top: 2rem; text-align: left; overflow-x: auto; }
        .trace pre { color: #e0b20e; font-size: 0.8rem; white-space: pre-wrap; }
    </style>
</head>
<body>
    <div class="container">
        <h1>500</h1>
        <h2><?= $title ?? 'Server Error' ?></h2>
        <p><?= $message ?? 'Something went wrong on our end. Please try again later.' ?></p>
        <?php if (!empty($trace)): ?>
        <div class="trace"><pre><?= htmlspecialchars($trace) ?></pre></div>
        <?php endif; ?>
        <br>
        <a href="/">Back to Home</a>
    </div>
</body>
</html>
