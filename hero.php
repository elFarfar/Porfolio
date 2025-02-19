<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100..900;1,100..900&family=PT+Serif+Caption:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/fce38b1700.js"
      crossorigin="anonymous"
    ></script>
    <title>Homepage</title>
  </head>
<body>
  <section id="homepage">
        <div class="diagonal-container">
            <?php
                $sections = [
                    ["title" => "ABOUT ME", "class" => "about"],
                    ["title" => "CONTACTS", "class" => "contacts"],
                    ["title" => "PROJECTS", "class" => "projects"]
                ];

                foreach ($sections as $section) {
                    echo '<div class="diagonal-section ' . $section["class"] . '">';
                    echo '<span>' . $section["title"] . '</span>';
                    echo '</div>';
                }
            ?>
        </div>
    </section>

    <script src="script.js"></script>
  </body>
</html>