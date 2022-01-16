<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
    </script>
    <!-- <script src="filemanager.js" defer></script> -->
    <script src="slidermanager.js" defer></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="slider.css">
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

<div class="container">

    <model-viewer src="" ios-src="" poster="" alt="3D Model" auto-rotate camera-controls ar ar-modes="webxr quick-look scene-viewer" quick-look-browsers="safari chrome" shadow-intensity="1">

        <div id="filename"></div>

        <button slot="ar-button" id="ar-button" style="display:none;">
            View AR
        </button>

        <div id="ar-prompt">
            <img src="./images/whitecircle.png">
        </div>

        <button id="ar-failure">
        AR is not tracking!
        </button>

        <div class="slider">
            <div class="slides">
    <?php
            $glbFile = glob('./models/*glb');

            foreach ($glbFile as $v) {
                $filename = pathinfo($v, PATHINFO_FILENAME);
                $filename2 = "'" . $filename . "'";
                $usdzFile = "./models/" . $filename . ".usdz";
                $thumbnail = "'./models/" . $filename . ".png'";

                echo '<button class="slide" onclick="switchSrc(this, ' . $filename2 . ')" style="background-image:url(' . $thumbnail . ');"></button>' . PHP_EOL;

            }
    ?>
            </div>
        </div>
    </model-viewer>

    </div>

    <!-- <button class="test"></button> -->

    <!-- <div class="wrapper"> -->
    <?php
    // $glbFile = glob('./models/*glb');

    // foreach ($glbFile as $v) {
    //     $usdzFilename = pathinfo($v, PATHINFO_FILENAME);
    //     $usdzFile = "./models/" . $usdzFilename . ".usdz";

    //     echo "<div>".PHP_EOL;
    //     echo "<model-viewer src='", $v, "' ios-src='", $usdzFile, "' alt='3D Model' auto-rotate
    //     camera-controls ar ar-modes='quick-look scene-viewer webxr' shadow-intensity='1'>".PHP_EOL;
    //     echo "</model-viewer>".PHP_EOL;
    //     echo "</div>".PHP_EOL;
    // }
    ?>
    <!-- </div> -->


    <!-- <div class="control">
    <form id="uploadForm" enctype="multipart/form-data">
      <input type="file" id="upload" name="modelfile" accept=".glb,.usdz">
      <button type="button" id="post">Upload</button>
    </form> -->

</body>
</html>