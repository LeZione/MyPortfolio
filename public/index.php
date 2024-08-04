<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Keith's Portfolio</title>
        <link rel="stylesheet" href="layout.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk&family=Farro&family=Gotu&family=Licorice&family=Livvic:wght@100&family=Lobster&family=M+PLUS+Code+Latin&family=Source+Code+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="reset.css">

        <script>
            function redirectToProfile(){
                window.location.href = "http://localhost/MyPortfolio/pages/myProfile.php"
            }

            window.onload = function() {
                var myNameSpan = document.querySelector(".myName");
                if (myNameSpan){
                    myNameSpan.addEventListener("click", redirectToProfile);
                }
            }
        </script>
    </head>

    <body>
        <div class = "container">
            <div class = "mainContent">
                <div class ="introGreeting">
                    <?php
                        echo '<span class = "greeting">Hi, I am</span>';
                        echo '<span class ="myName">Keith Emmanuel M. Prado</span>';
                    ?>
                </div> 
            </div>
        </div>
    </body>
</html>