<?php


if (!empty($_POST["realname"]) AND !empty($_POST["email"])) {
    $file = "hib2018_ctf_mobile.txt";
    $current = file_get_contents($file);
    $current .= htmlspecialchars($_POST["realname"]) . " - " . htmlspecialchars($_POST["email"]) . "\n";
    file_put_contents($file, $current);
}

?>

<!DOCTYPE html>
<html lang="en">

<!--
Themes Copyright (c) 2018 by Vineeth.TR (https://codepen.io/vineethtr/pen/NxqKoY)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<head>
    <meta charset="UTF-8">
    <title>EDID</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- flag{congr4tz_y0u_f0und_5} -->
<div class="panda">
    <div class="ear"></div>
    <div class="face">
        <div class="eye-shade"></div>
        <div class="eye-white">
            <div class="eye-ball"></div>
        </div>
        <div class="eye-shade rgt"></div>
        <div class="eye-white rgt">
            <div class="eye-ball"></div>
        </div>
        <div class="nose"></div>
        <div class="mouth"></div>
    </div>
    <div class="body"></div>
    <div class="foot">
        <div class="finger"></div>
    </div>
    <div class="foot rgt">
        <div class="finger"></div>
    </div>
</div>

<form action="edid.php" method="post">
    <div class="hand"></div>
    <div class="hand rgt"></div>
    <br>
    Enjoy, you won! Maybe you're lucky, fill your data...
    <div class="form-group">
        <input required="required" id="realname" name="realname" class="form-control"/>
        <label class="form-label"> Name and Surname </label>
    </div>
    <div class="form-group">
        <input required="required" id="email" name="email" class="form-control"/>
        <label class="form-label"> eMail </label>
        <button class="btn">Send</button>
    </div>
</form>

<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>

</html>



