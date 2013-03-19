 <!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/jquery/jQuery.js"></script>
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/bootstrap/bootstrap.min.js"></script>
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/bootstrap/bootstrap.js"></script>
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/bootstrap/sticky-headers.js"></script>
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/google/googlechart.min.js"></script>
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/google/prettify.js"></script>
 <script src="<?php if(defined('URL')) echo URL; ?>emp/emp/lib/js/phpjs/phpjs.min.js"></script>
<script>
    $(document).ready(function(){
        var CalTitle="Total Calories Today: ";
        if(localStorage.calories>0) $(".count_area>p").html(CalTitle+localStorage.calories);
        $("#add_calorie").click(function(){
            var calories= prompt("How many calories would you like to add?");
            localStorage.calories=(localStorage.calories>0)?parseInt(localStorage.calories)+parseInt(calories):parseInt(calories);
            if(calories==0) localStorage.calories=0;
            $(".count_area>p").html(CalTitle+localStorage.calories);
        });
    });
</script>

</body>
</html>
