﻿<h1><?php echo $work_heading; ?></h1>
<p class="w3-xlarge w3-text-white">Ooops. The page couldn't be found.</p>

<div class="transform-translate">
    404
</div>

<style>
    .transform-translate {
        width:70px;
        margin: 10em auto;
        text-align : center;
        background-color:lightgreen;
        transform:scale(11,11);

        /* For Safari 3.1 to 6.0 */
        -webkit-transition-property: border-radius;
        -webkit-transition-duration: 2s;
        -webkit-transition-timing-function: linear;
        -webkit-transition-delay: 1s;
        /* Standard syntax */
        transition-property: border-radius;
        transition-duration: 2s;
        transition-timing-function: linear;
        transition-delay: 1s;
    }
    .transform-translate:hover{
        border-radius: 1em;

    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("body").mousemove(function() {
            $("div").css("color", "#ff33a0");
        });
    });
</script>
