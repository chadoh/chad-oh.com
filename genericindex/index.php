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
            function getExtension($file)
            {
                $pos = strrpos($file, '.');
                if (!$pos)
                {
                    return 'Unknown Filetype';
                }
                $str = substr($file, $pos);
                return $str;
            }
            function capitalizeWords($string)
            {
                $string = explode(' ', $string);
                foreach ($string as $key)
                {
                    $string[$key] = ucfirst($string[$key]);
                }
                return implode(' ', $string);
            }
            
            $dir_tree = explode("/", $_SERVER['REQUEST_URI']);
            $title = urldecode($dir_tree[sizeof($dir_tree)-2]);
            switch($title)
            {
                case "backup":
                    $title = "Backup";
                    break;
                case "genericindex":
                    $title = "Generic Index";
                    break;
                case "images":
                    $title = "Images";
                    break;
                case "jobapplications":
                    $title = "Job Applications";
                    break;
                case "resumes":
                    $title = "Resumes";
                    break;
                case "scripts":
                    $title = "Scripts";
                    break;
                case "stuff":
                    $title = "Stuff";
                    break;
                case "styles":
                    $title = "Styles";
                    break;
                case "kittens":
                    $title = "Kittens";
                    break;
                case "wedding":
                    $title = "Wedding Stuff";
                    break;
                case "timkeller":
                    $title = "Tim Keller's Marriage Series";
                    break;
                case "fonts":
                    $title = "Fonts";
                    break;
            }
            echo $title;
            ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="MSSmartTagsPreventParsing" content="true" />
        <link rel="stylesheet" type="text/css" href="http://chad-oh.com/styles/all.css"/>
        </style>
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
            
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/header_chad.png' width='254px' height='164px' alt='Chad' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/punctuation_chad/banner_punctuation_chad_".$punc1.".png' width='74px' height='164px' alt='.' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/header_oh.png' width='218px' height='164px' alt='Oh' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/punctuation_oh/banner_punctuation_oh_".$punc2.".png' width='154px' height='164px' alt='!' /></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/header_corn.png' width='395px' height='105px' alt='Corn'/></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/subtitle_1/banner_subtitle_1_".$noun1.".png' width='114px' height='105px' alt='showings'/></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/header_&.png' width='25px' height='105px' alt='&'/></a>";
            echo "<a href=http://chad-oh.com/index.php><img src='http://chad-oh.com/images/banner/subtitle_2/banner_subtitle_2_".$noun2.".png' width='166px' height='105px' alt='tellings' /></a>";
            ?>
        </div>
        <?php
        echo "<h1>".$title."</h1>";
        ?>
        <div id="content">
            <!--begin content-->
            <div id="main">
                <!--begin main-->
                <div id="dir">
                    <a href="../"><img src="http://chad-oh.com/images/icons/specialfolder.png" border="0"/>Up A Level</a>
                </div>
                <?php
                switch($dir_tree[1])
                {
                    case "genericindex":
                        $showcontents = false;
                        break;
                    case "images":
                        $showcontents = true;
                        break;
                    case "jobapplications":
                        $showcontents = false;
                        break;
                    case "scripts":
                        $showcontents = false;
                        break;
                    case "styles":
                        $showcontents = true;
                        break;
                    default:
                        $showcontents = true;
                }
                
                if ($showcontents)
                {
                    $directory = str_replace("%20", " ", $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
                
                    $dir_results = array ();
                    $dir_results_presentable = array ();
                
                    $file_results = array ();
                    $file_results_presentable = array ();
                
                    $handler = opendir($directory);
                    while ($file = readdir($handler))
                    {
                        if (substr($file, 0, 1) != ".")
                        {
                            if (is_dir("$directory/$file"))
                            {
                                $dir_results[] = $file;
                                $dir_results_presentable[] = capitalizeWords($file);
                            } elseif ($file != "index.php")
                            {
                                $file_results[] = $file;
                                $file_results_presentable[] = capitalizeWords($file);
                            }
                        }
                    }
                    closedir($handler);
                
                    array_multisort($dir_results_presentable, $dir_results);
                    array_multisort($file_results_presentable, $file_results);
                
                    for ($i = 0; $i < sizeof($dir_results); $i++)
                    {
                        echo "<div id='dir'><a href='".$dir_results[$i]."'><img src='http://chad-oh.com/images/icons/folder.png' border='0'/>".$dir_results_presentable[$i]."</a></div>";
                    }
                
                    if (sizeof($dir_results) > 0)
                    {
                        echo "<div id='divider'><img src='http://chad-oh.com/images/divider2.png' /></div>";
                    }
                
                    for ($i = 0; $i < sizeof($file_results); $i++)
                    {
                        echo "<div id='file'><a href='".$file_results[$i]."'>";
                        $img = "/images/icons/filetypeicons/".substr(getExtension($file_results[$i]), 1).".png";
                        if (file_exists($_SERVER['DOCUMENT_ROOT'].$img))
                        {
                            echo "<img src='".$img."' border='0'/>";
                        } else
                        {
                            echo "<img src='http://chad-oh.com/images/icons/filetypeicons/blankdocument.png' border='0' />";
                        }
                
                        echo $file_results_presentable[$i]."</a></div>";
                    }
                
                    if (sizeof($file_results) > 0)
                    {
                        echo "<div id='divider'><img src='http://chad-oh.com/images/divider1.png' /></div>";
                    }
                }
                ?>
            </div><!--end main--><!-- Begin #sidebar -->
            <div id="sidebar">
                <div id="sidebar2">
                    <h2 class="sidebar-title">Links</h2>
                    <ul>
                        <li>
                            <a href="http://chad-oh.com/goings-on.php">What I'm up to</a>
                        </li>
                        <li>
                            <a href="http://picasaweb.google.com/chad.chadoh">Photos</a>
                        </li>
                        <li>
                            <a href="http://www.myspace.com/theroaringkittens">Some Music I've helped make</a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com/chadoh">Twitter</a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/in/chadoh">LinkedIn</a>
                        </li>
                        <li>
                            <a href="http://www.facebook.com/chadoh">Facebook</a>
                        </li>
                        <li>
                            <a href="http://www.chad-oh.com/">Home</a>
                        </li>
                    </ul>
                    <br/>
                    <p>
                        If you're using Firefox 3.5+ or Safari 3.1+, this font is brought to you by <a href="http://www.theleagueofmoveabletype.com/fonts/1-junction">Caroline Hadilaksono</a>. Thanks, Caroline!
                    </p>
                </div>
            </div>
            <!-- End #sidebar -->
        </div>
        <!--end content-->
        <!--?php
        include($_SERVER['DOCUMENT_ROOT'] . "/scripts/visittracker/insertvisit.php");
        ?-->
    </body>
</html>
