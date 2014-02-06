<!DOCTYPE html>
<html>
  <head>
    <title>Workspace</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="workspace.css" type="text/css" />
  </head>
  <body>
    
    <div class="wrapper">
      <h1>Workspace @ MyXoToD</h1>
      <?php
      $files = scandir(".");
      $current_char = "";
      foreach ($files as $file) {
        switch ($file) {
          case ".":
          case "..":
          case "index.php":
          case "index.php~":
          case "workspace.css":
          case "workspace.sass":
            continue;
          break;
          default:
            if ($current_char != $file[0]) {
              $current_char = $file[0];
              echo "<h2>".$current_char."</h2>";
            }

            echo "<a href='/".$file."'>".$file."</a><br />";
          break;
        }
      }
      ?>
    </div>

  </body>
</html>