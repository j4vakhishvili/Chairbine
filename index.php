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
        <link rel="stylesheet" href="assets/style/signup.css">
    </head>
    <body>
    <main>
        <center><img src="assets/icons/LOGO.svg" alt="LOGO"></center>
        <section>
            <h2>არ გაქვს<br>ანგარიში?<h2 class="caps">შემოგვიერთდი!</h2></h2><br>
            <form action="">
                <input type="name" placeholder="რა გქვია?" name="name" required oninvalid="this.setCustomValidity('ეს ველი ცარიელია!')">
                <input type="email" placeholder="გაგვიზიარე ელ-ფოსტა" name="email" required oninvalid="this.setCustomValidity('ეს ველი ცარიელია!')">
                <div class="password"><input type="password" placeholder="შეიყვანე პაროლი" name="password" id="password" required oninvalid="this.setCustomValidity('ეს ველი ცარიელია!')"><input type="checkbox" onclick="showPassword()" id="showPass"></div>
                <input type="submit" value="რეგისტრაცია" class="submit">
            </form>
            <p>გაიარე <a href="authorise.php">ავტორიზაცია</a>, თუ უკვე ხარ ჩვენი ოჯახის წევრი</p>
        </section>
    </main>

    <script src="assets/script/showPass.js"></script>
    </body>
</html>