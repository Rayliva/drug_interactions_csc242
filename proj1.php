<?PHP 
/************************************************************/
/* Author: Rachel Alden
/* Creation Date: February 5th, 2024
/* Due Date: February 7th, 2024
/* Course: CSC 242
/* Professor Name: Dr. Carelli
/* Assignment: #1 
/* Filename: proj1.php
/* Purpose: This program will accept the names of two drugs
/* and output the level of risk associated with their
/* interaction.
/************************************************************/


//---------------------------------------FUNCTIONS-------------------------------------
/************************************************************/
/*
/*  Function name:    verifyInput
/*  Description:      Determines if input is valid, if not it
/*		      terminates the program.
/*  Parameters:       string - drugName (input)
/*		      string - allowedWords (input)
/*  Return Value:     void
/*
/***********************************************************/

function verifyInput($drugName,$allowedWords){
if (!in_array($drugName, $allowedWords)){
die("Invalid drug type: $drugName \n");
}
}

//-----------------------------------------INPUT---------------------------------------
$allowedWords = array("can","alc","caf","lsd","coc","amp","opi","dmt","ket","psi");

$drug1 = readline("Enter the first three letters of the first drug: ");
$preservedInputD1 = $drug1;
$drug1 = strtolower($drug1);
verifyInput($drug1, $allowedWords);

$drug2 = readline("Enter the first three letters of the second drug: ");
$preservedInputD2 = $drug2;
$drug2 = strtolower($drug2);
verifyInput($drug2, $allowedWords);

if($drug1 == $drug2){
die("Same drug entered twice. Ending program.");
}

//-----------------------------------------OUTPUT---------------------------------------

echo "$preservedInputD1 and $preservedInputD2 have a ";

switch($drug1){
case 'can':
	switch($drug2){
		case 'alc':
		case 'caf':
		case 'lsd':
		case 'psi':
			echo ("low risk of negative interaction.");
			break;
		case 'coc':
		case 'amp':
		case 'opi':
		case 'dmt':
		case 'ket':
			echo ("medium risk of negative interaction.");
	}
break;
case 'alc':
	switch($drug2){
		case 'can':
		case 'lsd':
		case 'psi':
			echo ("low risk of negative interaction.");
                        break;
		case 'caf':
		case 'amp':
		case 'dmt':
			echo ("medium risk of negative interaction.");
			break;
		case 'coc':
		case 'opi':
		case 'ket':
			echo ("high risk of negative interaction.");
	}
break;
case 'caf':
	switch($drug2){
		case 'can':
		case 'lsd':
		case 'opi':
		case 'ket':
		case 'psi':
			echo ("low risk of negative interaction.");
                        break;
		case 'alc':
		case 'amp':
			echo ("medium risk of negative interaction.");
                        break;
		case 'coc':
		case 'dmt':
			echo ("high risk of negative interaction.");
	}
break;
case 'lsd':
	switch($drug2){
		case 'can':
		case 'alc':
                case 'caf':
                case 'amp':
                        echo ("low risk of negative interaction.");
                        break;
                case 'coc':
                case 'opi':
                case 'dmt':
                case 'ket':
		case 'psi':
			echo ("medium risk of negative interaction.");
	}
break;
case 'coc':
	switch($drug2){
    		case 'can':
                case 'lsd':
                case 'dmt':
                case 'ket':
                case 'psi':
			echo ("medium risk of negative interaction.");
                        break;
                case 'alc':
                case 'caf':
                case 'amp':
                case 'opi':
                        echo ("high risk of negative interaction.");
        }
break;
case 'amp':
	switch($drug2){
                case 'can':
                case 'alc':
                case 'caf':
                case 'lsd':
                case 'opi':
                case 'ket':
                case 'psi':
			echo ("medium risk of negative interaction.");
                        break;
                case 'coc':
                case 'dmt':
                        echo ("high risk of negative interaction.");
        }
break;
case 'opi':
	switch($drug2){
                case 'caf':
			echo ("low risk of negative interaction.");
                        break;
                case 'can':
                case 'lsd':
                case 'amp':
                case 'ket':
		case 'psi':
                        echo ("medium risk of negative interaction.");
                        break;
                case 'alc':
                case 'coc':
                case 'dmt':
                        echo ("high risk of negative interaction.");
        }
break;
case 'dmt':
	switch($drug2){
                case 'can':
                case 'alc':
                case 'lsd':
                case 'coc':
                case 'psi':
                        echo ("medium risk of negative interaction.");
                        break;
                case 'caf':
                case 'amp':
                case 'opi':
                case 'ket':
                        echo ("high risk of negative interaction.");
        }
break;
case 'ket':
	switch($drug2){
                case 'caf':
			echo ("low risk of negative interaction.");
			break;
                case 'can':
                case 'lsd':
                case 'coc':
                case 'amp':
		case 'opi':
		case 'psi':
                        echo ("medium risk of negative interaction.");
                        break;
                case 'alc':
                case 'dmt':
                        echo ("high risk of negative interaction.");
        }
break;
case 'psi':
	switch($drug2){
                case 'can':
                case 'alc':
                case 'caf':
                	echo ("low risk of negative interaction.");
                        break;
                case 'lsd':
		case 'coc':
		case 'amp':
		case 'opi':
		case 'dmt':
		case 'ket':
                        echo ("medium risk of negative interaction.");
        }
}

?> 

