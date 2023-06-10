<?php 
$hardware = ['Processor','Hard Disk','Motherboard','VGA Color','SSD','Monitor' ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4a</title>
</head>
<body>
    <h2>Macam-macam Perangkat Keras Komputer</h2>
    <ol>
    <?php foreach($hardware as $h) { ?>
        <li><?= $h; ?></li>
        <?php } ?>
    </ol>
    <br><br>
    
    <h2>Macam-macam Perangkat keras komputer</h2>
    <?php 
    array_push($hardware, 'Mode','Keyboard');
    asort($hardware);
    ?>
    <ol>
            <?php foreach($hardware as $h) { ?>
            <li><?= $h; ?></li>
            <?php } ?>
        </ol>
    
    
</body>
</html>

.navbar .navbar-nav a:hover {
    color: var(--primary);
}



.navbar .navbar-nav a::after {
    content: '';
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid var(--primary);
    transform: scale(0);
    transition: 0.2s linear;
}




.navbar .navbar-nav a:hover::after {
    transform: scaleX(0.5);
}




.navbar .navbar-extra a {
    color: #ffffff;
    margin: 0 0.5rem;
}



.navbar .navbar-extra a:hover {
    color: var(--primary);
}



.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-image: url("img/back.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
}



.hero::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 30%;
    bottom: 0;
    background: linear-gradient(0deg,rgb(255, 255, 255)3%, rgba(255,255,255,0)25%);
}



.hero .content {
    padding: 1.4rem 7%;
    max-width: 60rem;
}

.hero .content h1 {
    font-size: 2em;
    color: #ffffff;
}



.hero .content h1 span {
    color: var(--primary);
}


.hero .content p {
    font-size: 1.6rem;
    margin-top: 0.5rem;
    font-weight: 100;
}


.hero .content .cta {
    margin-top: 1rem;
    display: inline-block;
    padding: 1rem 3rem;
    font-size: 1.4rem;
    color: #ffffff;
    background-color: var(--primary);
    border-radius: 0.5rem;

}


/* laptop */
@media (max-width 1366px) {
    html {
        font-size: 75%;
    }
}



/* tablet */
@media (max-width 768px) {
    html {
        font-size: 62.5%;
     }
}



/*phone*/
@media (max-width 450px) {
    html {
        font-size: 55%;
    }
}




.navbar .navbar-nav {
    position: absolute;
    top: 100%;
    right: -100%;
    background-color: #ffffff;
    width: 30rem;
    height: 100vh;
    transition: 0.3s;
}