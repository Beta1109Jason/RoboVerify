<?php
	session_start();
	 
	// Generate a random 4-digit number.
	$rnd_num = rand(1111,9999);

	$_SESSION['num'] = $rnd_num;
	
makeImageF($rnd_num,"OpenSans-Light.TTF", 250,25);

function makeImageF($text, $font, $W=200, $H=20, $X=0, $Y=0, $fsize=18, $color=array(0x0,0x0,0x0), $bgcolor=array(0xFF,0xFF,0xFF)){
        
    $im = @imagecreate($W, $H)
        or die("Cannot Initialize new GD image stream");
        
    $background_color = imagecolorallocate($im, $bgcolor[0], $bgcolor[1], $bgcolor[2]);        //RGB color background.
    $text_color = imagecolorallocate($im, $color[0], $color[1], $color[2]);            //RGB color text.
            
    
    imagettftext($im, 10, 0, 75, 10, $text_color, $font, "Robo Verify by Hackzzila");
    imagettftext($im, $fsize, $X, $Y, $fsize, $text_color, $font, $text);
    imagettftext($im, $fsize, 3, 1, $fsize, $text_color, $font, $text);
    imagettftext($im, $fsize, -3, 2, $fsize, $text_color, $font, $text);
    
    header("Content-type: image/gif");                
    return imagegif($im);
}
?>
