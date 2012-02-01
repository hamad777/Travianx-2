<?php
require_once( LANG_UI_PATH."map.php" );
echo "<div id=\"mbig\">\r\n<div id=\"lightframe\">\r\n<div id=\"darkframe\">\r\n\t<a id=\"map_popclose\" href=\"\" onclick=\"self.close();return false;\"><img src=\"assets/x.gif\" alt=\"";
echo LANGUI_MAP_T14;
echo "\" title=\"";
echo LANGUI_MAP_T14;
echo "\" /></a>\r\n\t<h1>";
echo LANGUI_MAP_T1;
echo " (";
echo "<s";
echo "pan id=\"x\">";
echo $this->x;
echo "</span>|";
echo "<s";
echo "pan id=\"y\">";
echo $this->y;
echo "</span>)</h1>\r\n\r\n<div id=\"map\">\r\n\r\n";
echo "<s";
echo "cript type=\"text/javascript\">\r\n<!--\r\nvar textb = {};\r\ntextb.t1 = '";
echo LANGUI_MAP_T2;
echo ":';\r\ntextb.t2 = '";
echo LANGUI_MAP_T3;
echo "';\r\ntextb.t3 = '";
echo LANGUI_MAP_T4;
echo "';\r\ntextb.t4 = '";
echo LANGUI_MAP_T5;
echo "';\r\ntextb.f = {";
$_f = FALSE;
foreach ( $this->setupMetadata['field_maps_summary'] as $k => $v )
{
    if ( $_f )
    {
        echo ",";
    }
    echo "\"".$k."\":\"".$v."\"";
    $_f = TRUE;
}
echo "};\r\n\r\nfunction scrollMap (evt) {\r\n\tvar k=evt?evt.keyCode:event.keyCode;\r\n\tvar es=\"\";\r\n\tswitch (k) { \r\n\t\tcase 37: es=\"ma_n4\"; break;\r\n\t\tcase 38: es=\"ma_n1\"; break;\r\n\t\tcase 39: es=\"ma_n2\"; break;\r\n\t\tcase 40: es=\"ma_n3\"; break;\r\n\t}\r\n\tvar e = _(es); if(e) e.onclick();\r\n}\r\n\r\nif (window.document.addEventListener) {\r\n   window.document.addEventListener(\"keydown\", scrollMap, false);\r\n} else {\r\n   window.d";
echo "ocument.attachEvent(\"onkeydown\", scrollMap);\r\n}\r\n// -->\r\n</script>\r\n\r\n<div id=\"map_content\">\r\n";
$c = $this->rad * 2 + 1;
$i = 0;
while ( $i < $c )
{
    $j = 0;
    while ( $j < $c )
    {
        echo "<div id=\"i_";
        echo $i;
        echo "_";
        echo $j;
        echo "\" class=\"";
        echo $this->getCssClassName( $i * $c + $j );
        echo "\"></div>";
        ++$j;
    }
    ++$i;
}
echo "</div>\r\n\r\n<div id=\"map_rulers\">\r\n";
$i = 0;
while ( $i < $c )
{
    $x = $this->matrixSet[$i * $c]['x'];
    $y = $this->matrixSet[$i]['y'];
    echo "<div id=\"mx";
    echo $i;
    echo "\">";
    echo $x;
    echo "</div>";
    echo "<div id=\"my";
    echo $i;
    echo "\">";
    echo $y;
    echo "</div>";
    ++$i;
}
echo "</div>\r\n\r\n<map id=\"map_overlay_large\" name=\"map_overlay_large\">\r\n<area id=\"a_0_0\" shape=\"poly\" coords=\"48, 253, 85, 273, 48, 293, 11, 273\" ";
echo $this->getMapArea( 0, 0 );
echo ">\r\n<area id=\"a_0_1\" shape=\"poly\" coords=\"84, 233, 121, 253, 84, 273, 47, 253\" ";
echo $this->getMapArea( 0, 1 );
echo ">\r\n<area id=\"a_0_2\" shape=\"poly\" coords=\"120, 213, 157, 233, 120, 253, 83, 233\" ";
echo $this->getMapArea( 0, 2 );
echo ">\r\n<area id=\"a_0_3\" shape=\"poly\" coords=\"156, 193, 193, 213, 156, 233, 119, 213\" ";
echo $this->getMapArea( 0, 3 );
echo ">\r\n<area id=\"a_0_4\" shape=\"poly\" coords=\"192, 173, 229, 193, 192, 213, 155, 193\" ";
echo $this->getMapArea( 0, 4 );
echo ">\r\n<area id=\"a_0_5\" shape=\"poly\" coords=\"228, 153, 265, 173, 228, 193, 191, 173\" ";
echo $this->getMapArea( 0, 5 );
echo ">\r\n<area id=\"a_0_6\" shape=\"poly\" coords=\"264, 133, 301, 153, 264, 173, 227, 153\" ";
echo $this->getMapArea( 0, 6 );
echo ">\r\n<area id=\"a_0_7\" shape=\"poly\" coords=\"300, 113, 337, 133, 300, 153, 263, 133\" ";
echo $this->getMapArea( 0, 7 );
echo ">\r\n<area id=\"a_0_8\" shape=\"poly\" coords=\"336, 93, 373, 113, 336, 133, 299, 113\" ";
echo $this->getMapArea( 0, 8 );
echo ">\r\n<area id=\"a_0_9\" shape=\"poly\" coords=\"372, 73, 409, 93, 372, 113, 335, 93\" ";
echo $this->getMapArea( 0, 9 );
echo ">\r\n<area id=\"a_0_10\" shape=\"poly\" coords=\"408, 53, 445, 73, 408, 93, 371, 73\" ";
echo $this->getMapArea( 0, 10 );
echo ">\r\n<area id=\"a_0_11\" shape=\"poly\" coords=\"444, 33, 481, 53, 444, 73, 407, 53\" ";
echo $this->getMapArea( 0, 11 );
echo ">\r\n<area id=\"a_0_12\" shape=\"poly\" coords=\"480, 13, 517, 33, 480, 53, 443, 33\" ";
echo $this->getMapArea( 0, 12 );
echo ">\r\n<area id=\"a_1_0\" shape=\"poly\" coords=\"85, 273, 122, 293, 85, 313, 48, 293\" ";
echo $this->getMapArea( 1, 0 );
echo ">\r\n<area id=\"a_1_1\" shape=\"poly\" coords=\"121, 253, 158, 273, 121, 293, 84, 273\" ";
echo $this->getMapArea( 1, 1 );
echo ">\r\n<area id=\"a_1_2\" shape=\"poly\" coords=\"157, 233, 194, 253, 157, 273, 120, 253\" ";
echo $this->getMapArea( 1, 2 );
echo ">\r\n<area id=\"a_1_3\" shape=\"poly\" coords=\"193, 213, 230, 233, 193, 253, 156, 233\" ";
echo $this->getMapArea( 1, 3 );
echo ">\r\n<area id=\"a_1_4\" shape=\"poly\" coords=\"229, 193, 266, 213, 229, 233, 192, 213\" ";
echo $this->getMapArea( 1, 4 );
echo ">\r\n<area id=\"a_1_5\" shape=\"poly\" coords=\"265, 173, 302, 193, 265, 213, 228, 193\" ";
echo $this->getMapArea( 1, 5 );
echo ">\r\n<area id=\"a_1_6\" shape=\"poly\" coords=\"301, 153, 338, 173, 301, 193, 264, 173\" ";
echo $this->getMapArea( 1, 6 );
echo ">\r\n<area id=\"a_1_7\" shape=\"poly\" coords=\"337, 133, 374, 153, 337, 173, 300, 153\" ";
echo $this->getMapArea( 1, 7 );
echo ">\r\n<area id=\"a_1_8\" shape=\"poly\" coords=\"373, 113, 410, 133, 373, 153, 336, 133\" ";
echo $this->getMapArea( 1, 8 );
echo ">\r\n<area id=\"a_1_9\" shape=\"poly\" coords=\"409, 93, 446, 113, 409, 133, 372, 113\" ";
echo $this->getMapArea( 1, 9 );
echo ">\r\n<area id=\"a_1_10\" shape=\"poly\" coords=\"445, 73, 482, 93, 445, 113, 408, 93\" ";
echo $this->getMapArea( 1, 10 );
echo ">\r\n<area id=\"a_1_11\" shape=\"poly\" coords=\"481, 53, 518, 73, 481, 93, 444, 73\" ";
echo $this->getMapArea( 1, 11 );
echo ">\r\n<area id=\"a_1_12\" shape=\"poly\" coords=\"517, 33, 554, 53, 517, 73, 480, 53\" ";
echo $this->getMapArea( 1, 12 );
echo ">\r\n<area id=\"a_2_0\" shape=\"poly\" coords=\"122, 293, 159, 313, 122, 333, 85, 313\" ";
echo $this->getMapArea( 2, 0 );
echo ">\r\n<area id=\"a_2_1\" shape=\"poly\" coords=\"158, 273, 195, 293, 158, 313, 121, 293\" ";
echo $this->getMapArea( 2, 1 );
echo ">\r\n<area id=\"a_2_2\" shape=\"poly\" coords=\"194, 253, 231, 273, 194, 293, 157, 273\" ";
echo $this->getMapArea( 2, 2 );
echo ">\r\n<area id=\"a_2_3\" shape=\"poly\" coords=\"230, 233, 267, 253, 230, 273, 193, 253\" ";
echo $this->getMapArea( 2, 3 );
echo ">\r\n<area id=\"a_2_4\" shape=\"poly\" coords=\"266, 213, 303, 233, 266, 253, 229, 233\" ";
echo $this->getMapArea( 2, 4 );
echo ">\r\n<area id=\"a_2_5\" shape=\"poly\" coords=\"302, 193, 339, 213, 302, 233, 265, 213\" ";
echo $this->getMapArea( 2, 5 );
echo ">\r\n<area id=\"a_2_6\" shape=\"poly\" coords=\"338, 173, 375, 193, 338, 213, 301, 193\" ";
echo $this->getMapArea( 2, 6 );
echo ">\r\n<area id=\"a_2_7\" shape=\"poly\" coords=\"374, 153, 411, 173, 374, 193, 337, 173\" ";
echo $this->getMapArea( 2, 7 );
echo ">\r\n<area id=\"a_2_8\" shape=\"poly\" coords=\"410, 133, 447, 153, 410, 173, 373, 153\" ";
echo $this->getMapArea( 2, 8 );
echo ">\r\n<area id=\"a_2_9\" shape=\"poly\" coords=\"446, 113, 483, 133, 446, 153, 409, 133\" ";
echo $this->getMapArea( 2, 9 );
echo ">\r\n<area id=\"a_2_10\" shape=\"poly\" coords=\"482, 93, 519, 113, 482, 133, 445, 113\" ";
echo $this->getMapArea( 2, 10 );
echo ">\r\n<area id=\"a_2_11\" shape=\"poly\" coords=\"518, 73, 555, 93, 518, 113, 481, 93\" ";
echo $this->getMapArea( 2, 11 );
echo ">\r\n<area id=\"a_2_12\" shape=\"poly\" coords=\"554, 53, 591, 73, 554, 93, 517, 73\" ";
echo $this->getMapArea( 2, 12 );
echo ">\r\n<area id=\"a_3_0\" shape=\"poly\" coords=\"159, 313, 196, 333, 159, 353, 122, 333\" ";
echo $this->getMapArea( 3, 0 );
echo ">\r\n<area id=\"a_3_1\" shape=\"poly\" coords=\"195, 293, 232, 313, 195, 333, 158, 313\" ";
echo $this->getMapArea( 3, 1 );
echo ">\r\n<area id=\"a_3_2\" shape=\"poly\" coords=\"231, 273, 268, 293, 231, 313, 194, 293\" ";
echo $this->getMapArea( 3, 2 );
echo ">\r\n<area id=\"a_3_3\" shape=\"poly\" coords=\"267, 253, 304, 273, 267, 293, 230, 273\" ";
echo $this->getMapArea( 3, 3 );
echo ">\r\n<area id=\"a_3_4\" shape=\"poly\" coords=\"303, 233, 340, 253, 303, 273, 266, 253\" ";
echo $this->getMapArea( 3, 4 );
echo ">\r\n<area id=\"a_3_5\" shape=\"poly\" coords=\"339, 213, 376, 233, 339, 253, 302, 233\" ";
echo $this->getMapArea( 3, 5 );
echo ">\r\n<area id=\"a_3_6\" shape=\"poly\" coords=\"375, 193, 412, 213, 375, 233, 338, 213\" ";
echo $this->getMapArea( 3, 6 );
echo ">\r\n<area id=\"a_3_7\" shape=\"poly\" coords=\"411, 173, 448, 193, 411, 213, 374, 193\" ";
echo $this->getMapArea( 3, 7 );
echo ">\r\n<area id=\"a_3_8\" shape=\"poly\" coords=\"447, 153, 484, 173, 447, 193, 410, 173\" ";
echo $this->getMapArea( 3, 8 );
echo ">\r\n<area id=\"a_3_9\" shape=\"poly\" coords=\"483, 133, 520, 153, 483, 173, 446, 153\" ";
echo $this->getMapArea( 3, 9 );
echo ">\r\n<area id=\"a_3_10\" shape=\"poly\" coords=\"519, 113, 556, 133, 519, 153, 482, 133\" ";
echo $this->getMapArea( 3, 10 );
echo ">\r\n<area id=\"a_3_11\" shape=\"poly\" coords=\"555, 93, 592, 113, 555, 133, 518, 113\" ";
echo $this->getMapArea( 3, 11 );
echo ">\r\n<area id=\"a_3_12\" shape=\"poly\" coords=\"591, 73, 628, 93, 591, 113, 554, 93\" ";
echo $this->getMapArea( 3, 12 );
echo ">\r\n<area id=\"a_4_0\" shape=\"poly\" coords=\"196, 333, 233, 353, 196, 373, 159, 353\" ";
echo $this->getMapArea( 4, 0 );
echo ">\r\n<area id=\"a_4_1\" shape=\"poly\" coords=\"232, 313, 269, 333, 232, 353, 195, 333\" ";
echo $this->getMapArea( 4, 1 );
echo ">\r\n<area id=\"a_4_2\" shape=\"poly\" coords=\"268, 293, 305, 313, 268, 333, 231, 313\" ";
echo $this->getMapArea( 4, 2 );
echo ">\r\n<area id=\"a_4_3\" shape=\"poly\" coords=\"304, 273, 341, 293, 304, 313, 267, 293\" ";
echo $this->getMapArea( 4, 3 );
echo ">\r\n<area id=\"a_4_4\" shape=\"poly\" coords=\"340, 253, 377, 273, 340, 293, 303, 273\" ";
echo $this->getMapArea( 4, 4 );
echo ">\r\n<area id=\"a_4_5\" shape=\"poly\" coords=\"376, 233, 413, 253, 376, 273, 339, 253\" ";
echo $this->getMapArea( 4, 5 );
echo ">\r\n<area id=\"a_4_6\" shape=\"poly\" coords=\"412, 213, 449, 233, 412, 253, 375, 233\" ";
echo $this->getMapArea( 4, 6 );
echo ">\r\n<area id=\"a_4_7\" shape=\"poly\" coords=\"448, 193, 485, 213, 448, 233, 411, 213\" ";
echo $this->getMapArea( 4, 7 );
echo ">\r\n<area id=\"a_4_8\" shape=\"poly\" coords=\"484, 173, 521, 193, 484, 213, 447, 193\" ";
echo $this->getMapArea( 4, 8 );
echo ">\r\n<area id=\"a_4_9\" shape=\"poly\" coords=\"520, 153, 557, 173, 520, 193, 483, 173\" ";
echo $this->getMapArea( 4, 9 );
echo ">\r\n<area id=\"a_4_10\" shape=\"poly\" coords=\"556, 133, 593, 153, 556, 173, 519, 153\" ";
echo $this->getMapArea( 4, 10 );
echo ">\r\n<area id=\"a_4_11\" shape=\"poly\" coords=\"592, 113, 629, 133, 592, 153, 555, 133\" ";
echo $this->getMapArea( 4, 11 );
echo ">\r\n<area id=\"a_4_12\" shape=\"poly\" coords=\"628, 93, 665, 113, 628, 133, 591, 113\" ";
echo $this->getMapArea( 4, 12 );
echo ">\r\n<area id=\"a_5_0\" shape=\"poly\" coords=\"233, 353, 270, 373, 233, 393, 196, 373\" ";
echo $this->getMapArea( 5, 0 );
echo ">\r\n<area id=\"a_5_1\" shape=\"poly\" coords=\"269, 333, 306, 353, 269, 373, 232, 353\" ";
echo $this->getMapArea( 5, 1 );
echo ">\r\n<area id=\"a_5_2\" shape=\"poly\" coords=\"305, 313, 342, 333, 305, 353, 268, 333\" ";
echo $this->getMapArea( 5, 2 );
echo ">\r\n<area id=\"a_5_3\" shape=\"poly\" coords=\"341, 293, 378, 313, 341, 333, 304, 313\" ";
echo $this->getMapArea( 5, 3 );
echo ">\r\n<area id=\"a_5_4\" shape=\"poly\" coords=\"377, 273, 414, 293, 377, 313, 340, 293\" ";
echo $this->getMapArea( 5, 4 );
echo ">\r\n<area id=\"a_5_5\" shape=\"poly\" coords=\"413, 253, 450, 273, 413, 293, 376, 273\" ";
echo $this->getMapArea( 5, 5 );
echo ">\r\n<area id=\"a_5_6\" shape=\"poly\" coords=\"449, 233, 486, 253, 449, 273, 412, 253\" ";
echo $this->getMapArea( 5, 6 );
echo ">\r\n<area id=\"a_5_7\" shape=\"poly\" coords=\"485, 213, 522, 233, 485, 253, 448, 233\" ";
echo $this->getMapArea( 5, 7 );
echo ">\r\n<area id=\"a_5_8\" shape=\"poly\" coords=\"521, 193, 558, 213, 521, 233, 484, 213\" ";
echo $this->getMapArea( 5, 8 );
echo ">\r\n<area id=\"a_5_9\" shape=\"poly\" coords=\"557, 173, 594, 193, 557, 213, 520, 193\" ";
echo $this->getMapArea( 5, 9 );
echo ">\r\n<area id=\"a_5_10\" shape=\"poly\" coords=\"593, 153, 630, 173, 593, 193, 556, 173\" ";
echo $this->getMapArea( 5, 10 );
echo ">\r\n<area id=\"a_5_11\" shape=\"poly\" coords=\"629, 133, 666, 153, 629, 173, 592, 153\" ";
echo $this->getMapArea( 5, 11 );
echo ">\r\n<area id=\"a_5_12\" shape=\"poly\" coords=\"665, 113, 702, 133, 665, 153, 628, 133\" ";
echo $this->getMapArea( 5, 12 );
echo ">\r\n<area id=\"a_6_0\" shape=\"poly\" coords=\"270, 373, 307, 393, 270, 413, 233, 393\" ";
echo $this->getMapArea( 6, 0 );
echo ">\r\n<area id=\"a_6_1\" shape=\"poly\" coords=\"306, 353, 343, 373, 306, 393, 269, 373\" ";
echo $this->getMapArea( 6, 1 );
echo ">\r\n<area id=\"a_6_2\" shape=\"poly\" coords=\"342, 333, 379, 353, 342, 373, 305, 353\" ";
echo $this->getMapArea( 6, 2 );
echo ">\r\n<area id=\"a_6_3\" shape=\"poly\" coords=\"378, 313, 415, 333, 378, 353, 341, 333\" ";
echo $this->getMapArea( 6, 3 );
echo ">\r\n<area id=\"a_6_4\" shape=\"poly\" coords=\"414, 293, 451, 313, 414, 333, 377, 313\" ";
echo $this->getMapArea( 6, 4 );
echo ">\r\n<area id=\"a_6_5\" shape=\"poly\" coords=\"450, 273, 487, 293, 450, 313, 413, 293\" ";
echo $this->getMapArea( 6, 5 );
echo ">\r\n<area id=\"a_6_6\" shape=\"poly\" coords=\"486, 253, 523, 273, 486, 293, 449, 273\" ";
echo $this->getMapArea( 6, 6 );
echo ">\r\n<area id=\"a_6_7\" shape=\"poly\" coords=\"522, 233, 559, 253, 522, 273, 485, 253\" ";
echo $this->getMapArea( 6, 7 );
echo ">\r\n<area id=\"a_6_8\" shape=\"poly\" coords=\"558, 213, 595, 233, 558, 253, 521, 233\" ";
echo $this->getMapArea( 6, 8 );
echo ">\r\n<area id=\"a_6_9\" shape=\"poly\" coords=\"594, 193, 631, 213, 594, 233, 557, 213\" ";
echo $this->getMapArea( 6, 9 );
echo ">\r\n<area id=\"a_6_10\" shape=\"poly\" coords=\"630, 173, 667, 193, 630, 213, 593, 193\" ";
echo $this->getMapArea( 6, 10 );
echo ">\r\n<area id=\"a_6_11\" shape=\"poly\" coords=\"666, 153, 703, 173, 666, 193, 629, 173\" ";
echo $this->getMapArea( 6, 11 );
echo ">\r\n<area id=\"a_6_12\" shape=\"poly\" coords=\"702, 133, 739, 153, 702, 173, 665, 153\" ";
echo $this->getMapArea( 6, 12 );
echo ">\r\n<area id=\"a_7_0\" shape=\"poly\" coords=\"307, 393, 344, 413, 307, 433, 270, 413\" ";
echo $this->getMapArea( 7, 0 );
echo ">\r\n<area id=\"a_7_1\" shape=\"poly\" coords=\"343, 373, 380, 393, 343, 413, 306, 393\" ";
echo $this->getMapArea( 7, 1 );
echo ">\r\n<area id=\"a_7_2\" shape=\"poly\" coords=\"379, 353, 416, 373, 379, 393, 342, 373\" ";
echo $this->getMapArea( 7, 2 );
echo ">\r\n<area id=\"a_7_3\" shape=\"poly\" coords=\"415, 333, 452, 353, 415, 373, 378, 353\" ";
echo $this->getMapArea( 7, 3 );
echo ">\r\n<area id=\"a_7_4\" shape=\"poly\" coords=\"451, 313, 488, 333, 451, 353, 414, 333\" ";
echo $this->getMapArea( 7, 4 );
echo ">\r\n<area id=\"a_7_5\" shape=\"poly\" coords=\"487, 293, 524, 313, 487, 333, 450, 313\" ";
echo $this->getMapArea( 7, 5 );
echo ">\r\n<area id=\"a_7_6\" shape=\"poly\" coords=\"523, 273, 560, 293, 523, 313, 486, 293\" ";
echo $this->getMapArea( 7, 6 );
echo ">\r\n<area id=\"a_7_7\" shape=\"poly\" coords=\"559, 253, 596, 273, 559, 293, 522, 273\" ";
echo $this->getMapArea( 7, 7 );
echo ">\r\n<area id=\"a_7_8\" shape=\"poly\" coords=\"595, 233, 632, 253, 595, 273, 558, 253\" ";
echo $this->getMapArea( 7, 8 );
echo ">\r\n<area id=\"a_7_9\" shape=\"poly\" coords=\"631, 213, 668, 233, 631, 253, 594, 233\" ";
echo $this->getMapArea( 7, 9 );
echo ">\r\n<area id=\"a_7_10\" shape=\"poly\" coords=\"667, 193, 704, 213, 667, 233, 630, 213\" ";
echo $this->getMapArea( 7, 10 );
echo ">\r\n<area id=\"a_7_11\" shape=\"poly\" coords=\"703, 173, 740, 193, 703, 213, 666, 193\" ";
echo $this->getMapArea( 7, 11 );
echo ">\r\n<area id=\"a_7_12\" shape=\"poly\" coords=\"739, 153, 776, 173, 739, 193, 702, 173\" ";
echo $this->getMapArea( 7, 12 );
echo ">\r\n<area id=\"a_8_0\" shape=\"poly\" coords=\"344, 413, 381, 433, 344, 453, 307, 433\" ";
echo $this->getMapArea( 8, 0 );
echo ">\r\n<area id=\"a_8_1\" shape=\"poly\" coords=\"380, 393, 417, 413, 380, 433, 343, 413\" ";
echo $this->getMapArea( 8, 1 );
echo ">\r\n<area id=\"a_8_2\" shape=\"poly\" coords=\"416, 373, 453, 393, 416, 413, 379, 393\" ";
echo $this->getMapArea( 8, 2 );
echo ">\r\n<area id=\"a_8_3\" shape=\"poly\" coords=\"452, 353, 489, 373, 452, 393, 415, 373\" ";
echo $this->getMapArea( 8, 3 );
echo ">\r\n<area id=\"a_8_4\" shape=\"poly\" coords=\"488, 333, 525, 353, 488, 373, 451, 353\" ";
echo $this->getMapArea( 8, 4 );
echo ">\r\n<area id=\"a_8_5\" shape=\"poly\" coords=\"524, 313, 561, 333, 524, 353, 487, 333\" ";
echo $this->getMapArea( 8, 5 );
echo ">\r\n<area id=\"a_8_6\" shape=\"poly\" coords=\"560, 293, 597, 313, 560, 333, 523, 313\" ";
echo $this->getMapArea( 8, 6 );
echo ">\r\n<area id=\"a_8_7\" shape=\"poly\" coords=\"596, 273, 633, 293, 596, 313, 559, 293\" ";
echo $this->getMapArea( 8, 7 );
echo ">\r\n<area id=\"a_8_8\" shape=\"poly\" coords=\"632, 253, 669, 273, 632, 293, 595, 273\" ";
echo $this->getMapArea( 8, 8 );
echo ">\r\n<area id=\"a_8_9\" shape=\"poly\" coords=\"668, 233, 705, 253, 668, 273, 631, 253\" ";
echo $this->getMapArea( 8, 9 );
echo ">\r\n<area id=\"a_8_10\" shape=\"poly\" coords=\"704, 213, 741, 233, 704, 253, 667, 233\" ";
echo $this->getMapArea( 8, 10 );
echo ">\r\n<area id=\"a_8_11\" shape=\"poly\" coords=\"740, 193, 777, 213, 740, 233, 703, 213\" ";
echo $this->getMapArea( 8, 11 );
echo ">\r\n<area id=\"a_8_12\" shape=\"poly\" coords=\"776, 173, 813, 193, 776, 213, 739, 193\" ";
echo $this->getMapArea( 8, 12 );
echo ">\r\n<area id=\"a_9_0\" shape=\"poly\" coords=\"381, 433, 418, 453, 381, 473, 344, 453\" ";
echo $this->getMapArea( 9, 0 );
echo ">\r\n<area id=\"a_9_1\" shape=\"poly\" coords=\"417, 413, 454, 433, 417, 453, 380, 433\" ";
echo $this->getMapArea( 9, 1 );
echo ">\r\n<area id=\"a_9_2\" shape=\"poly\" coords=\"453, 393, 490, 413, 453, 433, 416, 413\" ";
echo $this->getMapArea( 9, 2 );
echo ">\r\n<area id=\"a_9_3\" shape=\"poly\" coords=\"489, 373, 526, 393, 489, 413, 452, 393\" ";
echo $this->getMapArea( 9, 3 );
echo ">\r\n<area id=\"a_9_4\" shape=\"poly\" coords=\"525, 353, 562, 373, 525, 393, 488, 373\" ";
echo $this->getMapArea( 9, 4 );
echo ">\r\n<area id=\"a_9_5\" shape=\"poly\" coords=\"561, 333, 598, 353, 561, 373, 524, 353\" ";
echo $this->getMapArea( 9, 5 );
echo ">\r\n<area id=\"a_9_6\" shape=\"poly\" coords=\"597, 313, 634, 333, 597, 353, 560, 333\" ";
echo $this->getMapArea( 9, 6 );
echo ">\r\n<area id=\"a_9_7\" shape=\"poly\" coords=\"633, 293, 670, 313, 633, 333, 596, 313\" ";
echo $this->getMapArea( 9, 7 );
echo ">\r\n<area id=\"a_9_8\" shape=\"poly\" coords=\"669, 273, 706, 293, 669, 313, 632, 293\" ";
echo $this->getMapArea( 9, 8 );
echo ">\r\n<area id=\"a_9_9\" shape=\"poly\" coords=\"705, 253, 742, 273, 705, 293, 668, 273\" ";
echo $this->getMapArea( 9, 9 );
echo ">\r\n<area id=\"a_9_10\" shape=\"poly\" coords=\"741, 233, 778, 253, 741, 273, 704, 253\" ";
echo $this->getMapArea( 9, 10 );
echo ">\r\n<area id=\"a_9_11\" shape=\"poly\" coords=\"777, 213, 814, 233, 777, 253, 740, 233\" ";
echo $this->getMapArea( 9, 11 );
echo ">\r\n<area id=\"a_9_12\" shape=\"poly\" coords=\"813, 193, 850, 213, 813, 233, 776, 213\" ";
echo $this->getMapArea( 9, 12 );
echo ">\r\n<area id=\"a_10_0\" shape=\"poly\" coords=\"418, 453, 455, 473, 418, 493, 381, 473\" ";
echo $this->getMapArea( 10, 0 );
echo ">\r\n<area id=\"a_10_1\" shape=\"poly\" coords=\"454, 433, 491, 453, 454, 473, 417, 453\" ";
echo $this->getMapArea( 10, 1 );
echo ">\r\n<area id=\"a_10_2\" shape=\"poly\" coords=\"490, 413, 527, 433, 490, 453, 453, 433\" ";
echo $this->getMapArea( 10, 2 );
echo ">\r\n<area id=\"a_10_3\" shape=\"poly\" coords=\"526, 393, 563, 413, 526, 433, 489, 413\" ";
echo $this->getMapArea( 10, 3 );
echo ">\r\n<area id=\"a_10_4\" shape=\"poly\" coords=\"562, 373, 599, 393, 562, 413, 525, 393\" ";
echo $this->getMapArea( 10, 4 );
echo ">\r\n<area id=\"a_10_5\" shape=\"poly\" coords=\"598, 353, 635, 373, 598, 393, 561, 373\" ";
echo $this->getMapArea( 10, 5 );
echo ">\r\n<area id=\"a_10_6\" shape=\"poly\" coords=\"634, 333, 671, 353, 634, 373, 597, 353\" ";
echo $this->getMapArea( 10, 6 );
echo ">\r\n<area id=\"a_10_7\" shape=\"poly\" coords=\"670, 313, 707, 333, 670, 353, 633, 333\" ";
echo $this->getMapArea( 10, 7 );
echo ">\r\n<area id=\"a_10_8\" shape=\"poly\" coords=\"706, 293, 743, 313, 706, 333, 669, 313\" ";
echo $this->getMapArea( 10, 8 );
echo ">\r\n<area id=\"a_10_9\" shape=\"poly\" coords=\"742, 273, 779, 293, 742, 313, 705, 293\" ";
echo $this->getMapArea( 10, 9 );
echo ">\r\n<area id=\"a_10_10\" shape=\"poly\" coords=\"778, 253, 815, 273, 778, 293, 741, 273\" ";
echo $this->getMapArea( 10, 10 );
echo ">\r\n<area id=\"a_10_11\" shape=\"poly\" coords=\"814, 233, 851, 253, 814, 273, 777, 253\" ";
echo $this->getMapArea( 10, 11 );
echo ">\r\n<area id=\"a_10_12\" shape=\"poly\" coords=\"850, 213, 887, 233, 850, 253, 813, 233\" ";
echo $this->getMapArea( 10, 12 );
echo ">\r\n<area id=\"a_11_0\" shape=\"poly\" coords=\"455, 473, 492, 493, 455, 513, 418, 493\" ";
echo $this->getMapArea( 11, 0 );
echo ">\r\n<area id=\"a_11_1\" shape=\"poly\" coords=\"491, 453, 528, 473, 491, 493, 454, 473\" ";
echo $this->getMapArea( 11, 1 );
echo ">\r\n<area id=\"a_11_2\" shape=\"poly\" coords=\"527, 433, 564, 453, 527, 473, 490, 453\" ";
echo $this->getMapArea( 11, 2 );
echo ">\r\n<area id=\"a_11_3\" shape=\"poly\" coords=\"563, 413, 600, 433, 563, 453, 526, 433\" ";
echo $this->getMapArea( 11, 3 );
echo ">\r\n<area id=\"a_11_4\" shape=\"poly\" coords=\"599, 393, 636, 413, 599, 433, 562, 413\" ";
echo $this->getMapArea( 11, 4 );
echo ">\r\n<area id=\"a_11_5\" shape=\"poly\" coords=\"635, 373, 672, 393, 635, 413, 598, 393\" ";
echo $this->getMapArea( 11, 5 );
echo ">\r\n<area id=\"a_11_6\" shape=\"poly\" coords=\"671, 353, 708, 373, 671, 393, 634, 373\" ";
echo $this->getMapArea( 11, 6 );
echo ">\r\n<area id=\"a_11_7\" shape=\"poly\" coords=\"707, 333, 744, 353, 707, 373, 670, 353\" ";
echo $this->getMapArea( 11, 7 );
echo ">\r\n<area id=\"a_11_8\" shape=\"poly\" coords=\"743, 313, 780, 333, 743, 353, 706, 333\" ";
echo $this->getMapArea( 11, 8 );
echo ">\r\n<area id=\"a_11_9\" shape=\"poly\" coords=\"779, 293, 816, 313, 779, 333, 742, 313\" ";
echo $this->getMapArea( 11, 9 );
echo ">\r\n<area id=\"a_11_10\" shape=\"poly\" coords=\"815, 273, 852, 293, 815, 313, 778, 293\" ";
echo $this->getMapArea( 11, 10 );
echo ">\r\n<area id=\"a_11_11\" shape=\"poly\" coords=\"851, 253, 888, 273, 851, 293, 814, 273\" ";
echo $this->getMapArea( 11, 11 );
echo ">\r\n<area id=\"a_11_12\" shape=\"poly\" coords=\"887, 233, 924, 253, 887, 273, 850, 253\" ";
echo $this->getMapArea( 11, 12 );
echo ">\r\n<area id=\"a_12_0\" shape=\"poly\" coords=\"492, 493, 529, 513, 492, 533, 455, 513\" ";
echo $this->getMapArea( 12, 0 );
echo ">\r\n<area id=\"a_12_1\" shape=\"poly\" coords=\"528, 473, 565, 493, 528, 513, 491, 493\" ";
echo $this->getMapArea( 12, 1 );
echo ">\r\n<area id=\"a_12_2\" shape=\"poly\" coords=\"564, 453, 601, 473, 564, 493, 527, 473\" ";
echo $this->getMapArea( 12, 2 );
echo ">\r\n<area id=\"a_12_3\" shape=\"poly\" coords=\"600, 433, 637, 453, 600, 473, 563, 453\" ";
echo $this->getMapArea( 12, 3 );
echo ">\r\n<area id=\"a_12_4\" shape=\"poly\" coords=\"636, 413, 673, 433, 636, 453, 599, 433\" ";
echo $this->getMapArea( 12, 4 );
echo ">\r\n<area id=\"a_12_5\" shape=\"poly\" coords=\"672, 393, 709, 413, 672, 433, 635, 413\" ";
echo $this->getMapArea( 12, 5 );
echo ">\r\n<area id=\"a_12_6\" shape=\"poly\" coords=\"708, 373, 745, 393, 708, 413, 671, 393\" ";
echo $this->getMapArea( 12, 6 );
echo ">\r\n<area id=\"a_12_7\" shape=\"poly\" coords=\"744, 353, 781, 373, 744, 393, 707, 373\" ";
echo $this->getMapArea( 12, 7 );
echo ">\r\n<area id=\"a_12_8\" shape=\"poly\" coords=\"780, 333, 817, 353, 780, 373, 743, 353\" ";
echo $this->getMapArea( 12, 8 );
echo ">\r\n<area id=\"a_12_9\" shape=\"poly\" coords=\"816, 313, 853, 333, 816, 353, 779, 333\" ";
echo $this->getMapArea( 12, 9 );
echo ">\r\n<area id=\"a_12_10\" shape=\"poly\" coords=\"852, 293, 889, 313, 852, 333, 815, 313\"";
echo $this->getMapArea( 12, 10 );
echo ">\r\n<area id=\"a_12_11\" shape=\"poly\" coords=\"888, 273, 925, 293, 888, 313, 851, 293\"";
echo $this->getMapArea( 12, 11 );
echo ">\r\n<area id=\"a_12_12\" shape=\"poly\" coords=\"924, 253, 961, 273, 924, 293, 887, 273\" ";
echo $this->getMapArea( 12, 12 );
echo ">\r\n<area id=\"ma_n1\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->stepDirectionsMatrix[1];
echo "\" coords=\"762,115,30\" shape=\"circle\" title=\"";
echo LANGUI_MAP_T6;
echo "\">\r\n<area id=\"ma_n2\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->stepDirectionsMatrix[2];
echo "\" coords=\"770,430,30\" shape=\"circle\" title=\"";
echo LANGUI_MAP_T7;
echo "\">\r\n<area id=\"ma_n3\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->stepDirectionsMatrix[3];
echo "\" coords=\"210,430,30\" shape=\"circle\" title=\"";
echo LANGUI_MAP_T8;
echo "\">\r\n<area id=\"ma_n4\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->stepDirectionsMatrix[0];
echo "\" coords=\"200,115,30\" shape=\"circle\" title=\"";
echo LANGUI_MAP_T9;
echo "\">\r\n</map>\r\n<img id=\"map_links\" src=\"assets/x.gif\" usemap=\"#map_overlay_large\">\r\n\r\n<img id=\"map_navibox\" src=\"assets/x.gif\" usemap=\"#map_navibox\">\r\n<map name=\"map_navibox\">\r\n<area id=\"ma_n1p7\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->directionsMatrix[2];
echo "\" coords=\"51,15,73,3,95,15,73,27\" shape=\"poly\" title=\"";
echo LANGUI_MAP_T6;
echo "\">\r\n<area id=\"ma_n2p7\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->directionsMatrix[0];
echo "\" coords=\"51,41,73,29,95,41,73,53\" shape=\"poly\" title=\"";
echo LANGUI_MAP_T7;
echo "\">\r\n<area id=\"ma_n3p7\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->directionsMatrix[3];
echo "\" coords=\"4,41,26,29,48,41,26,53\" shape=\"poly\" title=\"";
echo LANGUI_MAP_T8;
echo "\">\r\n<area id=\"ma_n4p7\" href=\"\" onclick=\"return renderMap(this,true);\" vid=\"";
echo $this->directionsMatrix[1];
echo "\" coords=\"4,15,26,3,48,15,26,27\" shape=\"poly\" title=\"";
echo LANGUI_MAP_T9;
echo "\">\r\n</map>\r\n\r\n<div id=\"map_coords\">\r\n\t<form name=\"map_coords\" method=\"post\" action=\"map.php?l\">\r\n\t\t";
echo "<s";
echo "pan>x </span><input id=\"mcx\" class=\"text\" name=\"mxp\" value=\"";
echo $this->x;
echo "\" maxlength=\"4\">\r\n\t\t";
echo "<s";
echo "pan>y </span><input id=\"mcy\" class=\"text\" name=\"myp\" value=\"";
echo $this->y;
echo "\" maxlength=\"4\">\r\n\t\t<input type=\"image\" id=\"btn_ok\" class=\"dynamic_img\" value=\"ok\" name=\"s1\" src=\"assets/x.gif\" alt=\"";
echo text_okdone_lang;
echo "\">\r\n\t</form>\r\n</div>\r\n\r\n<table cellpadding=\"1\" cellspacing=\"1\" id=\"map_infobox\" class=\"default\">\r\n\t<thead><tr><th colspan=\"2\" id=\"mbx_1\">";
echo LANGUI_MAP_T2;
echo ":</th></tr></thead>\r\n\t<tbody>\r\n\t\t<tr><th>";
echo LANGUI_MAP_T11;
echo ":</th><td id=\"mbx_11\">-</td></tr>\r\n\t\t<tr><th>";
echo LANGUI_MAP_T12;
echo ":</th><td id=\"mbx_12\">-</td></tr>\r\n\t\t<tr><th>";
echo LANGUI_MAP_T13;
echo ":</th><td id=\"mbx_13\">-</td></tr>\r\n\t</tbody>\r\n</table>\r\n</div>\r\n</div></div></div>\r\n";
echo "<s";
echo "cript type=\"text/javascript\">\r\n<!--\r\n";
echo $this->getClientScript( );
echo "// -->\r\n</script>";
?>
