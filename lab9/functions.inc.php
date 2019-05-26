<?php

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function ki()  {

    $images = array();
    $images[0] = array("id"=>22,"title" => "View of Cologne", "description" => "View of Cologne from atop the Cologne Cathedral", "country" => "Germany", "city" => "Cologne", "user" => "Joao Fernandes", "url" => "images/square/6114850721.jpg", "taken" => "August 8, 2017", "tags" => array("cathedral","high","birds-eye"));

    $images[1] = array("id"=>54,"title" => "Arch of Septimus Severus", "description" => "In the Roman Forum", "country" => "Italy", "city" => "Rome", "user" => "Ellie Sullivan", "url" => "images/square/9495574327.jpg", "taken" => "August 15, 2017", "tags" => array("rome","ruins","ancient","assassinated"));

    $images[2] = array("id"=>7,"title" => "Lunenburg Port", "description" => "On board a small sailing ship leaving Lunenburg", "country" => "Canada", "city" => "Lunenburg", "user" => "Mark Taylor", "url" => "images/square/5856697109.jpg", "taken" => "August 28, 2017", "tags" => array("maritimes","nova scotia","yacht","port"));

    $images[3] = array("id"=>19,"title" => "British Museum", "description" => "The library in the British Museum in London", "country" => "United Kingdom", "city" => "London", "user" => "Mark Taylor", "url" => "images/square/5855729828.jpg", "taken" => "September 3, 2017", "tags" => array("museum","karl marx","reading room","shadows","yellow"));

    $images[4] = array("id"=>46,"title" => "Temple of Hephaistos", "description" => "Located on western perimeter of Agora in Athens. Built in 460-415 BCE, it is the best preserved temple of antiquity.", "country" => "Greece", "city" => "Athens", "user" => "Ellie Sullivan", "url" => "images/square/8711645510.jpg", "taken" => "October 10, 2017", "tags" => array("ancient","garden","ruins","sunshine"));

    $images[5] = array("id"=>6,"title" => "At the top of Sulpher Mountain", "description" => "At top of Sulpher Mountain near Banff", "country" => "Canada", "city" => "Banff", "user" => "Frantisek Wichterlova", "url" => "images/square/6114907897.jpg", "taken" => "October 15, 2017", "tags" => array("mountain","banff","valley"));

    $images[6] = array("id"=>60,"title" => "Pazzi Chapel at Santa Croce", "description" => "By Filippo Brunelleschi, the chapel is considered to be one of the masterpieces of Renaissance architecture. It is located in the first cloister of the Basilica di Santa Croce.", "country" => "Italy", "city" => "Florence", "user" => "Frantisek Wichterlova", "url" => "images/square/9504609042.jpg", "taken" => "October 23, 2017", "tags" => array("florence","cathedral","church","brunelleschi"));

    $images[7] = array("id"=>58,"title" => "Florence Duomo", "description" => "Photo taken from the Campanile", "country" => "Italy", "city" => "Florence", "user" => "Ellie Sullivan", "url" => "images/square/9498358806.jpg", "taken" => "November 4, 2017", "tags" => array("cathedral","church","brunelleschi","vertigo"));

    $images[8] = array("id"=>75,"title" => "Ancient Theatre of Dionysos", "description" => "On south bank of Acropolis", "country" => "Greece", "city" => "Athens", "user" => "Mark Taylor", "url" => "images/square/8710513053.jpg", "taken" => "November 6, 2017", "tags" => array("athens","ruins","theatre","sophocles"));

    $images[9] = array("id"=>77,"title" => "Dusk on Santorini", "description" => "Looking towards Imerovigli, a village devoted to the appreciation of the sunset!", "country" => "Greece", "city" => "Fira", "user" => "Camille Bernard", "url" => "images/square/8710247776.jpg", "taken" => "November 6, 2017", "tags" => array("fira","sunset","beautiful","wow","volcano"));

    $images[10] = array("id"=>27,"title" => "New National Gallery", "description" => "Exterior of the Mies van der Rohe designed New National Gallery", "country" => "Germany", "city" => "Berlin", "user" => "Joao Fernandes", "url" => "images/square/6114867983.jpg", "taken" => "August 12, 2017", "tags" => array("museum","berlin","modernism","architecture"));

    $images[11] = array("id"=>2,"title" => "Calgary Downtown", "description" => "Calgary Downtown from Edworthy Park", "country" => "Canada", "city" => "Calgary", "user" => "Camille Bernard", "url" => "images/square/6592914823.jpg", "taken" => "October 23, 2017", "tags" => array("autumn","leaves","skyscrappers","zoom"));


    $images[12] = array("id"=>24,"title" => "Downtown Frankfurt", "description" => "Downtown Frankfurt from the Frankfurt Cathedral", "country" => "Germany", "city" => "Frankfurt", "user" => "Ellie Sullivan", "url" => "images/square/6114960821.jpg", "taken" => "August 4, 2017", "tags" => array("downtown","skyscrapper","architecture"));

    $images[13] = array("id"=>13,"title" => "Central Park", "description" => "Conservatory Pond in Central Park New York", "country" => "United States", "city" => "New York", "user" => "Mark Taylor", "url" => "images/square/6596048341.jpg", "taken" => "September 9, 2017", "tags" => array("downtown","skyscrapper","architecture"));

    $images[14] = array("id"=>101,"title" => "Seattle Scene", "description" => "View of the Space Needle and the EMP Museum", "country" => "United States", "city" => "Seattle", "user" => "Mark Taylor", "url" => "images/square/21587937686.jpg", "taken" => "September 23, 2017", "tags" => array("downtown","skyscrapper","architecture","modernism"));

    $images[15] = array("id"=>102,"title" => "Millennium Park Chicago", "description" => "Jay Pritzker Pavilion at Millennium Park by Frank Gehry", "country" => "United States", "city" => "Chicago", "user" => "Mark Taylor", "url" => "images/square/22182041615.jpg", "taken" => "September 28, 2017", "tags" => array("downtown","skyscrapper","architecture","modernism"));

    for($i=0;$i<count($images);$i++){
        echo '<img src="'.$images[$i]["url"].'"/>';
}
}


