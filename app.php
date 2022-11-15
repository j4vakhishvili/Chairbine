<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#7EDE00">
        <meta name="robots" content="index, follow">
        <meta name="language" content="georgian">
        <meta name="distribution" content="georgian">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chairbine APP</title>
        <link rel="icon" href="assets/icons/chairbine-logo.svg">
        <link rel="stylesheet" href="assets/style/default.css">
        <link rel="stylesheet" href="assets/style/container.css">
        <link rel="stylesheet" href="assets/style/app.css">
        <link rel="stylesheet" href="assets/style/header.css">
        <link rel="stylesheet" href="assets/style/nav.css">
    </head>
    <body>
    <?php include 'header.php';?>
    <?php include 'nav.php';?>
    <main>
        <div class="container">
            <section class="cal">
                <section class="separate calOne">
                    <h3>დამწვარი კალორიები</h3>
                    <?php 
                        $cal = "56cal";
                        echo "<h2>". $cal ."</h2>"; 
                    ?>
                </section>
                <section class="separate"></section>
            </section>
            <section class="offers current-offer">
                <section class="offers-head">
                    <div class="icon current-icon"></div>
                    <h4>მიმდინარე შეთავაზება</h4>
                </section>
                <section class="offers-body">
                    <section class="separateCurrentOffer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11915.24919448496!2d44.81947628638913!3d41.70298758303835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440d21a09b615d%3A0x4a3dec018fc8f00d!2z4YOo4YOQ4YOV4YOYIOGDmuGDneGDm-GDmA!5e0!3m2!1ska!2sge!4v1668447015784!5m2!1ska!2sge" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                    </section>
                    <section class="separateCurrentOffer">
                        <section class="remainsInfo">
                        <p>საიდან?</p>
                        <?php 
                            $locationFrom = "სახლი";
                            echo "<h4>". $locationFrom ."</h4>"; 
                        ?>
                        <p>სად?</p>
                        <?php 
                            $locationTo = "შავი ლომი";
                            echo "<h4>". $locationTo ."</h4>"; 
                        ?>
                        <div class="remains">
                            <section class="separateRemains">
                                <p class="remains">დარჩენილია</p>
                                <?php 
                                    $time = "20წთ";
                                    echo "<h5>". $time ."</h5>"; 
                                ?>
                            </section>
                            <section class="separateRemains">
                                <?php 
                                    $km = "3.5კმ";
                                    echo "<h6>". $km ."</h6>"; 
                                ?>
                            </section>
                        </div>
                        </section>
                    </section>
                </section>
            </section>
            <section class="offers current-offer">
                <section class="offers-head">
                    <div class="icon suits-u-icon"></div>
                    <h4>შენზე მორგებული შეთავაზებები</h4>
                </section>
                <section class="offers-body">
                </section>
            </section>
        </div>
    </main>

    </body>
</html>