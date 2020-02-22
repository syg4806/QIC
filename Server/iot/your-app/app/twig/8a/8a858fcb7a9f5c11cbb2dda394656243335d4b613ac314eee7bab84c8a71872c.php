<?php

/* charts/dynamic-chart-s1.phtml */
class __TwigTemplate_41042acaa3f61f80aa0fac537e4f941f4bc75cda0a7ecde77cd3d4399c279323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
<script type=\"text/javascript\">
    google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var jsonData = \$.ajax({
            url: \"/charts/chart3_json\",
            dataType:\"json\",
            data : 
            async: false
            }).responseText;

            // parse the json data
            var oobj = JSON.parse(jsonData);
            
            var s_array = [\"s1\", \"s2\", \"s3\", \"s4\", \"s5\", \"s6\"];
            var title_array = [\"O2 Chart\", \"NO2 Chart\", \"pm25 Chart\", \"S4 Chart\", \"S5 Chart\", \"S6 Chart\"];

            for (i=0; i<s_array.length; i++) {
                // want to grab set of data for single sensor
                var newData = JSON.stringify(oobj[s_array[i]][0]);

                // Create our data table out of reduced json
                var data = new google.visualization.DataTable(newData);

                var options = {
                    width: 400, height: 240,
                    title: title_array[i],
                    hAxis: {
                        title: 'Date/Time', 
                        slantedText: true
                    }
                };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div_' + s_array[i]));
                chart.draw(data, options);
    
            }
            
//        setInterval(drawChart, 5000);
    
    }
</script>
</head>
<body>
<div id=\"chart_div_s1\"></div>
<div id=\"chart_div_s2\"></div>
<div id=\"chart_div_s3\"></div>
<div id=\"chart_div_s4\"></div>
<div id=\"chart_div_s5\"></div>
<div id=\"chart_div_s6\"></div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "charts/dynamic-chart-s1.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/* <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>*/
/* <script type="text/javascript">*/
/*     google.load("visualization", "1", {packages:["corechart"]});*/
/*     google.setOnLoadCallback(drawChart);*/
/*     function drawChart() {*/
/*         var jsonData = $.ajax({*/
/*             url: "/charts/chart3_json",*/
/*             dataType:"json",*/
/*             data : */
/*             async: false*/
/*             }).responseText;*/
/* */
/*             // parse the json data*/
/*             var oobj = JSON.parse(jsonData);*/
/*             */
/*             var s_array = ["s1", "s2", "s3", "s4", "s5", "s6"];*/
/*             var title_array = ["O2 Chart", "NO2 Chart", "pm25 Chart", "S4 Chart", "S5 Chart", "S6 Chart"];*/
/* */
/*             for (i=0; i<s_array.length; i++) {*/
/*                 // want to grab set of data for single sensor*/
/*                 var newData = JSON.stringify(oobj[s_array[i]][0]);*/
/* */
/*                 // Create our data table out of reduced json*/
/*                 var data = new google.visualization.DataTable(newData);*/
/* */
/*                 var options = {*/
/*                     width: 400, height: 240,*/
/*                     title: title_array[i],*/
/*                     hAxis: {*/
/*                         title: 'Date/Time', */
/*                         slantedText: true*/
/*                     }*/
/*                 };*/
/* */
/*                 var chart = new google.visualization.LineChart(document.getElementById('chart_div_' + s_array[i]));*/
/*                 chart.draw(data, options);*/
/*     */
/*             }*/
/*             */
/* //        setInterval(drawChart, 5000);*/
/*     */
/*     }*/
/* </script>*/
/* </head>*/
/* <body>*/
/* <div id="chart_div_s1"></div>*/
/* <div id="chart_div_s2"></div>*/
/* <div id="chart_div_s3"></div>*/
/* <div id="chart_div_s4"></div>*/
/* <div id="chart_div_s5"></div>*/
/* <div id="chart_div_s6"></div>*/
/* </body>*/
/* </html>*/
