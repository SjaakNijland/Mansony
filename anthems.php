<body>
    <div id="background">
        <br>
        <br>
        <div class="player_space">

        </div>

        <!-- start player object -->
        <div id="Qapital"  class="player">
            <img src="img/anthems/qapital.jpg" class="album">
            <div class="player_content">
                <div class="player_content_title">
<!--                        <p><marquee behavior="alternate" direction="left" scrollamount="2">QAPITAL 2017 | Official Q-dance Anthem | Public Enemies - Start The Rage</marquee></p>-->
                    <p>QAPITAL 2017 | Official Q-dance Anthem | Public Enemies - Start The Rage</p>
                </div>
                <div class="player_buttons">
                    <img src="img/web/play.png" onclick="playMusic('Qapital')" class="play-pause">
                    <img src="img/web/stop.png" onclick="stop()" class="stop">
                    <progress  id="player_progrees1" class="player_progrees" value="0" max="1"></progress>
                    <span id="tracktime" class="tracktime">0:00 / 3:57</span>
                    <audio id="qapital_audio" src="./mp3/qapital.mp3" preload="auto" ontimeupdate="updateTime(this);">
                </div>
            </div>
        </div>
            <!-- end player object -->

        <div class="player_space">

        </div>

        <!-- start player object -->
        <div id="Defqon" class="player">
            <img src="img/anthems/defqon.jpg" class="album">
            <div class="player_content">
                <div class="player_content_title">
                    <p><marquee behavior="alternate" direction="left" scrollamount="2">Defqon.1 Weekend Festival 2017 | Official Q-dance Anthem | Frequencerz - Victory Forever</marquee></p>
                </div>
                <div class="player_buttons">
                    <img src="img/web/play.png" onclick="playMusic('Defqon')" class="play-pause" >
                    <img src="img/web/stop.png" onclick="stop()" class="play-pause" id="play_button2">
                    <progress id="player_progrees1" class="player_progrees" value="0" max="1"></progress>
                    <span id="tracktime2" class="tracktime">0:00 / 3:37</span>
                    <audio id="defqon_audio" src="./mp3/defqon.mp3" preload="auto"
                           ontimeupdate="updateTime2(this);">
                </div>
            </div>
        </div>
        <!-- end player object -->

        <div class="player_space">

        </div>

        <!-- start player object -->
        <div id="Intents" class="player">
            <img src="img/anthems/intents.jpg" class="album">
            <div class="player_content">
                <div class="player_content_title">
                    <p><marquee behavior="alternate" direction="left" scrollamount="0">Coone & Hard Driver - It's All In The Game (Official Intents Festival 2016 Anthem)</marquee></p>
                </div>
                <div class="player_buttons">
                    <img src="img/web/play.png" onclick="playMusic('Intents')" class="play-pause" >
                    <img src="img/web/stop.png" onclick="stop()" class="play-pause" id="play_button3">
                    <progress id="player_progrees1" class="player_progrees" value="0" max="1"></progress>
                    <span id="tracktime3" class="tracktime">0:00 / 4:41</span>
                    <audio id="intents_audio" src="./mp3/intents.mp3" preload="auto"
                           ontimeupdate="updateTime3(this);">
                </div>
            </div>
        </div>
        <!-- end player object -->
    </div>
 <script src="js/tracktime.js"></script>
<script src="js/jquery.js"></script>
<script src="js/background.js"></script>

</body>