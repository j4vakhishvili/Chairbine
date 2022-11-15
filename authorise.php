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
            <h2>გაიარეა<br>ავტორიზაცია</h2><br>
            <form action="">
                <input type="text" placeholder="შეიყვანე ელ-ფოსტა" name="email" required oninvalid="this.setCustomValidity('ეს ველი ცარიელია!')">
                <div class="password"><input type="password" placeholder="შეიყვანე პაროლი" name="password" id="password" required oninvalid="this.setCustomValidity('ეს ველი ცარიელია!')"><input type="checkbox" onclick="showPassword()" id="showPass"></div>
                <input type="submit" value="ავტორიზაცია" class="submit">
            </form>
            <p>არ გაქვს ანგარიში? <a href="index.php">შემოგვიერთდი!</a></p>
        </section>
    </main>

    <script src="assets/script/showPass.js"></script>
    </body>
</html>