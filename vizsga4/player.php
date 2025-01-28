<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/player.css">
    <link rel="shortcut icon" href="img/Új projekt.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    
        <?php include 'mainPHP/header_player.php'; ?> 

    <main>
        <div class="content">
            <div class="datas">
                <h2>In game data</h2>              
                <div class="profile">
                    <img src="img/yuri-kondo-knight1000.jpg" alt="profil">
                    <ul>
                        <li>Name:</li>
                        <li>{playername}</li>
                        <li></li>
                    </ul>
                    <ul>
                        <li>Character:</li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li>Progress:</li>
                        <li></li>
                        <li><input type="range" min="0" max="100" step="20" value="60" class="slider"></li>
                    </ul>
                    <ul>
                        <li>Armory:</li>
                        <li></li>
                        <li><input type="range" min="0" max="100" step="25" value="8    0" class="slider"></li>
                    </ul>
                </div>
            </div>
        </div>


        <!---
        <div class="container">
            <div class="second">
                <div class="screens">
                    
                </div>
            </div>
            <div class="screen-img">
                
            </div>
        </div>
        -->
    </main>

    <?php include 'mainPHP/footer.php'; ?> 

</div>
</body>
</html>