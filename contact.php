<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="box-gray">
        <div class="wrap">
            <h1>Contact</h1>
        </div>
    </div>
    <section class="contact">
        <div class="wrap">
            <form class="form-contact" action="">
                <div class="container-input">
                    <label for="name">Name</label>
                    <input type="text" id="name">
                </div>
                <div class="container-input">
                    <label for="email">Email</label>
                    <input type="email" id="email">
                </div>
                <div class="container-input">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject">
                </div>
                <div class="container-input">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <?php include "footer.php" ?>
    <?php include "scripts.php" ?>  
</body>
</html>