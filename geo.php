

<?php

$map_url='';
$maps_json='';
$maps_array='';
if(!empty($_GET['location']))
{
$map_url='https://coronavirus-19-api.herokuapp.com/countries/'.urlencode($_GET['location']);

$maps_json=file_get_contents($map_url);
$maps_array= json_decode($maps_json,true);
}
?>




<html>
    <head>
        <title>COVID-19</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">


       <style> 
            html
            {
                
                background: url(Corona2.jpg) no-repeat; 
                background-color:creamwhite;
                background-size: 100% 45%;
                
                backdrop-filter: blur(100px);
                
            }

            .mySlides {display: none;}
            img {vertical-align: middle;}

           
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin-left:10px;
            }

          

           

            .active {
            background-color: #717171;
            }

          
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            
            @media only screen and (max-width: 300px) {
            
            }

            
            input[type=text]
            {
                width: 38%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-size: 16px;
                background-color:white;
                background-image: url(imagesYNMG573L.png);
                background-size: 25px;
                background-position: 5px 8px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
            }

            .button 
            {
                background-color: #f4511e;
                border: none;
                color: white;
                padding: 16px 15px;
                text-align: center;
                font-size: 16px;
                margin: 4px 2px;
                opacity: 0.8;
                transition: 0.3s;
                display: inline-block;
                text-decoration: none;
                cursor: pointer;
                border-radius:10px;
            }
            .button:hover {opacity: 1;background-color:green;}
            .button1{border-radius: 12px;}

            .column1
            {
                float: left;
                width: 40%;
                height:160%;
                background-color:transparent;
                padding:4px;
            }

            .column2
            {
                float: left;
                background:url(coronahope.png);
                background-size:100% 260%;
                width: 50%;
                height:30%;
            }
            .column22
            {
                float: left;
                
                width: 50%;
                height:30%;
            }
            .column23
            {
                float: left;
                background:lightgrey;
                width: 50%;
                height:30%;
            }
            .column24
            {
                float: left;
                background:lightgrey;
                width: 50%;
                height:30%;
            }


            .card
            {
                background-color: red;
                opacity: 0.7;
                width: 90%;
                height:auto;
                margin-left:35px;
                margin-top:5px;
                border-radius:5px;
                
               
                
            }

            .column3
            {
                float: left;
                background:lightgrey;


                width: 17%;
                
                padding:5px;
                margin-left: 0;
            }

            .column4
            {
                width: 40%;
                height: 20%;
            }

            .footer 
            {
                padding:14px;
            }

            textarea 
            {
                width: 95%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
                margin-left:20px;
            }


            
            .cd
            {
                background-color: lightblue;
                opacity: 0.7;
                width: 90%;
                height:100%;
               
                
            }
            .section
            {
               
                margin-bottom:9%;


            }
            .scrollable
            {
                margin-top:10px;
                height:80%; /* or any value */
             overflow-y: auto;
            }

        </style>

    </head>

    <body>
        <div class="html">
        </div>

    <div class="container">
        <header>
            <pre style="font-size:larger;color: white;left :200px;font-weight: bold ;font-family: Verdana, Geneva, Tahoma, sans-serif;"> COVID-19.app </pre>
        </header>


        <article>
            <p style="font-size:35px;color:white;font-family: Verdana, Geneva, Tahoma, sans-serif;text-shadow: 2px 2px 4px black;"><b style = "font-size:50px;color: darkred;">CORONA</b> a chance for you to stay at home<br> and be a <b style = "color:green;">HERO</b></p>
        </article>
        <div class="container">
            <section >
                
            <p style="font-size:35px;margin-bottom:5px;color:white;font-family: Verdana, Geneva, Tahoma, sans-serif;text-shadow: 2px 2px 4px black;"> Stay <b style = "font-size:50px;color: blue;">HOME</b><br> Stay <b style = "color:green;">SAFE</b><br><br><br><b style="font-size:20px;">Get the info about the country infected by Covid-19</b></p>


            </section>
        </div1>
            
        <div class="column1">
            
            <input style="opacity:1;width:80%;margin:10px;margin-top:16px" placeholder="Enter the country for data..."type="text" name="location"/>
            <button style="opacity:0.8;padding: 16px 14px;margin:-2px 2px;" type="button" class ="button" onclick="window.alert('PAGE under contrusction')">Search</button>
            <div class="card" style="width:80%;height:19%;background:url(earthmask.png);background-size:100% 100%;margin-left:10px;margin-top:12px;">     
            </div>
                
                
                
                <div class="container">
                <div class="slideshow-container">

                <div class="mySlides fade">
               
                <img src="safe1.jpg" style="width:80%;height:40%;margin-top:80px;">
                </div>

                <div class="mySlides fade">
               
                <img src="safe2.jpg" style="width:80%;height:40%;margin-top:80px;">
                </div>

                <div class="mySlides fade">
                
                <img src="safe3.bmp" style="width:80%;height:40%;margin-top:80px;">
                </div>

                <div class="mySlides fade">
               
                <img src="safe4.jpg" style="width:80%;height:40%;margin-top:80px;">
                </div>


                </div>
                <br>
                

               

                <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                
                slides[slideIndex-1].style.display = "block";  
                
                setTimeout(showSlides, 2000); // Change image every 2 seconds
               
                }
                </script>
                </div>
            
                <img src="pandemicBEST.gif" style="width:80%;height:30%;margin-top:40px;">
                <p style="margin-left:35px;font-size:25px">Spread of the virus in the past few months</p>

        </div>

        <div class="footer">

                <form action="" >
                    
                    <input placeholder="Enter the country for data..."type="text" name="location"/>
                    
                    <input class ="button"type="submit" name="button1"
                        value="Full Info"/> 
                    <input class ="button"type="submit" name="button2"
                        value="Refresh"/> 
                    
                    

                </form>
                

                <div class="column2"  style="border-radius:6px;">

                    
                  
                    <div class="scrollable">
                        <div class="card" style="opacity:0.94;">

                                <?php 

                                    if(isset($_GET['button2'])) 
                                    {                     
                                    
                                    }
                            
                                    if(isset($_GET['button1'])) 
                                    {
                                        if(!empty($_GET['location']))
                                        {
                                        
                                        echo "<br>"."<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"." Country :  ".$maps_array['country']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."cases : ".$maps_array['cases']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Todaycases : ".$maps_array['todayCases']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Deaths : ".$maps_array['deaths']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Todaydeaths : ".$maps_array['todayDeaths']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Recovered : ".$maps_array['recovered']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Active : ".$maps_array['active']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Critical : ".$maps_array['critical']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Cases perMillion : ".$maps_array['casesPerOneMillion']."</span>";
                                        echo "<br><br>";

                                        echo "<span style=color:white;font-weight:bolder;font-size:20px;margin:10px>"."Deaths perMillion : ".$maps_array['deathsPerOneMillion']."</span>";
                                        echo "<br><br>";
                                        }
                                        else
                                        {
                                            echo '<script>alert("Please enter a country name")</script>';
                                        }
                                    }
                                    
                                ?>
                        </div> 
                    </div>  

                               
                    
                </div>
                
                
                
                <div class="column22" style="margin-top:15px;border-radius:6px;height:auto;background-color:transparent;font-family: Verdana, Geneva, Tahoma, sans-serif;text-shadow: 2px 2px 4px black;">
                    <p style="font-size:40px;color:lightblue;margin:5px;margin-top:160px;">COMPLAINT SECTION</p>
                </div>
                
                <div class="column23" style="margin-top:15px;border-radius:6px;height:auto;">
                    
                    <form action="">
                    <label style="font-size:17px;margin-left:10px;margin-top:5px;"for="fname">First name:</label>
                    <input style="font-size:17px;width:35%;margin-top:5px;"type="text" id="fname" name="fname">

                    <label style="font-size:17px;margin-top:5px;"for="lname">Last name:</label>
                    <input style="font-size:17px;width:35%;margin-top:5px;"type="text" id="lname" name="lname"><br><br>

                    <label style="font-size:17px;margin-left:10px;"for="fname">D.O.B :</label>
                    <input style="font-size:17px;width:35%;margin-left:24px;"type="text" id="dob" name="dob" placeholder="DD/MM/YYYY"><br><br>

                    <label style="font-size:17px;margin-left:10px;"for="fname">e-mail :</label>
                    <input style="font-size:17px;width:81%;margin-left:26px;"type="text" id="email" name="email"><br><br>

                    <label style="font-size:17px;margin-left:10px;"for="fname">country :</label>
                    <input style="font-size:17px;width:35%;margin-left:18px;"type="text" id="coun" name="coun"><br><br>

                    <label style="font-size:17px;margin-left:10px;"for="fname">Your Complaint :</label><br>
                    <textarea type="text" id="com" name="com"></textarea><br><br>

                    <input class ="button"type="submit" name="button3" value="Submit" style="margin:10px"/> 
                    </form>


                    <?php
                        $i = 0;
                       
                       
                        if(isset($_GET['button3'])) 
                        {
                                                    
                            if(!empty($_GET['fname']))
                            {
                                $i+=1;
                            }
                            
                            if(!empty($_GET['lname']))
                            {
                                $i+=1;
                            }    
                                        
                            if(!empty($_GET['dob']))
                            {
                                $i+=1;
                            }         
                                        
                            if(!empty($_GET['email']))
                            {
                                $i+=1;
                            }             
                                            
                            if(!empty($_GET['coun']))
                            {
                                $i+=1;
                            }                 
                                                
                            if(!empty($_GET['com']))
                            {
                                $i+=1;
                            }  
                            
                        
                                                    
                                
                                


                            if($i==0)
                            {
                                echo "<script>alert('NO response has been submitted')</script>";
                            }
                            if($i>0 && $i<6)
                            {
                                echo "<script>alert('Enter the unfilled details')</script>";
    
                            }

                            if($i==6)
                            {
                                 echo "<script>alert('Your response has been submitted')</script>";
    
                            }
                        }
                            
                       
                    ?>
                
                </div>
                
                
        </div>
                
    </div>
    <div class="column24" style="width:100%;height:12%;margin:10px;margin-left:0px;border-radius:6px;">
    <pre style="font-size:35px;color: clack;font-weight: bold ;font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left:200px;margin:20px;"> COVID-19.app      By: Milan Mandal</pre>

    </div>
    </body>

</html>


