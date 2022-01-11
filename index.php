<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
    </script>
    <script src="filemanager.js" defer></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!-- <div class="wrapper">
        <div><a href=""><img src="./models/popochan.jpg" alt=""></a></div>
        <div>
            <model-viewer src="./models/applefuji_preview.glb" ios-src="./models/applefuji_preview.usdz" alt="3D Model"
                auto-rotate camera-controls ar ar-modes="quick-look scene-viewer webxr" shadow-intensity="1">
            </model-viewer>
        </div>
        <div>
            <model-viewer src="./models/applefuji_raw.glb" ios-src="./models/applefuji_raw.usdz" alt="3D Model"
                auto-rotate camera-controls ar ar-modes="quick-look scene-viewer webxr" shadow-intensity="1">
            </model-viewer>
        </div>
        <div>
            <model-viewer src="./models/camera_raw.glb" ios-src="./models/camera_raw.usdz" alt="3D Model" auto-rotate
                camera-controls ar ar-modes="quick-look scene-viewer webxr" shadow-intensity="1">
            </model-viewer>
        </div>
        <div>
            <model-viewer src="./models/mario_raw.glb" ios-src="./models/mario_raw.usdz" alt="3D Model" auto-rotate
                camera-controls ar ar-modes="quick-look scene-viewer webxr" shadow-intensity="1">
            </model-viewer>
        </div>
        <div>Five</div>
        <div>Six</div>
        <div>Seven</div>
        <div>Eight</div>
    </div> -->

    <?php
    // $images = glob('./models/*jpg');
    // foreach($images as $v) {
    //     echo "<img src='", $v, "' alt='' loading='lazy'>¥n";
    // }
    ?>

    <div class="wrapper">
    <?php
    $glbFile = glob('./models/*glb');

    foreach ($glbFile as $v) {
        $usdzFilename = pathinfo($v, PATHINFO_FILENAME);
        $usdzFile = "./models/" . $usdzFilename . ".usdz";

        echo "<div>".PHP_EOL;
        echo "<model-viewer src='", $v, "' ios-src='", $usdzFile, "' alt='3D Model' auto-rotate
        camera-controls ar ar-modes='quick-look scene-viewer webxr' shadow-intensity='1'>".PHP_EOL;
        echo "</model-viewer>".PHP_EOL;
        echo "</div>".PHP_EOL;
    }
    ?>
    </div>

    <!-- <div class="control">
    <form id="uploadForm" enctype="multipart/form-data">
      <input type="file" id="upload" name="modelfile" accept=".glb,.usdz">
      <button type="button" id="post">Upload</button>
    </form> -->

</body>

</html>