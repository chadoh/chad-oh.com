<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
        <title>
            <?php
            $numPuncPossibilities = 5;
            echo "chad";
            switch($punc1=rand(2,$numPuncPossibilities)){
                case 1:
                    echo " - "; break;
                case 2:
                    echo "... "; break;
                case 3:
                    echo "! "; break;
                case 4:
                    echo ". "; break;
                case 5:
                    echo "? "; break;
            }
            echo "oh";
            switch($punc2=rand(2,$numPuncPossibilities)){
                case 1:
                    echo " - "; break;
                case 2:
                    echo "... "; break;
                case 3:
                    echo "! "; break;
                case 4:
                    echo ". "; break;
                case 5:
                    echo "? "; break;
            }
			echo $title;
            ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="MSSmartTagsPreventParsing" content="true" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="http://chad-oh.com/images/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="styles/all.css"/>
    </head>
    <body>
        <div id="header">
            <?php
            $numNounPossibilities = 19;
            $noun1 = rand(1, $numNounPossibilities);
            do
            {
                $noun2 = rand(1, $numNounPossibilities);
            } while ($noun2 == $noun1);
            
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/header_chad.png' width='254px' height='164px' alt='Chad' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/punctuation_chad/banner_punctuation_chad_".$punc1.".png' width='74px' height='164px' alt='.' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/header_oh.png' width='218px' height='164px' alt='Oh' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/punctuation_oh/banner_punctuation_oh_".$punc2.".png' width='154px' height='164px' alt='!' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/header_corn.png' width='395px' height='105px' alt='Corn'/></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/subtitle_1/banner_subtitle_1_".$noun1.".png' width='114px' height='105px' alt='showings'/></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/header_&.png' width='25px' height='105px' alt='&'/></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='images/banner/subtitle_2/banner_subtitle_2_".$noun2.".png' width='166px' height='105px' alt='tellings' /></a>";
            ?>
        </div>
