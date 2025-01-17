<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting-Visualizer</title>
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="shortcut icon" href="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/undefined/external-vertical-bars-customer-feedback-flaticons-lineal-color-flat-icons.png" type="image/x-icon">
</head>
<body>
      <div class="navbar">
    <?php include('../Navbar.php'); ?>
    </div>
    <div class="container">
        <div class="home_icon"><img onclick="home_()" src="https://img.icons8.com/fluency-systems-regular/48/undefined/home.png"/></div>
        <div class="heading">Sorting Visualizer</div>
        <div class="comparision">
            <div onclick="set_algo(this)" id="bubble" class="buttons">Bubble Sort</div>
            <div onclick="set_algo(this)" id="selection" class="buttons">Selection Sort</div>
            <div onclick="set_algo(this)" id="insertion" class="buttons">Insertion Sort</div>
            <div onclick="set_algo(this)" id="shell" class="buttons">Shell Sort</div>
        </div>
        <div class="dandc">
            <div onclick="set_algo(this)" id="quick" class="buttons">Quick Sort</div>
            <div onclick="set_algo(this)" id="merge" class="buttons">Merge Sort</div>
        </div>
        
        <div class="visualizer_cont">.
            <div class="visualizer_screen">
                <ul class="bar_list"></ul>
            </div>
            <div class="button_cont">
                <div class="cont_sliders">
                    <div class="speed_slider">
                        <h1>Speed</h1>
                        <input id="speedslider" type="range" class="slider">
                    </div>
                    <button onclick="randomize_bars()" id="random" class="slider_randomize_btn">Randomize</button>
                    
                    <div class="size_slider">
                        <h1>Size</h1>
                        <input id="sizeslider" type="range" class="slider">
                    </div>
                </div>
                <div class="cont_buttons">
                    <button onclick="start_visualize()" id="start" class="cont_button_group">Start</button>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="static/js/index.js"></script>
</html>