/*
  Function constructs a string containing the <img> tags necessary to display
  star images that reflect a rating out of 5
*/
function constructRating($rating) {
    $imgTags = "";
    
    // first output the gold stars
    for ($i=0; $i < $rating; $i++) {
        $imgTags .= '<img src="images/star-gold.svg" width="16" />';
    }
    
    // then fill remainder with white stars
    for ($i=$rating; $i < 5; $i++) {
        $imgTags .= '<img src="images/star-white.svg" width="16" />';
    }    
    
    return $imgTags;    
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
<ul class="caption-style-2">

    <li>
        <a href="detail.php?id=22" class="img-responsive">
            <img src="images/square/6114850721.jpg" alt="View of Cologne">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>View of Cologne</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=54" class="img-responsive">
            <img src="images/square/9495574327.jpg" alt="Arch of Septimus Severus">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Arch of Septimus Severus</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=7" class="img-responsive">
            <img src="images/square/5856697109.jpg" alt="Lunenburg Port">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Lunenburg Port</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=19" class="img-responsive">
            <img src="images/square/5855729828.jpg" alt="British Museum">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>British Museum</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=46" class="img-responsive">
            <img src="images/square/8711645510.jpg" alt="Temple of Hephaistos">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Temple of Hephaistos</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=6" class="img-responsive">
            <img src="images/square/6114907897.jpg" alt="At the top of Sulpher Mountain">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>At the top of Sulpher Mountain</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=60" class="img-responsive">
            <img src="images/square/9504609042.jpg" alt="Pazzi Chapel at Santa Croce">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Pazzi Chapel at Santa Croce</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=58" class="img-responsive">
            <img src="images/square/9498358806.jpg" alt="Florence Duomo">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Florence Duomo</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=75" class="img-responsive">
            <img src="images/square/8710513053.jpg" alt="Ancient Theatre of Dionysos">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Ancient Theatre of Dionysos</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=77" class="img-responsive">
            <img src="images/square/8710247776.jpg" alt="Dusk on Santorini">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Dusk on Santorini</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=27" class="img-responsive">
            <img src="images/square/6114867983.jpg" alt="New National Gallery">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>New National Gallery</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=2" class="img-responsive">
            <img src="images/square/6592914823.jpg" alt="Calgary Downtown">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Calgary Downtown</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=24" class="img-responsive">
            <img src="images/square/6114960821.jpg" alt="Downtown Frankfurt">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Downtown Frankfurt</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=13" class="img-responsive">
            <img src="images/square/6596048341.jpg" alt="Central Park">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Central Park</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=101" class="img-responsive">
            <img src="images/square/21587937686.jpg" alt="Seattle Scene">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Seattle Scene</h1>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="detail.php?id=102" class="img-responsive">
            <img src="images/square/22182041615.jpg" alt="Millennium Park Chicago">
            <div class="caption">
                <div class="blur"></div>
                <div class="caption-text">
                    <h1>Millennium Park Chicago</h1>
                </div>
            </div>
        </a>
    </li>


</ul>
</body>

</html>