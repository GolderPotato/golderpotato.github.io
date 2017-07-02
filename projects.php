<?php
/**
 * Created by PhpStorm.
 * User: Eliaz
 * Date: 02/07/2017
 * Time: 12:09
 */
?>

<html>
    <head>
        <title>GOLDERPOTATO | PROJECTS</title>

        <script>
            function openLink(link) {
                location.href = link;
            }

            function openGitHubProject(project) {
                location.href = "https://www.github.com/GolderPotato/" + project;
            }
        </script>


        <style>
            body {
                background-color: #ff9900;
            }

            #website {
                background-color: #ff6600;
            }

            #website:hover {
                background-color: #ff9200;
            }

            #projects_text {
                font-size: 70px;
                font-family: "Open Sans";
                font-weight : bolder;
                position: absolute;
                top: 10%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%);
            }

            #github {
                text-align: center;
                font-size: 30px;
                font-family: "Open Sans";
            }

            #desc {
                font-size: 20px;
            }


            #footer {
                background-color: black;
                font-color: white;
                position: fixed;
                margin-left: -10px;
                margin-right: -10px;
                bottom: 0px;
                width: 100%;
                height: 50px;
                float: left;
            }

            #footer #footer-content {
                color: #ff9900;
                margin-left: 50px;
                margin-right: 50px;
                margin-top: 12px;
                margin-bottom: 10px;
            }

            [class*="row"] {
                padding-top: 200px;
            }

            * {
                box-sizing: border-box;
                font-family: "Open Sans";
            }

            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}

            [class*="col-"] {
                float: left;
                padding: 15px;
                text-align: center;
                font-size: 35px;
                font-family: "Open Sans";
                background-color:  #ff8000;
            }
            [class*="col-"]:hover {
                float: left;
                padding: 15px;
                text-align: center;
                font-size: 35px;
                font-family: "Open Sans";
                background-color:  #ff9200;
            }
        </style>
    </head>

    <body>
        <div id="projects_text">
            <p id="text">MY PROJECTS</p>
        </div>
        <div class="row">
            <div class="col-4" onclick="openGitHubProject('GolderAC')">
                GolderAC
                <div id="desc">
                    Minecraft Anti-Cheat
                </div>
            </div>

            <div class="col-4" onclick="openGitHubProject('MichelBOT')">
                MichelBOT
                <div id="desc">
                    Basic Minecraft ChatBot
                </div>
            </div>

            <div class="col-4" onclick="openGitHubProject('JPong')">
                Pong
                <div id="desc">
                    Pong recreated in Java
                </div>
            </div>

            <div class="col-4" onclick="openGitHubProject('WaitingQueue')">
                WaitingQueue
                <div id="desc">
                    Minecraft minigame queue plugin
                </div>
            </div>

            <div class="col-4" onclick="openGitHubProject('HubManager')">
                HubManager
                <div id="desc">
                    Minecraft hub manager plugin
                </div>
            </div>

            <div class="col-4" id="website" onclick="openGitHubProject('golderpotato.github.io')">
                This Website
                <div id="desc">
                    Website source code &lt;/&gt;
                </div>
            </div>

        </div>
        <div class="row">
            <div id="github" onclick="openLink('https://www.github.com/GolderPotato')">
                <p>CLICK TO ACCESS GITHUB</p>
            </div>
        </div>

        <div id="footer">
            <div id="footer-content" onclick="openLink('https://www.twitter.com/GolderPotato')">
                Contact me: @GolderPotato (dm)
            </div>
        </div>

    </body>
</html>

