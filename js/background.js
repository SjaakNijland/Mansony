/**
 * Created by Sjaak on 2-11-2017.
 */
    console.log("background module initiated..")
let aantalKeerGeklikt = 1;
let myAudio = document.getElementById("qapital_audio");
let myAudio2 = document.getElementById("defqon_audio");
let myAudio3 = document.getElementById("intents_audio");



//playMusic id
function  playMusic(id){
    let player_base=document.getElementById(id);
    let klik_op_audio=player_base.getElementsByTagName("audio")[0]; // audio tag


    let alle_audio_players=document.getElementsByClassName("player"); // loop alle player-object op de pagina af..
    for(let all=0; all<alle_audio_players.length;all++ ) {
//        console.log("Aantal:  " + aantalKeerGeklikt);
        let audio = alle_audio_players[all].getElementsByTagName("audio")[0];;
        console.log(all+"=>"+audio.id+"=="+klik_op_audio.id);
        if (audio == klik_op_audio) {
            console.log("AAN");
            if(audio.paused)
            {
                audio.play();
                speelt_degene_waarop_ik_klik=true;
            }else
            {
                audio.pause();
            }
        } else {
            console.log(audio+"uit");
            if(!audio.paused)audio.pause();
       }
    }
    activePlayerChanged();

}


function activePlayerChanged()
{
    let speelt_degene_waarop_ik_klik=-1;
    // something changed in which player is playing..?
    let alle_audio_players=document.getElementsByClassName("player"); // loop alle player-object op de pagina af..
    for(let all=0; all<alle_audio_players.length;all++ )
    {
        let audio = alle_audio_players[all].getElementsByTagName("audio")[0];;
        let play_button=alle_audio_players[all].getElementsByClassName("play-pause")[0];
        if(!audio.paused)
        {
            speelt_degene_waarop_ik_klik= alle_audio_players[all];// base of player playing..
            play_button.src = "./img/web/pause.png";
        }else
        {
            play_button.src = "./img/web/play.png";
        }
    }
    // fix the background
    switch (speelt_degene_waarop_ik_klik.id) {

        case "Qapital":
                $('#background').css("background-image", "url(./img/web/qapital.jpg)");
                break;
        case "Defqon":
                $('#background').css("background-image", "url(./img/web/defqon.jpg)");
            break;
        case "Intents":
            $('#background').css("background-image", "url(./img/web/intents.jpg)");
            break;
        default:
                $('#background').css("background-image", "url(./img/web/background.jpg)");
        }

}

function stop(){
    aantalKeerGeklikt += 1;
    myAudio.pause();
    myAudio.currentTime = 0;
    myAudio2.pause();
    myAudio2.currentTime = 0;
    myAudio3.pause();
    myAudio3.currentTime = 0;
//    document.getElementById("play_button").src = "./img/web/play.png";
    $('#background').css("background-image", "url(./img/web/background.jpg)");

    activePlayerChanged();
}

console.log(aantalKeerGeklikt);