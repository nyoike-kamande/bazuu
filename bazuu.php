<?php
/*
Plugin Name: Bazuu

Plugin URI: https://blockybits.co.ke/
Description: Displays random lots of new street sheng and slangski, 
words & phrases and their meaning. Sheng, popularly defined as an acronym 
for “Swahili-English slang”, emerged in the 1960s in the multicultural environment of Nairobi. 
It is an urban language which combines mainly Kiswahili and English 
but also other Kenyan languages such as Kikuyu, Luyha, Dholuo and Kikamba.

Version: 1.0

Author: Brian Nyoike Kamande

Author URI: https://blockybits.co.ke/
*/

function random_phrase_get_phrase() {
    $phrases = array(

    
    "Kanairo: Nairibi. e.g 'Ukifika hapo Kanairo, jua kwamba ata kuomba ka-nare sio saree ' ",
    "Kinde: Ten bob. e.g 'Oya hebu nipe hio Kinde'  ",
    "Mbwegze: Kukuwa wawili. e.g 'hao senke walikuwa mbwegze' ",
    "Odi: e.g 'Oti si mnoma, ye ni Odi tu' ",
    "Rieng/Rada: What’s up? . e.g 'Rieng ni kufika New Year’s heng'  ",
    "Nguna/ Maguna:  sexy lady/ ladies. e.g 'Rada ni kukutana Java na maguna' ",
    "Salasa: Thirty. e.g 'Asubuhi ma-three ni salasa kutoka South B adi Haile Selassie' ",
    "Mturaa: What’s up? . e.g 'Jioni tunaendea mturaa bro'  ",
    "Dunda:  the club. e.g 'Leo unaenda dunda?' ",
    "Kanja: Paid. e.g 'Nimekanjwa' ",
    "Dipra: any large fuel guzzler. e.g 'Prado'  ",
    "Baroda:  money. e.g 'Leo unaenda dunda?' ",
    "Senke: Motorcycle. e.g 'nilimbeba na senke tukaenda' ",
    "Dipra: any large fuel guzzler. e.g 'Prado'  ",
    "Baroda:  money. e.g 'Leo unaenda dunda?' ",
    

    );
    $key = array_rand( $phrases );
    return $phrases[ $key ];
}

function random_phrase() {
    $phrase = random_phrase_get_phrase();
    echo "<p id='random-phrase'>$phrase</p>";
  
}

add_action( 'admin_notices', 'random_phrase' );
