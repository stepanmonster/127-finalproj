<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sakay na Iloilo!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo-title">
            <img src="logo.png" alt="Logo" class="logo">
            <h1>Sakay na Iloilo!</h1>
        </div>
    </header>

    <nav class="main-nav">
        <button onclick="location.href='find_route.php'">Route Finder</button>
        <button onclick="location.href='view_archive.php'">Saved Trips</button>
        <div class="login-link"><a href="admin_login.html">Admin Login</a></div>
    </nav>

    <section class="intro">
        <h2>Welcome to Sakay na Iloilo!</h2>
        <p>Use the <strong>Route Finder</strong> to get jeepney route details, fare estimates, and trip schedules based on your pickup and drop-off points.</p>
        <p>All data is based on jeepney routes and terminals in Iloilo City.</p>
    </section>

    <div class="map-section">
        <h2>Sample Terminal Map (Static)</h2>
        <div class="map">
            <div class="map-label" style="top: 30px; left: 20px;">Landmark 1</div>
            <div class="map-label" style="top: 20px; right: 20px;">Terminal 1</div>
            <div class="map-label" style="bottom: 20px; left: 50%;">Terminal 2</div>
        </div>
    </div>
</body>
</html>
