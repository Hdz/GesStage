<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./vue/css/style.css" />
        <title>Gestion Stage</title>
        <script type="text/javascript" src="./vue/js/jquery.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('img.menu_head').click(function () {
            $('ul.menu_body').slideToggle('medium');
            });
        });
        </script>
    </head>
    <body>
	   <section>
            <header>
               <?php include("$entete"); ?>
            </header>
            <article>
                <?php include("$centre");?>
            </article>
        </section>
    </body>
</html>
