<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" href="favicon.ico"/>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=1024" />
	<meta name="keywords" content="fluxus , iiti , indian institute of technology indore, 2013 , cult fest, tech fest, home"/>
	<meta name="description" content="Indian Institute of Technology Indore's Techno-Cultural Festival - 2013"/>
	<meta name="author" content="Gagan and Sumit" />
<title>events@fluxus'13</title>
</head>
<body style="margin:auto;padding:0px;border:0px;background:#222222 url('bg.jpg') repeat fixed center;font-family:calibri;cursor:default;" ondragstart="return false" onselectstart="return false">

<div style="margin:auto;padding:0px;border:0px;background-color:#000000;opacity:0.6;">
	<div style="width:400px;margin:auto;padding:0px;border:0px;opacity:1;">
	<center><a href="http://www.fluxus.in" target="_blank"><img src="f13pop.png" alt="FLUXUS 2013" height=100></img></a></center>
	</div>
</div>

<div style="margin:auto;padding:0px;border:0px;background-color:#511a28;opacity:0.4;">
	<div style="width:400px;margin:auto;padding:0px;border:0px;opacity:1;">
	<center><p style="margin:auto;padding:0px;border:0px;font-size:40px;color:#FFFFFF;">events@fluxus'13</p></center>
	</div>
</div>
<center>
<div id="mbs" style="width:400px;text-align:justify;padding:10px;margin:auto;">
<style type="text/css">

.work_e
		{
			display:block;	
		}
.work_d
		{
			display:none;
		}

p.heading {
text-align:center;
margin:0px;
padding:5px;
font-size:30px;
color:#FFFFFF;
text-shadow:3px 3px 3px #000;
background:rgba(0,0,0,0.3);
cursor:pointer;
}

p.heading:hover {
background:rgba(100,0,0,0.3);
}

p.heading:active {
background:rgba(100,100,100,0.3);
}

p.headingopen {
text-align:center;
margin:0px;
padding:5px;
font-size:30px;
color:#FFFFFF;
text-shadow:3px 3px 3px #000;
background:rgba(0,0,0,0.3);
}

hr {margin:0px;padding:0px;}

p.rnow{
margin:0px;
padding:2px;
text-align:right;
color:#00FF00;
font-size:15px;
background:rgba(100,0,0,0.2);
cursor:pointer;
}

p.det{
margin:0px;
padding:10px;
color:#FFFFFF;
background:rgba(200,200,200,0.2);
}

p.user{
margin:0px;
padding:10px;
text-align:right;
color:#FFFFFF;
background:rgba(0,0,0,0.3);
}

p.menu{
margin:0px;
padding:10px;
text-align:center;
color:#FFFFFF;
background:rgba(0,0,0,0.3);
}

#menu span{
	padding-left:5px;
	padding-right:5px;
}

#menu span:hover{
	background:rgba(255,0,0,0.3);
}

.dnone {
display:none;
background:rgba(200,200,200,0.2);
}

.ddone {
display:;
color:#77FFFF;
margin:0px;
padding:10px;
text-shadow:3px 3px 3px #000;
background:rgba(200,200,200,0.2);
}

