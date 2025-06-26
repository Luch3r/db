<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drips</title>
</head>
<body>
    <?php

$site_title = "Arcade Games";
$games = [
    [
        'id' => 2,
        'title' => 'Змейка',
        'description' => '',
        'thumbnail' => '',
        
    ],
    [
        'id' => 3,
        'title' => 'Тетрис',
        'description' => '',
        'thumbnail' => '',
        
    ],
    [
        'id' => 4,
        'title' => 'Пин-Понг',
        'description' => '',
        'thumbnail' => '',
        
    ]
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color:rgb(247, 226, 226);
            color: #333;
            text-align: center;
        }
        
        header {
            background: linear-gradient(135deg,rgb(251, 110, 110),rgb(115, 0, 255));
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            text-align: center;
        }
        
        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
            text-align: center;
        }
        
        .game-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgb(212, 73, 73);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }
        
        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgb(255, 176, 176);
        }
        
        .game-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        
        .game-info {
            padding: 1rem;
        }
        
        .game-info h3 {
            margin-bottom: 0.5rem;
        }
        
        .game-info p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .btn {
            display: inline-block;
            background:rgb(251, 110, 110);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background:rgb(251, 110, 110);
        }
        
        .plays-count {
            color: #888;
            font-size: 0.8rem;
        }
        
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        @media (max-width: 600px) {
            .game-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php echo $site_title; ?></h1>
            <p></p>
        </div>
    </header>
    
    <main class="container">
        <section>
            <h2>игры</h2>
            <div class="game-grid">
                <?php foreach ($games as $game): ?>
                    <div class="game-card">
                        <img src="<?php echo $game['thumbnail']; ?>" alt="<?php echo $game['title']; ?>">
                        <div class="game-info">
                            <h3><?php echo $game['title']; ?></h3>
                            <p><?php echo $game['description']; ?></p>
                            
                            <a href="game.php?id=<?php echo $game['id']; ?>" class="btn">Играть</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <section>
            
        </section>
    </main>
    
    <footer>
        
    </footer>
</body>
</html>
</body>
</html>