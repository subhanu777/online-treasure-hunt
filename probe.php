<?php 
session_start();
  
if(!$_SESSION['user'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
	
}  
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8" />
	<style>
body {
  background-color: black;
  font-family: cursive;
}

.glow {
	top:10px;
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
	body {
		margin: 0;
		font-family: Arial;
		font-size: 17px;
	
	}
	#myVideo {
		position: fixed;
		right: 0;
		bottom: 0;
		min-width: 100%; 
		min-height: 100%;
	}
	.content {
		position: fixed;
		bottom: 0;
		background: url("6.jpg");
		height:90%;
		width: 100%;
		
	}
	</style>
    <title>Hunters</title>
</head>
<body>
<video autoplay muted loop id="myVideo">
		<source src="back.mp4" type="video/mp4">
	</video>

<p>&nbsp;</p>
<p>
  
  <style>
			
		
		/* Firefox syntax */
		:-moz-full-screen {
			background-color:#6CF;
		}
		
		/* IE/Edge syntax*/ 
		:-ms-fullscreen {
			background-color:#6CF;
		}
		
		/* Standard syntax */
		:fullscreen {
			background-color:#6CF;		  
		}

		#frame001 {
            border-radius: 5px;
            border: 2px solid black;
            height: 560px;
            width: 900px;
			left:210px;
			background-color:#FFF;
			bottom:15px;
			
}-
        


        .buttons002 {
            background-color: blue;
            color: white;
            width: 70px;
            height: 30px;
            border-radius: 5px;
        }

        #font001 {
            text-align: center;
            font-size: large;
            color: black;
			
        }
        #table001 {
            color: black;
            font-size: large;
            text-align: left;
        }

        #font001 {
            color:#900;
			font-family: emoji;
        }

        #font002 {
            color: red;
        }


        .blue001 {background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
	  }
  		.serif {
			  font-family: "Times New Roman", Times, serif;
			  color:#9C0;
		}
		
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

            </style>
   <div> <h1 class="glow">EngiQuest</h1></div>
  <div id="frame001" class="content">
  <div id="font001">
</p>
            <font color="#003366" style="font-style:italic"><h1><img src="images.png" width="60" height="40">Jawaharlal Nehru University</h1></font>
            <h3>Puzzlers Probe</h3>
            <text>Question: <text id="number001">1</text></text><br />
            <b><i><text>Score: <text id="score001">0</text></text><br />
            <font color="#3333FF"><b><text>Time: <text id="time001">1500 S</text></text><br />
            <hr /></i></b></b></font>
    
    <p id="message001"></p>
        <p id="typings001"></p>
    <p id="message002"></p>
    <p id="answer001"></p>
    <p id="message004"></p>
    <p id="next001"></p>
    <div id="disappear001">
        <button class=blue001 onclick="openFullscreen(); window.stop();begin001()">Begin</button>
    </div>
	
<p style="color:#300"><b>Note:</b> If you press Escape button you're disqualified.Write all answer in small letters.</p>
    <script>
	
        var words001 = ["<b>A clever robber breaks into a closed bank where he finds  a clerk. He asks password of the safe from the clerk while pointing a gun on his forehead. Out of the fear, the clerk manages to blurt out ,'everyday the password is changed.I can help you but please point away the gun as if you kill me, you will never be able you crack the password'.The robber ties the clerk on the chair and insert a cloth in his mouth.He then easily opens the safe after inserting the code and takes all the money before he flees.</b></br>(HINT: HCDEANG)", "<b>What is greater than God,</br>more evil than devil,</br>the poor have it,</br>the rich need it and</br>if you eat it,you'll die.</b></br>(HINT : HINGTON)", "<b>Guess a word in English language that does the following :</br>the first two letters signify a male ,</br>the first three letters signify a female,</br>the first four letter signify great,</br>while the entire word signifies a great woman.</b></br>(HINT :ONE HIRE)", "<b>Derive the meaningful English word from PEERKOBEKO that has three consecutive double letters.</b>", "<b>Riddle Me:'I have keys but no locks and space and no rooms .You can enter ,but you can't go outside.'</b></br>(HINT :DRAKEBOY)", "<b>'Digitally yours' is tagline of -</b>", "<b>What starts with 'E' , ends with 'E' but has only one letter ?</b></br>(HINT : PEELOVEN)", "<b>A alone can do a piece of work in 6 days and B alone in 8 days .A and B undertook to do it for Rs. 3200 .With the help of C they completed the work in 3 days .How much is to be paid to C ?</b></br>give numeric value", "<b>Which company has this logo?</b><img src=sony.jpg height=80 />", "<b>She was an English mathematician and writer, chiefly known for her work on Charles Babbage's proposed mechanical general-purpose computer, the Analytical Engine. She was the first to recognise that the machine had applications beyond pure calculation, and published the first algorithm intended to be carried out by such a machine.</b>"];
        var words002 = ["changed", "nothing", "heroine", "bookkeeper", "keyboard", "samsung", "envelope", "400", "sony ericsson", "ada lovelace"];
        var choice001 = ["option001", "option001", "option001", "chice001", "option001", "option001", "option001", "option001", "option001", "option001"];
        var correct001 = ["Correct", "Correct", "Correct", "Correct", "Correct", "Correct", "Correct", "Correct", "Correct", "Correct"];
        var incorrect001 = ["Incorrect", "Incorrect", "Incorrect", "Incorrect", "Incorrect", "Incorrect", "Incorrect", "Incorrect", "Incorrect", "Incorrect"];

        var e = 0;//score
		e++;
        var z = 0;
        z++;//no of questions
		var t=0;
		var t1=0,t2=0,t3=0,t4=0,t5=0,t6=0,t7=0,t8=0,t9=0,t10=0;
		var c1=1500;

