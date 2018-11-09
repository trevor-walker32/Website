<!Doctype html>
    <head>
        <title> Trevor's Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    </head>
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    <body class="w3-light-grey">
        <div class="w3-content" style="max-width:1400px">

            <!-- Header -->
            <header class="w3-container w3-center w3-padding-32"> 
                <h1><b>Diamond Talk</b></h1>
                <p>Welcome to <span class="w3-tag">Trevor Walker's</span> Website</p>
            </header>
            
        
            <!-- navigation container -->
            <div class="w3-bar w3-center w3-blue">
                    <a href="index.php"><button class="w3-button w3-ripple">Home</button></a>
                    <a href="discussions.php"><button class="w3-button w3-ripple">Discussion</button></a>
                    <a href="blog.php"><button class="w3-button w3-ripple">Blog</button></a>
                    <a href="data.php"><button class="w3-button w3-ripple">Data</button></a>
                    <a href="bio.php"><button class="w3-button w3-ripple">About Me</button></a>
            </div>

            <!-- Grid -->
            <div class="w3-row">
                
                <!-- left column -->
                <div class="w3-col l8 s12">

                    <!-- This Week's discussion box -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <p>Discussion</p>
                        <div class="w3-container">
                            <h3><b>This Week's Discussion Topic</b></h3>
                            <h5>Manny goes to Dodgertown, <span class="w3-opacity">Last Updated: July 24, 2018</span></h5>
                        </div>

                        <div class="w3-container">
                                <p>Manny Machado accepted a deal on his free agency, that places him on one of the hottest teams in 
                                    baseball. This deal surely will propel the dodger's into the offseason with an added right 
                                    handed power hitter in the lineup.</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><a href="HomeTopicNumOne.php">
                                        <button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE</b></button></a></p>
                                </div>
                                <div class="w3-col m4 w3-hide-small">
                                    <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- This Week's news box -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <p>News</p>
                        <div class="w3-container">
                            <h3><b>Other News in the Baseball World</b></h3>
                            <h5>Richards down with Tommy John Injury, <span class="w3-opacity">Last Updated: July 24, 2018</span></h5>
                        </div>

                        <div class="w3-container">
                                <p>Here is where we will put news on players moving around getting injured having good games etc</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><a href="HomeTopicNumTwo.php">
                                        <button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE</b></button></a></p>
                                </div>
                                <div class="w3-col m4 w3-hide-small">
                                    <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If there are more posts that you would like to post add them right above this line. 
                        Be careful not to mess with the </div> under this line or else the layout of the page will be
                        annoying to fix. -->

                </div>
                
                
                <!-- right column -->
                <div class="w3-col l4">
                    <!-- About Card -->
                    <div class="w3-card w3-margin w3-margin-top">
                        <div class="w3-container w3-white">
                            <h4><b>Objective</b></h4>
                            <p> The objective of this site is to inspire others to look into the analytical methods 
                                and data science done off of the diamond, for those on it. Also, to make a positive impact on 
                                the baseball world.</p>
                        </div>
                    </div><hr>

                    <!-- Posts -->
                    <div class="w3-card w3-margin">
                        <div class="w3-container w3-padding">
                        <h4>Helpful Sites</h4>
                        </div>
                        <ul class="w3-ul w3-hoverable w3-white">
                            <li class="w3-padding-16">
                                <a href="https://www.baseballprospectus.com"><span class="w3-large">Baseball Prospectus</span></a><br>
                                <span>https://www.baseballprospectus.com</span>
                            </li>
                            <li class="w3-padding-16">
                                <a href="https://www.fangraphs.com"><span class="w3-large">Fangraphs</span></a><br>
                                <span>https://www.fangraphs.com</span>
                            </li> 
                            <li class="w3-padding-16">
                                <a href="http://www.brooksbaseball.net"><span class="w3-large">Brooks Baseball</span></a><br>
                                <span>www.brooksbaseball.net</span>
                            </li>   
                            <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                                <a href="http://www.inside-edge.com"><span class="w3-large">Inside Edge</span></a><br>
                                <span>www.inside-edge.com</span>
                            </li>  
                        </ul>
                    </div>
                    <hr> 

                    <!-- Labels / tags -->
                    <div class="w3-card w3-margin">
                        <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                        </div>
                        <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Baseball</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Injury Prevention</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">America's PT</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">SABRmetrics</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Cool Stuff</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Scholar Athletes</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Stats</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Launch Angle > everything else</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Mathletes</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Computer Science</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Roll-over theory</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">barstool sports</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Big Data</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">CoolMathGames.com</span>
                        </p>
                        </div>
                    </div>

                <!-- END Introduction Menu -->
                </div>

            <!-- END GRID -->
            </div><br>

        <!-- END w3-content -->
        </div>


            <!-- footer -->
            <footer class="w3-text-dark-grey w3-center w3-blue">
                This site is managed and developed by Trevor Walker
            </footer>
                
        </div>
    </body>

</html>