<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/showdown@1.9.1/dist/showdown.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/editor.css">
    </head>
    <body>
        <div id="topbar">
            <img src="imgs/icon.png">
            <h1>Notes</h1>
            <button onclick='save()'>Save</button>

<?php
$file = htmlspecialchars($_GET["file"]);

if($file) {
    // echo "Load this " . $file . ".";

    if(file_exists($file)) {
        echo "
        <script>
        fetch('" . $file . "')
        .then(response => response.text())
        .then((response) => {
          document.getElementById('input').innerHTML = response;
          updateOutput();
        })
        .catch(err => console.log(err));
        </script>
        ";
    }else {
        $myfile = fopen($file, "w") or die("Unable to open file!");
        fclose($myfile);
    }
} else {
    echo "Error: NO FILE SPECIFIED";
}
?>
        </div>
        <textarea id="input"></textarea>
        <div id="viewer"></div>
    </body>

    <script>
    var converter = new showdown.Converter();

    $('#input').on('input', updateOutput);

    function updateOutput() {
        html = converter.makeHtml($("#input").val());
        document.getElementById("viewer").innerHTML = html;
    }

    function save() {
        fetch('helpers/writeToFile.php?' + new URLSearchParams({
            file: "<?php echo $file; ?>",
            content: encodeURIComponent($("#input").val()),
        }));
    }
    </script>
</html>
