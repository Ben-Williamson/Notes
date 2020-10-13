<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/showdown@1.9.1/dist/showdown.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css"/>
    <link rel="stylesheet" href="css/main.css">
    <title>Notes</title>
  </head>
  <body>
      <div id="sidebar">
        <img src="imgs/icon.png">
        <h1>Welcome<br> to your notes!</h1>

        <div>
          <button onclick="newFolder()">New Folder</button>
          <button>New File</button>
          <button>Edit</button>
        </div>

        <div style="flex-grow: 1; overflow-y: scroll">
        <?php
        $files = scandir('pages');
        foreach($files as $file) {
          if($file == '.' || $file == '..') continue;
          if(strpos($file, '.md') !== false) {
            echo "<p>" . explode(".", $file)[0] . "</p>";
          } else {
            echo "<h4>" . $file . "</h4>";
            $subFiles = scandir('pages/' . $file);
            foreach($subFiles as $subFile) {
              if($subFile == '.' || $subFile == '..' || $subFile == $file) continue;
              echo "<p parent=" . preg_replace('/\s+/', '_', $file) . ">" . explode(".", $subFile)[0] . '</p>';
            }
            
          }
          echo "<br>";
        }
        ?>
        </div>
      </div>
      <div id="main">
        <h1>Welcome to Notes!</h1>
        <o>Select a note from the left to begin reading.</o>
      </div>
  </body>
  <script>
    function newFolder() {
      name = prompt("Enter folder name:");
      fetch("helpers/newFolder.php?name=" + name);

      setTimeout(function () {
        location.reload(); 
      }, 100);
      
    }

    $( "#sidebar p" ).on( "click", function() {
      fetch("pages/" + $( this ).attr('parent').replace(/_/g, ' ') + "/" + $( this ).text() + ".md?cacheBuster=" + Math.random(0, 1000))
        .then(response => response.text())
        .then((response) => {
          html = converter.makeHtml(response);
          document.getElementById("main").innerHTML = html;
        })
        .catch(err => console.log(err));
    });

    var converter = new showdown.Converter();
  </script>
</html>
