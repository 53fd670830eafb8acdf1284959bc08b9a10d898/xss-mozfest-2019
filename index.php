<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <title>Mozfest 2019</title>
    <link rel="stylesheet" href="resources/style.css">
    <script type="text/javascript" src="resources/scripts.js"></script>
    <?php
    // Get Code
    $code = ($_GET['code'] == null ? 'type your name above' : "Hello " . $_GET['code']);
    $button_text = $_GET['code'] == null ? "submit" : "submit / reset";
    ?>

</head>

<body>
    <div class="background-mask">
        <div class="content">
            <div class="header">
                <h1>
                    Welcome to Mozfest 2019!
                </h1>
            </div>
            <div class="space">

            </div>
            <div class="container">
                <form id="input-formform" action="./index.php" method="GET">
                    <input type="text" id="code" name="code" class="code" placeholder="<type your name here and press enter!>" />
                    <br />
                    <input type="submit" value="<?php echo $button_text; ?>" class="submit-button" />
                </form>
            </div>
            <div class="space"></div>
            <div class="container">
                <div class="xss-code" id="xxs-code">
                    <?php echo $code ?>
                </div>
            </div>
            <div class="space"></div>
            <div class="container">
                <div class="button-list">
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;script>alert(1)&lt;/script>
                    </button>
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;img src='_' onerror="alert('XSS time!');"/&gt;
                    </button>
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;button onclick="alert('XSS!')"&gt;Just a friendly button&lt;/button&gt;
                    </button>
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;script&gt;var x='XSS :)';while(prompt('Type the text between the brackets to escape -> [' + x + ']')!=x);&lt;/script&gt;
                    </button>
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;img src='https://ichef.bbci.co.uk/news/912/cpsprodpb/7D66/production/_105120123_gettyimages-831502910.jpg' height='35px' align='center'/&gt;
                    </button>
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;iframe src="https://web.archive.org/web/20191016231554/https://www.mozilla.org/en-US/" width='720px' height='480px'/&gt;
                    </button>
                    <button class="code-button" , onclick="copy_code(this)">
                        &lt;iframe src="jsshell.html" style="width:750px;height:510px;"&gt;&lt;/iframe&gt;
                    </button>

                </div>
            </div>
        </div>
    </div>
</body>

</html>