a{text-decoration:none;}
a:link{color:#00FF00;}
a:visited{color:#00FF00;}
a:hover{color:#FFFFFF;}
a:active{color:#888888;}

span:hover{color:#FFFFFF;}

.dis{display:none;}

</style>

<script>
function disp(e, x, y) {
	if(y==0)
	{
	document.getElementById('frm'+x).style.display = "block";
	e.setAttribute('onclick', 'disp(this, \''+x+'\', \'1\')');
	e.innerHTML = "Close";
	}
	if(y==1)
	{
	document.getElementById('frm'+x).style.display = "none";
	e.setAttribute('onclick', 'disp(this, \''+x+'\', \'0\')');
	e.innerHTML = "Register Now";
	}
}

function showbar(x, y) {
					if(x==1){document.getElementById('dd'+y).removeAttribute('disabled');}
					if(x==2){document.getElementById('dd'+y).setAttribute('disabled', 'disabled');}
					}

function showhide(x, y) {
			var val = y.getAttribute('value');
			if(val==1){document.getElementById(x).style.display = "block";y.setAttribute('value', '2')}
			else{document.getElementById(x).style.display = "none";y.setAttribute('value', '1')}
			}

var cashordd = 1;

function cod(x){
			cashordd = x;
			}

function ddcheck(x){
			if(cashordd == 0){return true;}
			else{
				var val = document.getElementById(x).value;
				if(val - 0 == val && val.length == 6){}
				else{document.getElementById(x).value = null;alert('Please enter a valid DD No.'); return false; }
				}
			}
			
function menupress(x){
			
			document.getElementById('cult').style.display = "none";
			document.getElementById('tech').style.display = "none";
			document.getElementById('wrkshp').style.display = "none";
			
			document.getElementById(x).style.display = "block";
			
			}
</script>

<p class="user"><?php echo "Hi! ".$_SESSION['name'].", <a href='logout.php'>LogOUT</a>" ?></p>
<br>
<p class="menu" id="menu"><span onclick="menupress('cult')">CULTURALS</span> | <span onclick="menupress('tech')">TECHNICALS</span> | <span onclick="menupress('wrkshp')">WORKSHOPS</span></p>
<br>



<?php $block = 'cult'; ?>



<div id="cult" style="display:none;"> 
<hr>
<p class="headingopen" style="cursor:default;">CULTURALS</p>
<p class="det">Ever been to a retail store? Of course you have! Don’t you just love it when you get everything you need under one roof! Well, we have something similar, from a roller-coaster ride of emotions in the Drama competitions to an exhilarating treasure-hunt spread throughout the city; you’ll get it all at FLUXUS`13. The days are a ride of fun and unnerving excitement which whirl you through exciting rounds of dance, drama and action and the nights will be taken care by the PRO`s themselves. In a nutshell, the three day extravaganza at Fluxus will be a showcase of spectacular talent and an exhilarating experience for the populace .We have something for everyone – be it a sports lover,  a music fanatic , a dance freak, a quiz wizard or simply a fun loving mortal.<br>So come strut your stuff and let your inner rock-star RIP IT UP!!!</p>
<hr>
<p class="heading" onclick="showhide('mun', this)" value="1">Model United Nations</p>
<div id="mun" class="dis">
	<p class="det">For all those who have been following the Israel-Palestinian conflict more than the latest FIFA 13 release, who think they could have done a better job if they were in either the Israel government or the Palestinian Liberation Organization or better still a delegate in the United Nations itself, here comes an opportunity knocking at your doorsteps. Participate in the Model United Nations, play-act the role of a delegate of the nations and try to work out a solution to the raging conflict to win exciting prizes.</p>
	<p class="rnow"><a href="https://docs.google.com/file/d/0Bx95473oaVNwMXpSWDdwWkZvT2c/edit?usp=sharing" target="_blank"><span>Rules</span></a> | <a href="http://bit.ly/iitimun" target="_blank"><span>Register Now</span></a></p>
</div>
<hr>
<p class="heading" onclick="showhide('tr', this)" value="1">Treasure Raider</p>
<div id="tr" class="dis">
	<p class="det">Solve the riddles, find answers to the witty questions and prove yourself to be intelligent enough for the actual Treasure Hunt. Now here is where all the fun begins - clues will be spread all over the city, and all you have got is your wit and a few bucks; one clue leading to another and ultimately to the treasure. But the fun doesn’t end there; other than the treasure itself, we have prizes and merchandise worth Rs. 3000 up for grabs for who unearths the treasure first!</p>
	<p class="rnow"><a href="https://docs.google.com/file/d/0Bx95473oaVNwVGhWb1AxbDhaSHM/edit?usp=sharing" target="_blank"><span>Rules</span></a> | <a href="https://docs.google.com/forms/d/16VgQCIGtoGOgtZi7gkECMWrfo54KVeEgfhSUwnXofKc/edit?usp=sharing" target="_blank"><span>Register Now</span></a></p>
</div>
<hr>
<p class="heading" onclick="showhide('drama', this)" value="1">Drama</p>
<div id="drama" class="dis">
	<p class="det">Yeh prize mujhe dede fluxus! Is it the ‘gabbarsingh’ inside you dying to come out! Then bring ‘him’ to the drama competition hosted by IIT Indore, where some of the best actors will act to perfection, live to the emotion and compete to acquire the top position…..let’s find who takes away the best actor/actress award at the 3rd IITI academy awards ceremony!!!</p>
	<p class="rnow"><a href="https://docs.google.com/file/d/0Bx95473oaVNwWTVtRDY3ZkR1ODg/edit?usp=sharing" target="_blank"><span>Rules</span></a> | <a href="https://docs.google.com/forms/d/1-eIMf0JAeuMrBmQeIRsW7TkFLfcAG1bd7IW9dnX0di0/edit?usp=sharing" target="_blank"><span>Solo Registration</span></a> | <a href="https://docs.google.com/forms/d/1I-cylom2jfVu3bBdhNpkdU_kCaKgpr2AjBsNXK4o2m8/edit?usp=sharing" target="_blank"><span>Group Registration</span></a></p>
</div>
<hr>
<p class="heading"  onclick="showhide('dance', this)" value="1">Dance</p>
<div id="dance" class="dis">
	<p class="det">The flavor of the stage, the panic of performance, the excitement and anxiety, the cheers and applause as you bow down to the audience...is what every dancer's dream. Are you one of those dancing freaks who can’t stop tapping their feet whenever they hear the beats and share this dream, let Fluxus'2013 bring it to life. Our stage + your efforts = a beautiful dance melodrama. So come, groove into ecstasy on the angelic beats at Fluxus and sway in rhythm with some groovy and enthralling moves. Prove your mettle while competing with some of the best in the business.</p>
	<p class="rnow"><a href="https://docs.google.com/file/d/0Bx95473oaVNwTTlBeEdpVEVNLTA/edit?usp=sharing" target="_blank"><span>Rules</span></a> | <a href="https://docs.google.com/forms/d/1Nae0Rost6C4GLkcZY1w7F37XChDN1lNDFiNv3LKXvJI/edit?usp=sharing" target="_blank"><span>Solo Registration</span></a> | <a href="https://docs.google.com/forms/d/1PSqbY8eOFQ62YzVuez6vyEusITut8VTXUBU0Bw4F10A/edit?usp=sharing" target="_blank"><span>Group Registration</span></a></p>
</div>
<hr>
<p class="heading"  onclick="showhide('quiz', this)" value="1">Quizooka</p>
<div id="quiz" class="dis">
	<p class="det">Quizooka is back...with some extremely thought provoking questions which will tease your brain and will put your wits in a quandary. With many categories of questions from ‘identify-the-picture’ to ‘rapid fire’, Quizooka will test the boundaries of your patience. Come and challenge yourself in this colossal quagmire of questions hosted by IIT Indore.<br>It’s time for your inner quiz wizard to wake up!!!</p>
	<p class="rnow"><a href="https://docs.google.com/file/d/0Bx95473oaVNwakhsVGV1VkNrMDA/edit?usp=sharing" target="_blank"><span>Rules</span></a> | <a href="https://docs.google.com/forms/d/1lQYwRNxFMMoBXYRn6UIMwGT-aG4iaCIhDjRtKzdcxfI/edit?usp=sharing" target="_blank"><span>Register Now</span></a></p>
</div>
<hr>
</div>





<div id="tech" style="display:none;">
<hr>
<p class="headingopen" style="cursor:default;">TECHNICALS</p>
<p class="det">Looking for some real technoholic contention? Then prepare yourselves, you've come to the right place! Get ready to fuel the fire of passion, inquisitiveness and the desire for perfection with an extravaganza of unique and challenging events ingeniously crafted by some of the smartest young minds of India. Feel the fire consume your soul as you compete against the best teams of the country!</p>
<hr>
<p class="heading" onclick="showhide('civil', this)" value="1">Civil Design</p>
<div id="civil" class="dis">
	<p class="det">Exquisite structures are conceived only when a mind brimming with creativity gets the balance between beauty and design correct. Challenge the budding architect in you to see if he is capable of crafting utmost beauty into a structure while conserving its ability to withstand thumps and shocks!</p>
	<p class="rnow"><a href="civil.pdf" target="_blank">Details</a> | <span onclick="disp(this, '7', '0')">Register Now</span></p>
	<?php
	 $wid = 7;
	?>
	<div id="frm7" class="dnone"><div class=" <?php if($_SESSION['civil']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['civil']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading" onclick="showhide('elecD', this)" value="1">Electronics Design</p>
<div id="elecD" class="dis">
	<p class="det">“A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away”<br>Can you can achieve the highest level of optimization and make your circuit stand out from the others while performing the same function?</p>
	<p class="rnow"><a href="elecD.pdf" target="_blank">Details</a> | <span onclick="disp(this, '8', '0')">Register Now</span></p>
	<?php
	 $wid = 8;
	?>
	<div id="frm8" class="dnone"><div class=" <?php if($_SESSION['elecD']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['elecD']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading" onclick="showhide('divO', this)" value="1">Divided By Zero</p>
<div id="divO" class="dis">
	<p class="det">"A good programmer checks both ways while crossing a one way street..."<br>So if you are crossing the road, or you think you can, either ways, participate here and prove yourself. Participate in the programming contest at Fluxus '13, and compete for exciting prices.</p>
	<p class="rnow"><a href="divO.pdf" target="_blank">Details</a> | <span onclick="disp(this, '9', '0')">Register Now</span></p>
	<?php 
	 $wid = 9;
	?>
	<div id="frm9" class="dnone"><div class=" <?php if($_SESSION['divO']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['divO']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('dungB', this)" value="1">Dungeon Break</p>
<div id="dungB" class="dis">
	<p class="det">You’re trapped in a deep dungeon and you must escape! Don’t get us wrong here; this game has nothing to do with how strong your legs are. Design an eloquent bot that uses any means you can think of to escape out of a pit without touching its walls. Feel the heat as the height of the pit increases with the level. </p>
	<p class="rnow"><a href="dungB.pdf" target="_blank">Details</a> | <span onclick="disp(this, '10', '0')">Register Now</span></p>
	<?php 
	 $wid = 10;
	?>
	<div id="frm10" class="dnone"><div class=" <?php if($_SESSION['dungB']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['dungB']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('aero', this)" value="1">Aero Modeling</p>
<div id="aero" class="dis">
	<p class="det">Do you have the brilliance to outsmart the Wright brothers of this era? This competition requires one to develop a glider that has no motors or power supply. Put your aero modelling skills at test and design an aircraft that can cover a long distance after being given an initial thrust. Restrictions on dimensions will further complicate the problem! So come up with a raptor and discover the aero scientist within you.</p>
	<p class="rnow"><a href="aero.pdf" target="_blank">Details</a> | <span onclick="disp(this, '11', '0')">Register Now</span></p>
	<?php
	$wid = 11;
	?>
	<div id="frm11" class="dnone"><div class=" <?php if($_SESSION['aero']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['aero']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('robo1', this)" value="1">Robo 1</p>
<div id="robo1" class="dis">
	<p class="det">Do you dare to test your robo hound’s metal in this blood thirsty war of speed and accuracy? This line follower robot competition gives a challenge to the tech-savvy minds to create their own autonomous bots that can follow a prescribed path in the least possible time. Mind you, there will be complex spiral paths and the robos will scurry simultaneously with other legion bots in parallel paths. The photo finish endings will give you the adrenaline rush of your life!</p>
	<p class="rnow"><a href="robo1.pdf" target="_blank">Details</a> | <span onclick="disp(this, '12', '0')">Register Now</span></p>
	<?php
	$wid = 12;
	?>
	<div id="frm12" class="dnone"><div class=" <?php if($_SESSION['robo1']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['robo1']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading" onclick="showhide('roboA', this)" value="1">Robo Aquatics</p>
<div id="roboA" class="dis">
	<p class="det">Remember those high velocity motorboat chases across the waters of Venice often depicted in Hollywood? Robo-Aquatics aims to capture the thrill of such acts and pack all of it into a contest so intense that even a split second can be the difference between winning and losing.</p>
	<p class="rnow"><a href="roboA.pdf" target="_blank">Details</a> | <span onclick="disp(this, '13', '0')">Register Now</span></p>
	<?php 
	 $wid = 13;
	?>
	<div id="frm13" class="dnone"><div class=" <?php if($_SESSION['roboA']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['roboA']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('armada', this)" value="1">M-Armada</p>
<div id="armada" class="dis">
	<p class="det">Accuracy, Speed, and Span! That’s what M-Armada is about! In this event, contestants will be required to design a missile with a certain payload, whose accuracy and range will be juxtaposed against rivals! So what are you waiting for? Your nearest Arsenal awaits you!</p>
	<p class="rnow"><a href="armada.pdf" target="_blank">Details</a> | <span onclick="disp(this, '14', '0')">Register Now</span></p>
	<?php 
	 $wid = 14;
	?>
	<div id="frm14" class="dnone"><div class=" <?php if($_SESSION['armada']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['armada']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('roboS', this)" value="1">Robo Sumo</p>
<div id="roboS" class="dis">
	<p class="det">Advanced robotics and Sumo wrestling are pretty common in Japan. Mix them up, and you get Robo Sumo-your mini trip to Japan! In this event, contestants will be required to design a “sumo” robot, and your objective would be to push the other robot out of the arena! So…. let the games begin!</p>
	<p class="rnow"><a href="roboS.pdf" target="_blank">Details</a> | <span onclick="disp(this, '15', '0')">Register Now</span></p>
	<?php
	$wid = 15;
	?>
	<div id="frm15" class="dnone"><div class=" <?php if($_SESSION['roboS']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['roboS']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('roboG', this)" value="1">Robo Golf</p>
<div id="roboG" class="dis">
	<p class="det">For every Tiger in the Woods, time has come to realize a sci-fi fantasy. On an artificial golf course, autonomous bots will try to outscore each other. It’s an Image Processing based event where teams will use a live camera feed of the arena. The bots will decide their course of action to put maximum number of balls in holes in limited time. So mix your sporting and technical ideas and develop a golfer robo to assert your technical supremacy over others.</p>
	<p class="rnow"><a href="roboG.pdf" target="_blank">Details</a> | <span onclick="disp(this, '16', '0')">Register Now</span></p>
	<?php
	$wid = 16;
	?>
	<div id="frm16" class="dnone"><div class=" <?php if($_SESSION['roboG']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['roboG']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('techP', this)" value="1">Technophilia</p>
<div id="techP" class="dis">
	<p class="det">So, you think you keep yourself updated with the latest buzz of tech world???<br>"If you tried to read every document on the web, then for each day's effort, you would be a year further behind in your goal." So not just latest but it's about the whole journey of tech evolution... Do you think you're up to the challenge?? Then wait no further!! Join us to test your knowledge, and know where you stand...</p>
	<p class="rnow"><a href="techP.pdf" target="_blank">Details</a> | <span onclick="disp(this, '17', '0')">Register Now</span></p>
	<?php
	$wid = 17;
	?>
	<div id="frm17" class="dnone"><div class=" <?php if($_SESSION['techP']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('evt.tch.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['techP']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
</div>






<div id="wrkshp" style="display:none;">
<hr>
<p class="heading" onclick="showhide('rules', this)" value="1">RULES</p>
<div id="rules" class="dis">
<p class="det">Make a Demend Draft(DD) in favour of <span style="color:#00FF00;text-decoration:bold;">"REGISTRAR, IIT INDORE"</span> payable at <span style="color:#00FF00;text-decoration:bold;">INDORE</span><br>DD Amount must be according to the workshop you want to participate. The details of which are mentioned below.
<br><span style="color:#00FF00;text-decoration:bold;">AutoSpark: Rs 1000 Per individual participant</span>
<br><span style="color:#00FF00;text-decoration:bold;">HackIN 2.0: Rs 1000 Per individual participant</span>
<br><span style="color:#00FF00;text-decoration:bold;">Wings: Rs 1000 Per individual participant</span>
<br><span style="color:#00FF00;text-decoration:bold;">Full Throttle: Rs 1000 Per individual participant</span>
<br><span style="color:#00FF00;text-decoration:bold;">Image RoboNortics: Rs 4800 Per team</span>
<br><span style="color:#00FF00;text-decoration:bold;">Robo Blaze: Rs 4800 Per team</span>
<br><span style="color:#00FF00;text-decoration:bold;">CyberSec: Rs 1100 Per individual participant</span>
</p>
</div>
<hr>
<p class="headingopen" style="cursor:default;">WORKSHOP</p>
<p class="det">Are you one of those T3chn0-fr3ak5 who just can't have enough of coding and logic? Or do you happen to be a gear head who wouldn’t mind getting a little grease under your finger nails? Either way, Workshops are going to be THE ultimate paradise for you. Workshops are the unmatched platforms tailored to suit your desires and will help you in your pursuit for perfection. From Aero-Modelling to Radio Controlled Racing, experts will be summoned to quench your undying passion associated with your interests by making sure that you get YOUR hands dirty. So strap on and get ready for one of the most enlightening experience of your life!</p>
<hr>
<p class="heading" onclick="showhide('auto', this)" value="1">AutoSPARK</p>
<div id="auto" class="dis">
	<p class="det">Ever wondered how 400Kmph speed demons are built? How a slightest configuration change can help you milk another 10-20Kmph from your car and help you set a new record? Well then AutoSPARK is just the thing for you! From aerodynamic design to suspensions, automotive parts will be explained with their contributions towards the ultimate driving machine. If you are an Automotive savvy then this is the place to be!</p>
	<p class="rnow"><a href="auto.pdf" target="_blank">Details</a> | <span onclick="disp(this, '1', '0')">Register Now</span></p>
	<div id="frm1" class="dnone"><div class="ddone"><center>Registration for this workshop is over now..</center></div></div>
</div>
<hr>
<p class="heading" onclick="showhide('full', this)" value="1">Full Throttle</p>
<div id="full" class="dis">
	<p class="det">Gentlemen! Start your engines! Racing heritage associated with legendary cars such as the McLaren F1 GTR, The Shelby Daytona Coupe, The Porsche 917 Le Mans, has actually inspired millions to recreate these legends in the contemporary world… and the result was Radio Controlled Racing cars! And that is what Full Throttle is all about. Full Throttle will give you the opportunity to indulge into the RC Racing culture, and will help you build your ultimate race car, and even give you a chance to witness the awesomeness of Nitro RC cars, which are capable of leaving a BIG lot of road cars in the dust! </p>
	<p class="rnow"><a href="full.pdf" target="_blank">Details</a> | <span onclick="disp(this, '2', '0')">Register Now</span></p>
	<div id="frm2" class="dnone"><div class="ddone"><center>Registration for this workshop is over now..</center></div></div>
</div>
<hr>
<p class="heading" onclick="showhide('hack', this)" value="1">HackIN 2.0</p>
<div id="hack" class="dis">
	<p class="det">Cyber security is of utmost importance in the contemporary world. Sensitive information is often exchanged through the internet, and is prone to theft. Enterprise or Individual, the risk is always large, and HackIN will prevent you from being compromised. From Google database hacking to OS passkey bypassing, Emails to hacking via USB, HackIN is going to make sure that you are aware of how cyber threats arise, so you may always be ready for them. Moreover, bragging rights complement this course, as you may always show off the skills you have honed ;)</p>
	<p class="rnow"><a href="hackin.pdf" target="_blank">Details</a> | <span onclick="disp(this, '3', '0')">Register Now</span></p>
	<div id="frm3" class="dnone"><div class="ddone"><center>Registration for this workshop is over now..</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('wings', this)" value="1">Wings</p>
<div id="wings" class="dis">
	<p class="det">Remember those paper gliders that you made when you were a child? Now it’s time to give Wings to your dreams, and Wings has you covered! Nitty-gritties of Aerodynamics, Gliders, and even RC controlled planes, will be dealt with so that you can SWOOOSH past your competition and show who is boss! If you want to hold the current mini aircraft speed record, then this course will give you just what you need, so… CHOCKS AWAY!</p>
	<p class="rnow"><a href="wings.pdf" target="_blank">Details</a> | <span onclick="disp(this, '4', '0')">Register Now</span></p>
	<div id="frm4" class="dnone"><div class="ddone"><center>Registration for this workshop is over now..</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('imgrn', this)" value="1">Image RoboNortics</p>
<div id="imgrn" class="dis">
	<p class="det">MATLAB is a widely used tool in all Engineering fields. MATLAB is a versatile software package that can be expanded by any interest group to match their special computational needs. As robotics is an ever-evolving domain, which requires constant innovation and technology advancements.<br>Workshop will cover all the basics and essentials of MATLAB on the first day followed by practical Lab sessions. Second day will cover some advance level topics with practical implementation of Real Time Image Matching Project.</p>
	<p class="rnow"><a href="imgrn.pdf" target="_blank">Details</a> | <span onclick="disp(this, '5', '0')">Register Now</span></p>
	<?php
	$wid = 5;
	?>
	<div id="frm5" class="dnone"><div class=" <?php if($_SESSION['imgrn']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('wrk.star.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['imgrn']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('rblaze', this)" value="1">Robo Blaze</p>
<div id="rblaze" class="dis">
	<p class="det">Robotics is an ever-evolving domain, which requires constant innovation and technology advancements.<br>The workshop will be a two day workshop divided into four sessions each covering exhaustive theory and practical. Check out the details for further information.</p>
	<p class="rnow"><a href="rblaze.pdf" target="_blank">Details</a> | <span onclick="disp(this, '6', '0')">Register Now</span></p>
	<?php
	$wid = 6;
	?>
	<div id="frm6" class="dnone"><div class=" <?php if($_SESSION['rblaze']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('wrk.star.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['rblaze']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('af13', this)" value="1">AppsFLUXUS'13</p>
<div id="af13" class="dis">
	<p class="det">Two day advanced workshop on Android App Development by Finland Labs.</p>
	<p class="rnow"><a href="af13.pdf" target="_blank">Details</a> | <span onclick="disp(this, '24', '0')">Register Now</span></p>
	<?php 
	 $wid = 24;
	 $citya = array('IIT Indore');
	 $datea = array('2013-3-15 to 2013-3-16');
	 $paya = array('DD','Cash');
	?>
	<div id="frm24" class="dnone"><div class=" <?php if($_SESSION['af13']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('wrk.frm.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['af13']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
<p class="heading"  onclick="showhide('techd', this)" value="1">CyberSec</p>
<div id="techd" class="dis">
	<p class="det">As information security increasingly becoming a boardroom level concern, training and certification are becoming increasingly important for candidates and companies.With a promising novel initiative on the cards,This year FLUXUS'13 in association with TechDefence decided to extend & prospectus of HackTrack- Hands on Workshop on Ethical Hacking and Information Security across India.</p>
	<p class="rnow"><a href="techd.pdf" target="_blank">Details</a> | <span onclick="disp(this, '25', '0')">Register Now</span></p>
	<?php 
	 $wid = 25;
	 $citya = array('IIT Indore');
	 $datea = array('2013-3-15 to 2013-3-16');
	 $paya = array('DD','Cash');
	?>
	<div id="frm25" class="dnone"><div class=" <?php if($_SESSION['techd']) {echo 'work_d' ;} else{echo 'work_e'; }  ?>"><center><br><?php include('wrk.frm.inc.php');?><br></center></div><div id="frm1done" class="ddone <?php if($_SESSION['techd']) {echo 'work_e' ;} else{echo 'work_d'; }  ?>"><center>You are already Registered.</center></div></div>
</div>
<hr>
</div>

</div>
</center>
</body>

</html>