var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}

		
		var elem = document.documentElement;
		function openFullscreen() {
		  if (elem.requestFullscreen) {
			elem.requestFullscreen();
		  } else if (elem.mozRequestFullScreen) { /* Firefox */0
			elem.mozRequestFullScreen();
		  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
			elem.webkitRequestFullscreen();
		  } else if (elem.msRequestFullscreen) { /* IE/Edge */
			elem.msRequestFullscreen();
		  }
		}
		window.onkeydown = function(e){
			if(e.keyCode === 27){ // Key code for ESC key
				e.preventDefault();
			}
		};
		window.stop();
        function begin001() {
			c=c1;
			disappear001.innerHTML = "";
            number001.innerHTML = z++;
            message001.innerHTML = words001[0];
            //typings001.innerHTML = choice001[0];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit001()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit001() {
			var b = input001.value;
            if (b == words002[0]) {
                t1 =c1-c;
				answer001.innerHTML = "<div id=font001>" + correct001[0] + "</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
							//window.alert("DON'T PRESS ESC. BUTTON OTHERWISE YOU ARE DONE");
				            number001.innerHTML = z++;
							new002();

//            	message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
            } if (b !== words002[0]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[0]+ "</div>";
               }
        }

        function new002() {
//
            message001.innerHTML = words001[1];
            //typings001.innerHTML = choice001[1];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit002()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit002() {
            var b = input001.value;
            if (b == words002[1]) {
                t2 = c1-c-t1;
				answer001.innerHTML = "<div id=font001>" + correct001[1] + "</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
	            number001.innerHTML = z++;		
				new003();
            } if (b !== words002[1]) {
				answer001.innerHTML = "<div id=font002>" + incorrect001[0]+ "</div>";
            
            }
        }

        function new003() {
            message001.innerHTML = words001[2];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit003()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit003() {
			
                    var b = input001.value;
                    if (b == words002[2]) {
                    	t3 = c1-(c+t1+t2);
                
				        answer001.innerHTML = "<div id=font001>" + correct001[2] + "</div>";
                        disappear001.innerHTML = ""; score001.innerHTML = e++;            
			            number001.innerHTML = z++;
						new004();
                    } if (b !== words002[2]) {
                        answer001.innerHTML = "<div id=font002>" + incorrect001[2] + "</div>";
                    }
        }

        function new004() {            
            message001.innerHTML = words001[3];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit004()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit004() {
            var b = input001.value;
            if (b == words002[3]) {
				t4=c1-(c+t1+t2+t3);
                answer001.innerHTML = "<div id=font001>" + correct001[3] + "</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
	            number001.innerHTML = z++;
				new005();
            } if (b !== words002[3]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[3]  + "</div>";
				}
        }

        function new005() {
            message001.innerHTML = words001[4];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit005()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit005() {
            var b = input001.value;
            if (b == words002[4]) {
				t5=c1-(c+t1+t2+t3+t4);
                answer001.innerHTML = "<div id=font001>" + correct001[4] + "</div>";                
				disappear001.innerHTML = ""; score001.innerHTML = e++;
                number001.innerHTML = z++;
				new006();
            } if (b !== words002[4]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[1]  + "</div>";
            }
        }

        function new006() {
            message001.innerHTML = words001[5];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit006()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit006() {
            var b = input001.value;
            if (b == words002[5]) {
				t6=c1-(c+t1+t2+t3+t4+t5);
                answer001.innerHTML = "<div id=font001>" + correct001[5] +"</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
	            number001.innerHTML = z++;
				new007();
            } if (b !== words002[5]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[5] + "</div>";
            }
        }

        function new007() {
            message001.innerHTML = words001[6];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit007()>Submit</button>";
            answer001.innerHTML = "";			
        }

        function submit007() {
            var b = input001.value;
            if (b == words002[6]) {
				t7=c1-(c+t1+t2+t3+t4+t5+t6);
                answer001.innerHTML = "<div id=font001>" + correct001[6] +"</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
	            number001.innerHTML = z++;
				new008();
            } if (b !== words002[6]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[6] + "</div>";
            }
        }

        function new008() {
            message001.innerHTML = words001[7];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit008()>Submit</button>";
	        answer001.innerHTML = "";

        }

        function submit008() {
            var b = input001.value;
            if (b == words002[7]) {
				t8=c1-(c+t1+t2+t3+t4+t5+t6+t7);
                answer001.innerHTML = "<div id=font001>" + correct001[7] +"</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
	            number001.innerHTML = z++;
				new009();
            } if (b !== words002[7]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[7] + "</div>";
            }
        }

        function new009() {
            message001.innerHTML = words001[8];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit009()>Submit</button>";
			            answer001.innerHTML = "";

        }

        function submit009() {
            var b = input001.value;
            if (b == words002[8]) {
				t9=c1-(c+t1+t2+t3+t4+t5+t6+t7+t8);
                answer001.innerHTML = "<div id=font001>" + correct001[8] +"</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
	            number001.innerHTML = z++;
				new010();
            } if (b !== words002[8]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[8] + "</div>";
            }
        }

        function new010() {
            message001.innerHTML = words001[9];
            disappear001.innerHTML = "<input type=text id=input001 size=15 maxlength=15 /><button class=blue001  onclick=submit010()>Submit</button>";
            answer001.innerHTML = "";
        }

        function submit010() {
            var b = input001.value;
            if (b == words002[9]) {
				t10=c1-(c+t1+t2+t3+t4+t5+t6+t7+t8+t9);
                answer001.innerHTML = "<div id=font001>" + correct001[9] + "<br />" + "<br /> " + "<button class=blue001  onclick=new011()>Done</button>" + "</div>";
                disappear001.innerHTML = ""; score001.innerHTML = e++;
				t =c;
				c=0;
				new011();
            } if (b !== words002[9]) {
                answer001.innerHTML = "<div id=font002>" + incorrect001[9] + "</div>";
            }
        }

        function new011() {
			e=e-1;
                window.clearInterval(update);




				document.write("<h1 style align = center >EXCELLENT </h1><br>");
				// The score is : </br>"+e +"<br></br>"+t1+"<br></br>"+t2+"<br></br>"+t3+"<br></br>"+t4+"<br></br>"+t5+"<br></br>"+t6+"<br></br>"+t7+"<br></br>"+t8+"<br></br>"+t9+"<br></br>"+t10);
				$.post("submit.php",
 				 {
    				ee	:e ,
    				tt1: t1,
    				tt2: t2,
    				tt3: t3,
    				tt4: t4,
    				tt5: t5,
    				tt6: t6,
    				tt7: t7,
    				tt8: t8,
    				tt9: t9,
    				tt10: t10

  				},
  				function(data, status){
    			alert("Data: " + data + "\nStatus: " + status);
  				});

			       }
				  
				  
        function timer001() {
            c = c - 1;
            if (c < 2000) {
                time001.innerHTML = c;
            }

            if (c < 1) {
				e=e-1;
                window.clearInterval(update);

					document.write("<h1 style align = center >Time's up</h1>");

						//The score is : </br>"+e +"<br></br>"+t1+"<br></br>"+t2+"<br></br>"+t3+"<br></br>"+t4+"<br></br>"+t5+"<br></br>"+t6+"<br></br>"+t7+"<br></br>"+t8+"<br></br>"+t9+"<br></br>"+t10);
           $.post("submit.php",
 				 {
    				ee	:e ,
    				tt1: t1,
    				tt2: t2,
    				tt3: t3,
    				tt4: t4,
    				tt5: t5,
    				tt6: t6,
    				tt7: t7,
    				tt8: t8,
    				tt9: t9,
    				tt10: t10

  				},
  				function(data, status){
    			alert("Data: " + data + "\nStatus: " + status);
  				});

			       }



				
            }
        

        update = setInterval("timer001()", 1000);
	
    </script>
     <p id = "response"> Your Response will be shown here</p>

</body>
</html>