<?php
// Hangman the Remake --Isaiah Jackson

include("hangmanClass.php");
$Sample = new Page;

$Content = "<center><h1><font face=verdana>Hangman 4</h1><i><p>For whom the man hangs</p></i>";
$Next = "<center><h1><font face=verdana>Hangman 4</h1><i><p>Welcome back!</p></i>";
$_SESSION['win'] = 0;
$_SESSION['lose'] = 0;
$loss = array(1,2,3,4,5,6,7,8,9);
$lines = file("Dictionary.txt"); //Calling Dictionary //Opening Dictionary //Reading Dictionary
session_start();
$randIndex=rand(0,sizeof($lines));
$word = strtolower($_SESSION['word'] ?? $_SESSION['word']= $lines[$randIndex]);
$counter = strlen(trim($word)); 
$Congrats = "<center><h1><font face=verdana color=green>Congratulations!</h1><i><p>The word was <b>$word</b><br /> Thanks for Playing!</p></i></font>";
$Gover = "<center><h1><font face=verdana color=red>Game Over</h1><i><p>The word was <b>$word</b></p></i></font>";
$tries = 9;
?>
<html>
	<style>
	A {text-decoration: none;}
body {
	background-image: url("https://jooinn.com/images/crumpled-paper-128.jpg");
}
</style>
	<body link="black" vlink="black">
		<?php

echo $word;
$used = $_GET['alphabet'];
$set = isset($_GET['alphabet']);
$hidden .= "<p>";
$done = 1;
	for ($i = 0; $i < $counter; $i++){
		if(strstr($used, $word[$i])){
			$hidden .= $word[$i];

		}else{
			$hidden .= "_ ";
			$done=0;

		}
	}

$hidden .= "</p>";
echo $set;
if(isset($_GET['alphabet'])){
			echo "1st barrier";
	if(!strpos($word, $used) !== false){
					echo "2nd barrier";
					$tries = $tries - 1;

	}
}
?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<?php
	$left="<br />Choose a Letter:<br /><br /> You have ". $tries . " tries left.<br />";
	if (($_SESSION['win'] != 0 or $_SESSION['lose'] != 0) and ($tries != 0 or substr_count($hidden,'_') != 0)){
		$Content = "<center><h1><font face=verdana>Hangman 4</h1><i><p>Welcome back!</p></i>";
		$title="Hangman 4";
		$score="";


    }else if ($_SESSION['win'] == 0 or $_SESSION['lose'] == 0){
		$Content = "<center><h1><font face=verdana>Hangman 4</h1><i><p>For whom the man hangs</p></i>";
		$title="Hangman 4";
		$score="";
 
    }
    if ($tries == 0){
		$Content = "<center><h1><font face=verdana color=red>Game Over</h1><i><p>The word was <b>$word</b></p></i></font>";
		$title="Hangman 4 | You Lose!";
		$_SESSION['lose']=++$_SESSION['lose'];
		$score="You have ". $_SESSION['win'] . " wins and " . $_SESSION['lose'] . " losses. That means you have a ". round($_SESSION['win'] / ($_SESSION['win'] + $_SESSION['lose']),2)*100 . "% Winning rate<br />";
		$hidden="";
		$left="";
    }
    if (substr_count($hidden,'_') == 0 && $tries != 0){
		$Content = "<center><h1><font face=verdana color=green>Congratulations!</h1><i><p>The word was <b>$word</b><br /> Thanks for Playing!</p></i></font><br />";
		$title="Hangman 4 | You Win!";
		$_SESSION['win']=++$_SESSION['win'];
		$score="You have ". $_SESSION['win'] . " wins and " . $_SESSION['lose'] . " losses. That means you have a ". round($_SESSION['win'] / ($_SESSION['win'] + $_SESSION['lose']),2)*100 . "% Winning rate <br />";
		$hidden="";
		$left="";
		$tries=10;
		
    }
    

//Start adding to Class

$Sample->Title = $title;
$Sample->Keywords = "Hang, Words";
$Sample->SetContent($Content);
$Sample->SetScore($score);
$Sample->SetTries($tries);
$Sample->SetLeft($left);
$Sample->Display( );

		 if (isset($_GET['alphabet'])) {
		 echo 'You clicked ' . $_GET['alphabet'] . ' <br />';
		 }    
					echo $hidden;
				// Displays _ _ _ _
if (substr_count($hidden,'_') == 0){?>
 <h3><a href="?play=">Play Again</a></h3> <?php
		unset($_SESSION['word']);
}






	if (($Content == "<center><h1><font face=verdana>Hangman 4</h1><i><p>For whom the man hangs</p></i>")){
		// all the letters	?>
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>a">a</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>b">b</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>c">c</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>d">d</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>e">e</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>f">f</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>g">g</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>h">h</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>i">i</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>j">j</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>k">k</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>l">l</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>m">m</a> <br />
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>n">n</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>o">o</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>p">p</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>q">q</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>r">r</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>s">s</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>t">t</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>u">u</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>v">v</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>w">w</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>x">x</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>y">y</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>z">z</a> 
 <?php

    }
    	if (($Content == "<center><h1><font face=verdana>Hangman 4</h1><i><p>Welcome back!</p></i>")){
		// all the letters	?>
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>a">a</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>b">b</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>c">c</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>d">d</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>e">e</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>f">f</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>g">g</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>h">h</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>i">i</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>j">j</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>k">k</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>l">l</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>m">m</a> <br />
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>n">n</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>o">o</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>p">p</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>q">q</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>r">r</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>s">s</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>t">t</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>u">u</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>v">v</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>w">w</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>x">x</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>y">y</a> 
 <a href="?alphabet=<?php if (isset($_GET['alphabet'])) { echo $_GET['alphabet']; } ?>z">z</a> 
 <?php

    }


			?>	
		</form>
	</body>
</html>


