<?php

/* air_chart.twig */
class __TwigTemplate_b2156e6535a683c4b37c92ff5d9b77432ba4de646348726b5d3e9a8ae79c8183 extends Twig_Template
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
        echo "<html lang=\"en\">
    <head>
        <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
        <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <!-- Required meta tags-->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"au theme template\">
        <meta name=\"author\" content=\"Hau Nguyen\">
        <meta name=\"keywords\" content=\"au theme template\">
    
        <!-- Title Page-->
        <title>Suite Car</title>

        <!-- Fontfaces CSS-->
        <link href=\"css/font-face.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Vendor CSS-->
        <link href=\"vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"vendor/vector-map/jqvmap.min.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"css/theme.css\" rel=\"stylesheet\" media=\"all\">

    </head>

    <body class=\"animsition\">
        <div class=\"page-wrapper\">
            <!-- HEADER MOBILE-->
            <header class=\"header-mobile d-block d-lg-none\">
                <div class=\"header-mobile__bar\">
                    <div class=\"container-fluid\">
                        <div class=\"header-mobile-inner\">
                            <a class=\"logo\" href=\"index.html\">
                                <img src=\"images/icon/logo.png\" alt=\"CoolAdmin\" />
                            </a>
                            <button class=\"hamburger hamburger--slider\" type=\"button\">
                                <span class=\"hamburger-box\">
                                    <span class=\"hamburger-inner\"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class=\"page-container\">
                <!-- HEADER DESKTOP-->
                <header id=\"header-desktop\">
                    <div class=\"section__content section__content--p30\">
                        <div class=\"container-fluid\">
                            <div class=\"logo\">
                                <a href=\"home\">
                                    <img src=\"images/icon/logo.png\" alt=\"Suite Car\" />
                                </a>
                            </div>
                            <div class=\"header-wrap\">
                                <div class=\"header-button\">         
                                    <a href=\"team\" class=\"nav\">Team</a>
                                    <a href=\"maps\" class=\"nav\">Map</a>
                                    <a href=\"air_chart\" class=\"nav\">Air Chart</a>
                                    <a href=\"heart_chart\" class=\"nav\">Heart Chart</a>
                                    <a href=\"list_view\" class=\"nav\">List View</a>
                                    <div class=\"account-wrap\">
                                        <div class=\"account-item clearfix js-item-menu\">
                                            <div class=\"image\">
                                                <img src=\"images/icon/avatar-03.jpg\" alt=\"J3SUNG\" />
                                            </div>
                                            <div class=\"content\">
                                                <a class=\"js-acc-btn\" href=\"#\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "</a>
                                            </div>
                                            <div class=\"account-dropdown js-dropdown\">
                                                <div class=\"info clearfix\">
                                                    <div class=\"image\">
                                                        <a href=\"#\">
                                                            <img src=\"images/icon/avatar-03.jpg\" alt=\"J3SUNG\" />
                                                        </a>
                                                    </div>
                                                    <div class=\"content\">
                                                        <h5 class=\"name\">
                                                            <a href=\"#\">";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "</a>
                                                        </h5> 
                                                        <span class=\"email\">";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"account-dropdown__body\">
                                                    <div class=\"account-dropdown__item\">
                                                        <a href=\"change_password_page\">
                                                            <i class=\"zmdi zmdi-account\"></i>Password Change</a>
                                                    </div>
                                                    <div class=\"account-dropdown__item\">
                                                        <a href=\"id_cancelation_page\">
                                                            <i class=\"zmdi zmdi-settings\"></i>ID Cancellation</a>
                                                    </div>
                                                    <div class=\"account-dropdown__item\">
                                                        <a href=\"signout\">
                                                            <i class=\"zmdi zmdi-power\"></i>Sign Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END HEADER DESKTOP-->

                <div class=\"main-content\" id=\"back_maps\">
                    <div class=\"section__content section__content--p30\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-md-12 m-t-20\">
                                    <div class=\"sensor_title\">
                                        <h3>Air Sensor Data</h3>
                                    </div><br>
                                    <div class=\"sensor_no\"> sensor_no : &nbsp </div>
                                    <form name=\"combobox\" class=\"combobox\">
                                        <select id=\"combo\" name=\"combo\">
                                        </select>
                                    </form>
                                    <div class=\"sensor_button_box\">
                                        <button class=\"sensor_button\" id=\"button_realtime\"> realtime </button>
                                        <button class=\"sensor_button\" id=\"button_historical\"> historical </button>
                                    </div><br>
                                    <!-- MAP DATA-->
                                    <div id=\"chart_div\">
                                        <script type=\"text/javascript\">
                                            var user_no = ";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["user_no"]) ? $context["user_no"] : null), "html", null, true);
        echo ";
                                            var sensor_no = ";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["sensor_no"]) ? $context["sensor_no"] : null), "html", null, true);
        echo ";
                                            \$now = new Date();
                                            
                                            if(";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["flag"]) ? $context["flag"] : null), "html", null, true);
        echo " == 0){
                                                \$(function(){ 
                                                    \$.ajax({
                                                    url: \"/charts/receive_combobox\",
                                                        dataType:\"text\",
                                                        async: false,
                                                        type : \"GET\",
                                                        data : {
                                                            \"user_no\" : user_no,
                                                            \"type\" : 0
                                                        },
                                                        success : function(data) {
                                                            \$data = JSON.parse(data);
                                                            addOption(\$data);
                                                        },
                                                        error : function(data) {
                                                            alert(\"There is something wrong@.\");
                                                        }
                                                    });
                                                })
                                            }
                                            else{
                                                var data_info = ";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["sensor_no"]) ? $context["sensor_no"] : null), "html", null, true);
        echo ";

                                                var frm = document.combobox;
                                                var op = new Option();
                                                op.value = data_info; // 값 설정
                                                op.text = \"Sensor_no : \" + data_info; // 텍스트 설정
                                        
                                                op.selected = true; // 선택된 상태 설정 (기본값은 false이며 선택된 상태로 만들 경우에만 사용)
                                        
                                                frm.combo.options.add(op); // 옵션 추가
                                            }
                                            function addOption(data){
                                                for(var index in data) {
                                                    var data_info = data[index].sensor_no;

                                                    var frm = document.combobox;
                                                    var op = new Option();
                                                    op.value = data_info; // 값 설정
                                                    op.text = \"Sensor_no : \" + data_info; // 텍스트 설정
                                            
                                                    op.selected = true; // 선택된 상태 설정 (기본값은 false이며 선택된 상태로 만들 경우에만 사용)
                                            
                                                    frm.combo.options.add(op); // 옵션 추가
                                                }
                                                sensor_no = \$(\"#combo option:selected\").val();
                                            } 
                                            
                                            google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
                                            google.setOnLoadCallback(drawChart);
                                            var CO = 0;
                                            var O3 = 0;
                                            var SO2 = 0;
                                            var NO2 = 0;
                                            var PM25 = 0;
                                            var view_type = 0;
                                            
                                            ";
        // line 237
        echo "
                                            function drawChart() {
                                                sensor_no = \$(\"#combo option:selected\").val();
                                                
                                                var jsonData = \$.ajax({
                                                    url: \"/charts/chart2_json\",
                                                    dataType:\"text\",
                                                    async: false,
                                                    type : \"GET\",
                                                    data : {
                                                        \"user_no\" : user_no,
                                                        \"sensor_no\" : sensor_no,
                                                        \"view_type\" : view_type,
                                                        \"start_date\" : start_date,
                                                        \"end_date\" : end_date,
                                                        \"type\" : 0
                                                    }
                                                }).responseText;
                                                //alert(jsonData);
                                                // Create our data table out of JSON data loaded from server.
                                                var data = new google.visualization.DataTable(jsonData);
                                                var options = {
                                                    title: 'Air Data Chart',
                                                    curveType: 'function',
                                                    series: {
                                                        0: { color: '#ff111d'},
                                                        1: { color: '#c784de'},
                                                        2: { color: '#f1ca3a'},
                                                        3: { color: '#2980b9'},
                                                        4: { color: '#e67e22'}
                                                    }
                                                };
                                                
                                                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                                                chart.draw(data, options);

                                                view = new google.visualization.DataView(data);
                                                if(CO){
                                                    view.hideColumns([1]); 
                                                }
                                                if(SO2){
                                                    view.hideColumns([2]); 
                                                }
                                                if(O3){
                                                    view.hideColumns([3]); 
                                                }
                                                if(PM25){
                                                    view.hideColumns([4]); 
                                                }
                                                if(NO2){
                                                    view.hideColumns([5]); 
                                                }

                                                chart.draw(view, options);
                                            }

                                            var timer = setInterval(drawChart, 1000);

                                            \$(function(){ 
                                                \$(\"#button_CO\").click(function(){ 
                                                    if(CO == 0){
                                                        \$(\"#button_CO\").css('background-color', 'orange');
                                                        CO = 1;
                                                    }
                                                    else{
                                                        \$(\"#button_CO\").css('background-color', '#27AE60');
                                                        CO = 0;
                                                    }
                                                    drawChart();
                                                }) 
                                            })
                                            \$(function(){ 
                                                \$(\"#button_O3\").click(function(){ 
                                                    if(O3 == 0){
                                                        O3 = 1;
                                                        \$(\"#button_O3\").css('background-color', 'orange');
                                                    }
                                                    else{
                                                        O3 = 0;
                                                        \$(\"#button_O3\").css('background-color', '#27AE60');
                                                    }
                                                    refresh();
                                                }) 
                                            })
                                            \$(function(){ 
                                                \$(\"#button_SO2\").click(function(){ 
                                                    if(SO2 == 0){
                                                        SO2 = 1;
                                                        \$(\"#button_SO2\").css('background-color', 'orange');
                                                    }
                                                    else{
                                                        SO2 = 0;
                                                        \$(\"#button_SO2\").css('background-color', '#27AE60');
                                                    }
                                                    drawChart();
                                                }) 
                                            })
                                            \$(function(){ 
                                                \$(\"#button_NO2\").click(function(){ 
                                                    if(NO2 == 0){
                                                        NO2 = 1;
                                                        \$(\"#button_NO2\").css('background-color', 'orange');
                                                    }
                                                    else{
                                                        NO2 = 0;
                                                        \$(\"#button_NO2\").css('background-color', '#27AE60');
                                                    }
                                                    drawChart();
                                                }) 
                                            })
                                            \$(function(){ 
                                                \$(\"#button_PM25\").click(function(){ 
                                                    if(PM25 == 0){
                                                        PM25 = 1;
                                                        \$(\"#button_PM25\").css('background-color', 'orange');
                                                    }
                                                    else{
                                                        PM25 = 0;
                                                        \$(\"#button_PM25\").css('background-color', '#27AE60');
                                                    }
                                                    drawChart();
                                                }) 
                                            })
                                            \$(function(){ 
                                                \$(\"#button_realtime\").click(function(){ 
                                                    view_type = 0;
                                                    timer = setInterval(drawChart, 1000);
                                                    \$(\"#button_realtime\").css('background-color', '#27AE60');
                                                    \$(\"#button_realtime\").css('color', 'white');
                                                    \$(\"#button_historical\").css('background-color', 'white');
                                                    \$(\"#button_historical\").css('color', 'black');
                                                    \$(\"#date_submit\").css('visibility', 'hidden');
                                                    
                                                    drawChart();
                                                }) 
                                            })
                                            \$(function(){ 
                                                \$(\"#button_historical\").click(function(){ 
                                                    view_type = 1;
                                                    clearInterval(timer);   
                                                    \$(\"#button_historical\").css('background-color', '#27AE60');
                                                    \$(\"#button_historical\").css('color', 'white');
                                                    \$(\"#button_realtime\").css('background-color', 'white');
                                                    \$(\"#button_realtime\").css('color', 'black');
                                                    \$(\"#date_submit\").css('visibility', 'visible');

                                                    drawChart();
                                                }) 
                                            })
                                        </script>
                                    </div>
                                    
                                    <div id = \"air_submit\">
                                        <button type = \"button\" class = \"air_button\" id = \"button_CO\">CO</button>
                                        <button type = \"button\" class = \"air_button\" id = \"button_O3\">O3</button>
                                        <button type = \"button\" class = \"air_button\" id = \"button_SO2\">SO2</button>
                                        <button type = \"button\" class = \"air_button\" id = \"button_NO2\">NO2</button>
                                        <button type = \"button\" class = \"air_button\" id = \"button_PM25\">PM25</button>
                                    </div><br>

                                    <div class = \"date_submit_box\" id = \"date_submit\">
                                        <input type=\"date\" class = \"userdate\" id=\"userdate1\" name=\"userdate1\">
                                        <input type=\"time\" class = \"userdate m-r-30\" id=\"usertime1\" name=\"usertime1\">
                                        <input type=\"date\" class = \"userdate m-r-30\" id=\"userdate2\" name=\"userdate2\">
                                        <input type=\"time\" class = \"userdate\" id=\"usertime2\" name=\"usertime2\">
                                        <button type = \"button\" class = \"button_date_submit\" id = \"button_date_submit\">Submit</button>
                                    </div>
                                    
                                    <script>
                                        var today = new Date();
                                        var month = new Date(today - 2592000000);
                                        
                                        document.getElementById('userdate1').value = month.toISOString().substring(0, 10);
                                        document.getElementById('userdate2').value = today.toISOString().substring(0, 10);
                                        document.getElementById('usertime1').value = \"00:00\";
                                        document.getElementById('usertime2').value = \"00:00\";

                                        var start_date = \$('#userdate1').val() + \" \" + \$('#usertime1').val();
                                        var end_date = \$('#userdate2').val() + \" \" + \$('#usertime2').val();

                                        \$(function(){ 
                                                \$(\"#button_date_submit\").click(function(){ 
                                                    start_date = \$('#userdate1').val() + \" \" + \$('#usertime1').val();
                                                    end_date = \$('#userdate2').val() + \" \" + \$('#usertime2').val();

                                                    var startDate = \$( \"input[name='userdate1']\" ).val(); //2017-12-10
                                                    var startDateArr = startDate.split('-');
                                                    
                                                    var endDate = \$( \"input[name='userdate2']\" ).val(); //2017-12-09
                                                    var endDateArr = endDate.split('-');
                                                            
                                                    var startDateCompare = new Date(startDateArr[0], parseInt(startDateArr[1])-1, startDateArr[2]);
                                                    var endDateCompare = new Date(endDateArr[0], parseInt(endDateArr[1])-1, endDateArr[2]);
                                                    
                                                    if(startDateCompare.getTime() > endDateCompare.getTime()) {
                                                        
                                                        alert(\"Check start_date and end_date\");
                                                        
                                                        return;
                                                    }
                                                
                                                    drawChart();
                                                }) 
                                            })
                                    </script>
                                    <!-- END MAP DATA-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map -->
        <script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA4E2DLjl0PUtVHjQruVcL0GJgmamn4UgY&callback=initMap\">
        </script>
        <!-- Jquery JS-->
        <script src=\"vendor/jquery-3.2.1.min.js\"></script>
        <!-- Bootstrap JS-->
        <script src=\"vendor/bootstrap-4.1/popper.min.js\"></script>
        <script src=\"vendor/bootstrap-4.1/bootstrap.min.js\"></script>
        <!-- Vendor JS       -->
        <script src=\"vendor/slick/slick.min.js\">
        </script>
        <script src=\"vendor/wow/wow.min.js\"></script>
        <script src=\"vendor/animsition/animsition.min.js\"></script>
        <script src=\"vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
        </script>
        <script src=\"vendor/counter-up/jquery.waypoints.min.js\"></script>
        <script src=\"vendor/counter-up/jquery.counterup.min.js\">
        </script>
        <script src=\"vendor/circle-progress/circle-progress.min.js\"></script>
        <script src=\"vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
        <script src=\"vendor/chartjs/Chart.bundle.min.js\"></script>
        <script src=\"vendor/select2/select2.min.js\">
        </script>
        <script src=\"vendor/vector-map/jquery.vmap.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.min.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.sampledata.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.world.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.brazil.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.europe.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.france.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.germany.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.russia.js\"></script>
        <script src=\"vendor/vector-map/jquery.vmap.usa.js\"></script>

        <!-- Main JS-->
        <script src=\"js/main.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "air_chart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 237,  212 => 174,  187 => 152,  181 => 149,  177 => 148,  127 => 101,  122 => 99,  108 => 88,  19 => 1,);
    }
}
/* <html lang="en">*/
/*     <head>*/
/*         <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>*/
/*         <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>*/
/*         <!-- Required meta tags-->*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*         <meta name="description" content="au theme template">*/
/*         <meta name="author" content="Hau Nguyen">*/
/*         <meta name="keywords" content="au theme template">*/
/*     */
/*         <!-- Title Page-->*/
/*         <title>Suite Car</title>*/
/* */
/*         <!-- Fontfaces CSS-->*/
/*         <link href="css/font-face.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">*/
/* */
/*         <!-- Bootstrap CSS-->*/
/*         <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">*/
/* */
/*         <!-- Vendor CSS-->*/
/*         <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/wow/animate.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/slick/slick.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">*/
/*         <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">*/
/* */
/*         <!-- Main CSS-->*/
/*         <link href="css/theme.css" rel="stylesheet" media="all">*/
/* */
/*     </head>*/
/* */
/*     <body class="animsition">*/
/*         <div class="page-wrapper">*/
/*             <!-- HEADER MOBILE-->*/
/*             <header class="header-mobile d-block d-lg-none">*/
/*                 <div class="header-mobile__bar">*/
/*                     <div class="container-fluid">*/
/*                         <div class="header-mobile-inner">*/
/*                             <a class="logo" href="index.html">*/
/*                                 <img src="images/icon/logo.png" alt="CoolAdmin" />*/
/*                             </a>*/
/*                             <button class="hamburger hamburger--slider" type="button">*/
/*                                 <span class="hamburger-box">*/
/*                                     <span class="hamburger-inner"></span>*/
/*                                 </span>*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             <!-- END HEADER MOBILE-->*/
/* */
/*             <!-- MENU SIDEBAR-->*/
/*             <!-- END MENU SIDEBAR-->*/
/* */
/*             <!-- PAGE CONTAINER-->*/
/*             <div class="page-container">*/
/*                 <!-- HEADER DESKTOP-->*/
/*                 <header id="header-desktop">*/
/*                     <div class="section__content section__content--p30">*/
/*                         <div class="container-fluid">*/
/*                             <div class="logo">*/
/*                                 <a href="home">*/
/*                                     <img src="images/icon/logo.png" alt="Suite Car" />*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="header-wrap">*/
/*                                 <div class="header-button">         */
/*                                     <a href="team" class="nav">Team</a>*/
/*                                     <a href="maps" class="nav">Map</a>*/
/*                                     <a href="air_chart" class="nav">Air Chart</a>*/
/*                                     <a href="heart_chart" class="nav">Heart Chart</a>*/
/*                                     <a href="list_view" class="nav">List View</a>*/
/*                                     <div class="account-wrap">*/
/*                                         <div class="account-item clearfix js-item-menu">*/
/*                                             <div class="image">*/
/*                                                 <img src="images/icon/avatar-03.jpg" alt="J3SUNG" />*/
/*                                             </div>*/
/*                                             <div class="content">*/
/*                                                 <a class="js-acc-btn" href="#">{{username}}</a>*/
/*                                             </div>*/
/*                                             <div class="account-dropdown js-dropdown">*/
/*                                                 <div class="info clearfix">*/
/*                                                     <div class="image">*/
/*                                                         <a href="#">*/
/*                                                             <img src="images/icon/avatar-03.jpg" alt="J3SUNG" />*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                     <div class="content">*/
/*                                                         <h5 class="name">*/
/*                                                             <a href="#">{{username}}</a>*/
/*                                                         </h5> */
/*                                                         <span class="email">{{email}}</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="account-dropdown__body">*/
/*                                                     <div class="account-dropdown__item">*/
/*                                                         <a href="change_password_page">*/
/*                                                             <i class="zmdi zmdi-account"></i>Password Change</a>*/
/*                                                     </div>*/
/*                                                     <div class="account-dropdown__item">*/
/*                                                         <a href="id_cancelation_page">*/
/*                                                             <i class="zmdi zmdi-settings"></i>ID Cancellation</a>*/
/*                                                     </div>*/
/*                                                     <div class="account-dropdown__item">*/
/*                                                         <a href="signout">*/
/*                                                             <i class="zmdi zmdi-power"></i>Sign Out</a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </header>*/
/*                 <!-- END HEADER DESKTOP-->*/
/* */
/*                 <div class="main-content" id="back_maps">*/
/*                     <div class="section__content section__content--p30">*/
/*                         <div class="container-fluid">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 m-t-20">*/
/*                                     <div class="sensor_title">*/
/*                                         <h3>Air Sensor Data</h3>*/
/*                                     </div><br>*/
/*                                     <div class="sensor_no"> sensor_no : &nbsp </div>*/
/*                                     <form name="combobox" class="combobox">*/
/*                                         <select id="combo" name="combo">*/
/*                                         </select>*/
/*                                     </form>*/
/*                                     <div class="sensor_button_box">*/
/*                                         <button class="sensor_button" id="button_realtime"> realtime </button>*/
/*                                         <button class="sensor_button" id="button_historical"> historical </button>*/
/*                                     </div><br>*/
/*                                     <!-- MAP DATA-->*/
/*                                     <div id="chart_div">*/
/*                                         <script type="text/javascript">*/
/*                                             var user_no = {{user_no}};*/
/*                                             var sensor_no = {{sensor_no}};*/
/*                                             $now = new Date();*/
/*                                             */
/*                                             if({{flag}} == 0){*/
/*                                                 $(function(){ */
/*                                                     $.ajax({*/
/*                                                     url: "/charts/receive_combobox",*/
/*                                                         dataType:"text",*/
/*                                                         async: false,*/
/*                                                         type : "GET",*/
/*                                                         data : {*/
/*                                                             "user_no" : user_no,*/
/*                                                             "type" : 0*/
/*                                                         },*/
/*                                                         success : function(data) {*/
/*                                                             $data = JSON.parse(data);*/
/*                                                             addOption($data);*/
/*                                                         },*/
/*                                                         error : function(data) {*/
/*                                                             alert("There is something wrong@.");*/
/*                                                         }*/
/*                                                     });*/
/*                                                 })*/
/*                                             }*/
/*                                             else{*/
/*                                                 var data_info = {{sensor_no}};*/
/* */
/*                                                 var frm = document.combobox;*/
/*                                                 var op = new Option();*/
/*                                                 op.value = data_info; // 값 설정*/
/*                                                 op.text = "Sensor_no : " + data_info; // 텍스트 설정*/
/*                                         */
/*                                                 op.selected = true; // 선택된 상태 설정 (기본값은 false이며 선택된 상태로 만들 경우에만 사용)*/
/*                                         */
/*                                                 frm.combo.options.add(op); // 옵션 추가*/
/*                                             }*/
/*                                             function addOption(data){*/
/*                                                 for(var index in data) {*/
/*                                                     var data_info = data[index].sensor_no;*/
/* */
/*                                                     var frm = document.combobox;*/
/*                                                     var op = new Option();*/
/*                                                     op.value = data_info; // 값 설정*/
/*                                                     op.text = "Sensor_no : " + data_info; // 텍스트 설정*/
/*                                             */
/*                                                     op.selected = true; // 선택된 상태 설정 (기본값은 false이며 선택된 상태로 만들 경우에만 사용)*/
/*                                             */
/*                                                     frm.combo.options.add(op); // 옵션 추가*/
/*                                                 }*/
/*                                                 sensor_no = $("#combo option:selected").val();*/
/*                                             } */
/*                                             */
/*                                             google.load("visualization", "1", {packages:["corechart"]});*/
/*                                             google.setOnLoadCallback(drawChart);*/
/*                                             var CO = 0;*/
/*                                             var O3 = 0;*/
/*                                             var SO2 = 0;*/
/*                                             var NO2 = 0;*/
/*                                             var PM25 = 0;*/
/*                                             var view_type = 0;*/
/*                                             */
/*                                             {# function refresh() {*/
/*                                                 sensor_no = $("#combo option:selected").val();*/
/*                                                 $.ajax({*/
/*                                                 url: "/charts/chart2_json",*/
/*                                                     dataType:"text",*/
/*                                                     async: false,*/
/*                                                     type : "GET",*/
/*                                                     data : {*/
/*                                                         "CO" : CO,*/
/*                                                         "O3" : O3,*/
/*                                                         "SO2" : SO2,*/
/*                                                         "NO2" : NO2,*/
/*                                                         "PM25" : PM25,*/
/*                                                         "sensor_no" : sensor_no,*/
/*                                                         "view_type" : view_type,*/
/*                                                         "start_date" : start_date,*/
/*                                                         "end_date" : end_date,*/
/*                                                         "type" : 0*/
/*                                                     },*/
/*                                                     success : function(data) {*/
/*                                                         drawChart();*/
/*                                                     },*/
/*                                                     error : function(data) {*/
/*                                                         alert("There is something wrong!.");*/
/*                                                     }*/
/*                                                 });*/
/*                                             } #}*/
/* */
/*                                             function drawChart() {*/
/*                                                 sensor_no = $("#combo option:selected").val();*/
/*                                                 */
/*                                                 var jsonData = $.ajax({*/
/*                                                     url: "/charts/chart2_json",*/
/*                                                     dataType:"text",*/
/*                                                     async: false,*/
/*                                                     type : "GET",*/
/*                                                     data : {*/
/*                                                         "user_no" : user_no,*/
/*                                                         "sensor_no" : sensor_no,*/
/*                                                         "view_type" : view_type,*/
/*                                                         "start_date" : start_date,*/
/*                                                         "end_date" : end_date,*/
/*                                                         "type" : 0*/
/*                                                     }*/
/*                                                 }).responseText;*/
/*                                                 //alert(jsonData);*/
/*                                                 // Create our data table out of JSON data loaded from server.*/
/*                                                 var data = new google.visualization.DataTable(jsonData);*/
/*                                                 var options = {*/
/*                                                     title: 'Air Data Chart',*/
/*                                                     curveType: 'function',*/
/*                                                     series: {*/
/*                                                         0: { color: '#ff111d'},*/
/*                                                         1: { color: '#c784de'},*/
/*                                                         2: { color: '#f1ca3a'},*/
/*                                                         3: { color: '#2980b9'},*/
/*                                                         4: { color: '#e67e22'}*/
/*                                                     }*/
/*                                                 };*/
/*                                                 */
/*                                                 var chart = new google.visualization.LineChart(document.getElementById('chart_div'));*/
/* */
/*                                                 chart.draw(data, options);*/
/* */
/*                                                 view = new google.visualization.DataView(data);*/
/*                                                 if(CO){*/
/*                                                     view.hideColumns([1]); */
/*                                                 }*/
/*                                                 if(SO2){*/
/*                                                     view.hideColumns([2]); */
/*                                                 }*/
/*                                                 if(O3){*/
/*                                                     view.hideColumns([3]); */
/*                                                 }*/
/*                                                 if(PM25){*/
/*                                                     view.hideColumns([4]); */
/*                                                 }*/
/*                                                 if(NO2){*/
/*                                                     view.hideColumns([5]); */
/*                                                 }*/
/* */
/*                                                 chart.draw(view, options);*/
/*                                             }*/
/* */
/*                                             var timer = setInterval(drawChart, 1000);*/
/* */
/*                                             $(function(){ */
/*                                                 $("#button_CO").click(function(){ */
/*                                                     if(CO == 0){*/
/*                                                         $("#button_CO").css('background-color', 'orange');*/
/*                                                         CO = 1;*/
/*                                                     }*/
/*                                                     else{*/
/*                                                         $("#button_CO").css('background-color', '#27AE60');*/
/*                                                         CO = 0;*/
/*                                                     }*/
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                             $(function(){ */
/*                                                 $("#button_O3").click(function(){ */
/*                                                     if(O3 == 0){*/
/*                                                         O3 = 1;*/
/*                                                         $("#button_O3").css('background-color', 'orange');*/
/*                                                     }*/
/*                                                     else{*/
/*                                                         O3 = 0;*/
/*                                                         $("#button_O3").css('background-color', '#27AE60');*/
/*                                                     }*/
/*                                                     refresh();*/
/*                                                 }) */
/*                                             })*/
/*                                             $(function(){ */
/*                                                 $("#button_SO2").click(function(){ */
/*                                                     if(SO2 == 0){*/
/*                                                         SO2 = 1;*/
/*                                                         $("#button_SO2").css('background-color', 'orange');*/
/*                                                     }*/
/*                                                     else{*/
/*                                                         SO2 = 0;*/
/*                                                         $("#button_SO2").css('background-color', '#27AE60');*/
/*                                                     }*/
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                             $(function(){ */
/*                                                 $("#button_NO2").click(function(){ */
/*                                                     if(NO2 == 0){*/
/*                                                         NO2 = 1;*/
/*                                                         $("#button_NO2").css('background-color', 'orange');*/
/*                                                     }*/
/*                                                     else{*/
/*                                                         NO2 = 0;*/
/*                                                         $("#button_NO2").css('background-color', '#27AE60');*/
/*                                                     }*/
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                             $(function(){ */
/*                                                 $("#button_PM25").click(function(){ */
/*                                                     if(PM25 == 0){*/
/*                                                         PM25 = 1;*/
/*                                                         $("#button_PM25").css('background-color', 'orange');*/
/*                                                     }*/
/*                                                     else{*/
/*                                                         PM25 = 0;*/
/*                                                         $("#button_PM25").css('background-color', '#27AE60');*/
/*                                                     }*/
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                             $(function(){ */
/*                                                 $("#button_realtime").click(function(){ */
/*                                                     view_type = 0;*/
/*                                                     timer = setInterval(drawChart, 1000);*/
/*                                                     $("#button_realtime").css('background-color', '#27AE60');*/
/*                                                     $("#button_realtime").css('color', 'white');*/
/*                                                     $("#button_historical").css('background-color', 'white');*/
/*                                                     $("#button_historical").css('color', 'black');*/
/*                                                     $("#date_submit").css('visibility', 'hidden');*/
/*                                                     */
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                             $(function(){ */
/*                                                 $("#button_historical").click(function(){ */
/*                                                     view_type = 1;*/
/*                                                     clearInterval(timer);   */
/*                                                     $("#button_historical").css('background-color', '#27AE60');*/
/*                                                     $("#button_historical").css('color', 'white');*/
/*                                                     $("#button_realtime").css('background-color', 'white');*/
/*                                                     $("#button_realtime").css('color', 'black');*/
/*                                                     $("#date_submit").css('visibility', 'visible');*/
/* */
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                         </script>*/
/*                                     </div>*/
/*                                     */
/*                                     <div id = "air_submit">*/
/*                                         <button type = "button" class = "air_button" id = "button_CO">CO</button>*/
/*                                         <button type = "button" class = "air_button" id = "button_O3">O3</button>*/
/*                                         <button type = "button" class = "air_button" id = "button_SO2">SO2</button>*/
/*                                         <button type = "button" class = "air_button" id = "button_NO2">NO2</button>*/
/*                                         <button type = "button" class = "air_button" id = "button_PM25">PM25</button>*/
/*                                     </div><br>*/
/* */
/*                                     <div class = "date_submit_box" id = "date_submit">*/
/*                                         <input type="date" class = "userdate" id="userdate1" name="userdate1">*/
/*                                         <input type="time" class = "userdate m-r-30" id="usertime1" name="usertime1">*/
/*                                         <input type="date" class = "userdate m-r-30" id="userdate2" name="userdate2">*/
/*                                         <input type="time" class = "userdate" id="usertime2" name="usertime2">*/
/*                                         <button type = "button" class = "button_date_submit" id = "button_date_submit">Submit</button>*/
/*                                     </div>*/
/*                                     */
/*                                     <script>*/
/*                                         var today = new Date();*/
/*                                         var month = new Date(today - 2592000000);*/
/*                                         */
/*                                         document.getElementById('userdate1').value = month.toISOString().substring(0, 10);*/
/*                                         document.getElementById('userdate2').value = today.toISOString().substring(0, 10);*/
/*                                         document.getElementById('usertime1').value = "00:00";*/
/*                                         document.getElementById('usertime2').value = "00:00";*/
/* */
/*                                         var start_date = $('#userdate1').val() + " " + $('#usertime1').val();*/
/*                                         var end_date = $('#userdate2').val() + " " + $('#usertime2').val();*/
/* */
/*                                         $(function(){ */
/*                                                 $("#button_date_submit").click(function(){ */
/*                                                     start_date = $('#userdate1').val() + " " + $('#usertime1').val();*/
/*                                                     end_date = $('#userdate2').val() + " " + $('#usertime2').val();*/
/* */
/*                                                     var startDate = $( "input[name='userdate1']" ).val(); //2017-12-10*/
/*                                                     var startDateArr = startDate.split('-');*/
/*                                                     */
/*                                                     var endDate = $( "input[name='userdate2']" ).val(); //2017-12-09*/
/*                                                     var endDateArr = endDate.split('-');*/
/*                                                             */
/*                                                     var startDateCompare = new Date(startDateArr[0], parseInt(startDateArr[1])-1, startDateArr[2]);*/
/*                                                     var endDateCompare = new Date(endDateArr[0], parseInt(endDateArr[1])-1, endDateArr[2]);*/
/*                                                     */
/*                                                     if(startDateCompare.getTime() > endDateCompare.getTime()) {*/
/*                                                         */
/*                                                         alert("Check start_date and end_date");*/
/*                                                         */
/*                                                         return;*/
/*                                                     }*/
/*                                                 */
/*                                                     drawChart();*/
/*                                                 }) */
/*                                             })*/
/*                                     </script>*/
/*                                     <!-- END MAP DATA-->*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Map -->*/
/*         <script async defer*/
/*         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4E2DLjl0PUtVHjQruVcL0GJgmamn4UgY&callback=initMap">*/
/*         </script>*/
/*         <!-- Jquery JS-->*/
/*         <script src="vendor/jquery-3.2.1.min.js"></script>*/
/*         <!-- Bootstrap JS-->*/
/*         <script src="vendor/bootstrap-4.1/popper.min.js"></script>*/
/*         <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>*/
/*         <!-- Vendor JS       -->*/
/*         <script src="vendor/slick/slick.min.js">*/
/*         </script>*/
/*         <script src="vendor/wow/wow.min.js"></script>*/
/*         <script src="vendor/animsition/animsition.min.js"></script>*/
/*         <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">*/
/*         </script>*/
/*         <script src="vendor/counter-up/jquery.waypoints.min.js"></script>*/
/*         <script src="vendor/counter-up/jquery.counterup.min.js">*/
/*         </script>*/
/*         <script src="vendor/circle-progress/circle-progress.min.js"></script>*/
/*         <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>*/
/*         <script src="vendor/chartjs/Chart.bundle.min.js"></script>*/
/*         <script src="vendor/select2/select2.min.js">*/
/*         </script>*/
/*         <script src="vendor/vector-map/jquery.vmap.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.min.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.world.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.europe.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.france.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.germany.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.russia.js"></script>*/
/*         <script src="vendor/vector-map/jquery.vmap.usa.js"></script>*/
/* */
/*         <!-- Main JS-->*/
/*         <script src="js/main.js"></script>*/
/*     </body>*/
/* </html>*/
