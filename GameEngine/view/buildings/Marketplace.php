<?php
require_once( LANG_UI_PATH."custbuilds.php" );
echo "<div id=\"textmenu\">\r\n   <a href=\"build.php?id=";
echo $this->buildingIndex;
echo "\"";
if ( $this->selectedTabIndex == 0 )
{
    echo " class=\"selected\"";
}
echo ">";
echo LANGUI_CUSTBU_MKT_p1;
echo "</a>\r\n | <a href=\"build.php?id=";
echo $this->buildingIndex;
echo "&t=1\"";
if ( $this->selectedTabIndex == 1 )
{
    echo " class=\"selected\"";
}
echo ">";
echo LANGUI_CUSTBU_MKT_p2;
echo "</a>\r\n | <a href=\"build.php?id=";
echo $this->buildingIndex;
echo "&t=2\"";
if ( $this->selectedTabIndex == 2 )
{
    echo " class=\"selected\"";
}
echo ">";
echo LANGUI_CUSTBU_MKT_p3;
echo "</a>\r\n | <a href=\"build.php?id=";
echo $this->buildingIndex;
echo "&t=3\"";
if ( $this->selectedTabIndex == 3 )
{
    echo " class=\"selected\"";
}
echo ">";
echo LANGUI_CUSTBU_MKT_p4;
echo "</a>\r\n</div>\r\n";
if ( $this->selectedTabIndex == 0 )
{
    echo "<s";
    echo "cript language=\"JavaScript\">\r\n<!--\r\nvar merchNum = ";
    echo $this->merchantProperty['exits_num'];
    echo ";\r\nvar carry = ";
    echo $this->merchantProperty['capacity'];
    echo ";\r\n//-->\r\n</script>\r\n<div id=\"contract\">\r\n<form method=\"post\" name=\"snd\" action=\"build.php?id=";
    echo $this->buildingIndex;
    echo "\">\r\n";
    if ( !$this->merchantProperty['confirm_snd'] )
    {
        echo "<input type=\"hidden\" name=\"act\" value=\"1\" />\r\n<table id=\"send_select\" class=\"send_res\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><a href=\"#\" onclick=\"upd_res(1,1); return false;\"><img class=\"r1\" src=\"assets/x.gif\" alt=\"";
        echo item_title_1;
        echo "\" title=\"";
        echo item_title_1;
        echo "\"></a></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_1;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r1\" id=\"r1\" value=\"";
        echo isset( $_POST['r1'] ) ? $_POST['r1'] : "";
        echo "\" maxlength=\"5\" onkeyup=\"upd_res(1)\" tabindex=\"1\"></td>\r\n\t\t\t<td class=\"max\"><a href=\"#\" onmouseup=\"add_res(1);\" onclick=\"return false;\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</a></td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><a href=\"#\" onclick=\"upd_res(2,1); return false;\"><img class=\"r2\" src=\"assets/x.gif\" alt=\"";
        echo item_title_2;
        echo "\" title=\"";
        echo item_title_2;
        echo "\"></a></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_2;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r2\" id=\"r2\" value=\"";
        echo isset( $_POST['r2'] ) ? $_POST['r2'] : "";
        echo "\" maxlength=\"5\" onkeyup=\"upd_res(2)\" tabindex=\"2\"></td>\r\n\t\t\t<td class=\"max\"><a href=\"#\" onmouseup=\"add_res(2);\" onclick=\"return false;\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</a></td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><a href=\"#\" onclick=\"upd_res(3,1); return false;\"><img class=\"r3\" src=\"assets/x.gif\" alt=\"";
        echo item_title_3;
        echo "\" title=\"";
        echo item_title_3;
        echo "\"></a></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_3;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r3\" id=\"r3\" value=\"";
        echo isset( $_POST['r3'] ) ? $_POST['r3'] : "";
        echo "\" maxlength=\"5\" onkeyup=\"upd_res(3)\" tabindex=\"3\"></td>\r\n\t\t\t<td class=\"max\"><a href=\"#\" onmouseup=\"add_res(3);\" onclick=\"return false;\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</a></td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><a href=\"#\" onclick=\"upd_res(4,1); return false;\"><img class=\"r4\" src=\"assets/x.gif\" alt=\"";
        echo item_title_4;
        echo "\" title=\"";
        echo item_title_4;
        echo "\"></a></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_4;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r4\" id=\"r4\" value=\"";
        echo isset( $_POST['r4'] ) ? $_POST['r4'] : "";
        echo "\" maxlength=\"5\" onkeyup=\"upd_res(4)\" tabindex=\"4\"></td>\r\n\t\t\t<td class=\"max\"><a href=\"#\" onmouseup=\"add_res(4);\" onclick=\"return false;\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</a></td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n\r\n<table id=\"target_select\" class=\"res_target\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<tbody>\r\n\t\t<tr><td class=\"mer\">";
        echo LANGUI_CUSTBU_MKT_p1_t1;
        echo " ";
        echo $this->merchantProperty['exits_num'];
        echo "/";
        echo $this->merchantProperty['total_num'];
        echo "</td></tr>\r\n\t\t<tr><td class=\"vil\">";
        echo "<s";
        echo "pan>";
        echo LANGUI_CUSTBU_MKT_p1_t2;
        echo ":</span> <input class=\"text\" type=\"text\" name=\"vname\" value=\"";
        echo isset( $_POST['vname'] ) ? $_POST['vname'] : "";
        echo "\" maxlength=\"20\" tabindex=\"5\"></td></tr>\r\n\t\t<tr><td class=\"or\">";
        echo text_or_lang;
        echo "</td></tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"coo\">\r\n\t\t\t\t";
        echo "<s";
        echo "pan>X:</span><input class=\"text\" type=\"text\" name=\"x\" value=\"";
        echo isset( $_POST['x'] ) ? $_POST['x'] : "";
        echo "\" maxlength=\"4\" tabindex=\"6\">\r\n\t\t\t\t";
        echo "<s";
        echo "pan>Y:</span><input class=\"text\" type=\"text\" name=\"y\" value=\"";
        echo isset( $_POST['y'] ) ? $_POST['y'] : "";
        echo "\" maxlength=\"4\" tabindex=\"7\">\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
        echo "<s";
        echo "cript language=\"JavaScript\" type=\"text/javascript\">document.snd.r1.focus();</script>\r\n";
    }
    else
    {
        echo "<input type=\"hidden\" name=\"act\" value=\"2\" />\r\n<input type=\"hidden\" name=\"vid2\" value=\"";
        echo $this->merchantProperty['to_vid'];
        echo "\" />\r\n<table id=\"send_validate\" class=\"send_res\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><img class=\"r1\" src=\"assets/x.gif\" alt=\"";
        echo item_title_1;
        echo "\" title=\"";
        echo item_title_1;
        echo "\"></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_1;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r1\" id=\"r1\" value=\"";
        echo $_POST['r1'];
        echo "\" readonly=\"\"></td>\r\n\t\t\t<td class=\"max\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><img class=\"r2\" src=\"assets/x.gif\" alt=\"";
        echo item_title_2;
        echo "\" title=\"";
        echo item_title_2;
        echo "\"></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_2;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r2\" id=\"r2\" value=\"";
        echo $_POST['r2'];
        echo "\" readonly=\"\"></td>\r\n\t\t\t<td class=\"max\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><img class=\"r3\" src=\"assets/x.gif\" alt=\"";
        echo item_title_3;
        echo "\" title=\"";
        echo item_title_3;
        echo "\"></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_3;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r3\" id=\"r3\" value=\"";
        echo $_POST['r3'];
        echo "\" readonly=\"\"></td>\r\n\t\t\t<td class=\"max\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"ico\"><img class=\"r4\" src=\"assets/x.gif\" alt=\"";
        echo item_title_4;
        echo "\" title=\"";
        echo item_title_4;
        echo "\"></td>\r\n\t\t\t<td class=\"nam\">";
        echo item_title_4;
        echo ":</td>\r\n\t\t\t<td class=\"val\"><input class=\"text\" type=\"text\" name=\"r4\" id=\"r4\" value=\"";
        echo $_POST['r4'];
        echo "\" readonly=\"\"></td>\r\n\t\t\t<td class=\"max\">(";
        echo $this->merchantProperty['capacity'];
        echo ")</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n\r\n<table id=\"target_validate\" class=\"res_target\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<tbody>\r\n\t\t<tr><td class=\"vil\" colspan=\"2\">";
        echo $this->merchantProperty['vRow']['village_name'];
        echo " (";
        echo $this->merchantProperty['vRow']['rel_x'];
        echo "|";
        echo $this->merchantProperty['vRow']['rel_y'];
        echo ")</td></tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_MKT_p1_t3;
        echo ":</th>\r\n\t\t\t<td><a href=\"profile.php?uid=";
        echo $this->merchantProperty['vRow']['player_id'];
        echo "\">";
        echo $this->merchantProperty['vRow']['player_name'];
        echo "</a></td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo text_period_lang;
        echo ":</th>\r\n\t\t\t<td>";
        echo ( $this->merchantProperty['vRow_time'] );
        echo "</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_MKT_p1_t1;
        echo ":</th>\r\n\t\t\t<td>";
        echo $this->merchantProperty['vRow_merchant_num'];
        echo "</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
    }
    echo "\r\n<div class=\"clear\"></div>\r\n<p><input type=\"image\" value=\"ok\" name=\"s1\" id=\"btn_ok\" class=\"dynamic_img\" src=\"assets/x.gif\" tabindex=\"8\" alt=\"";
    echo LANGUI_CUSTBU_MKT_p3_t8;
    echo "\"></p>\r\n</form>\r\n</div>\r\n<p></p>\r\n";
    if ( $this->isPost( ) && $this->merchantProperty['showError'] )
    {
        echo "\t";
        if ( $this->merchantProperty['vRow'] == NULL )
        {
            echo "\t<p class=\"error\">";
            echo LANGUI_CUSTBU_MKT_p1_t4;
            echo "</p>\r\n\t";
        }
        else if ( !$this->merchantProperty['available_res'] )
        {
            echo "\t<p class=\"error\">";
            echo LANGUI_CUSTBU_MKT_p1_t5;
            echo "</p>\r\n\t";
        }
        else if ( $this->merchantProperty['vRow_merchant_num'] == 0 )
        {
            echo "\t<p class=\"error\">";
            echo $Tmp_163;
            echo ".</p>\r\n\t";
        }
        else if ( $this->merchantProperty['exits_num'] < $this->merchantProperty['vRow_merchant_num'] )
        {
            echo "\t<p class=\"error\">";
            echo LANGUI_CUSTBU_MKT_p1_t7;
            echo " ";
            echo $this->merchantProperty['vRow_merchant_num'];
            echo " ";
            echo LANGUI_CUSTBU_MKT_p1_t8;
            echo "</p>\r\n\t";
        }
        else if ( $this->merchantProperty['same_village'] )
        {
            echo "\t<p class=\"error\">";
            echo LANGUI_CUSTBU_MKT_p1_t9;
            echo ".</p>\r\n\t";
        }
    }
    echo "\r\n<p></p><p>";
    echo LANGUI_CUSTBU_MKT_p1_t10;
    echo " <b>";
    echo $this->merchantProperty['capacity'];
    echo "</b> ";
    echo LANGUI_CUSTBU_MKT_p1_t11;
    echo " .</p><p></p>\r\n\r\n";
    $akey = "merchant_coming";
    if ( isset( $this->queueModel->tasksInQueue[$akey] ) && 0 < sizeof( $this->queueModel->tasksInQueue[$akey] ) )
    {
        $qts = $this->queueModel->tasksInQueue[$akey];
        echo "<h4>";
        echo LANGUI_CUSTBU_MKT_p1_t12;
        echo "</h4>\r\n";
        $m = new BuildModel( );
        foreach ( $qts as $qt )
        {
            $resStr = explode( "|", $qt['proc_params'][1] );
            $merchantNum = explode( "|", $qt['proc_params'][0] );
            $mResources = explode( " ", $resStr );
            $pn = $m->getPlayerName( $qt['player_id'] );
            $vn = $m->getVillageName( $qt['village_id'] );
            echo "<table class=\"traders\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td>";
            if ( $pn != "" )
            {
                echo "<a href=\"profile.php?uid=";
                echo $qt['player_id'];
                echo "\">";
                echo $pn;
                echo "</a>";
            }
            else
            {
                echo "<s";
                echo "pan class=\"none\">[?]</span>";
            }
            echo "</td>\r\n\t\t\t<td>";
            if ( $vn != "" )
            {
                echo "<a href=\"village3.php?id=";
                echo $qt['village_id'];
                echo "\"><p class=\"custDir\">";
                echo LANGUI_CUSTBU_MKT_p1_t13;
                echo " ";
                echo $vn;
                echo "</p></a>";
            }
            else
            {
                echo "<p class=\"custDir\">";
                echo LANGUI_CUSTBU_MKT_p1_t13;
                echo " ";
                echo "<s";
                echo "pan class=\"none\">[?]</span></p>";
            }
            echo "</td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<th>";
            echo LANGUI_CUSTBU_MKT_p1_t14;
            echo "</th>\r\n\t\t\t<td>\r\n\t\t\t\t<div class=\"in\">";
            echo "<s";
            echo "pan id=\"timer1\">";
            echo ( $qt['remainingSeconds'] );
            echo "</span> ";
            echo LANGUI_CUSTBU_MKT_p1_t15;
            echo "</div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr class=\"res\">\r\n\t\t\t<th>";
            echo LANGUI_CUSTBU_MKT_p1_t16;
            echo "</th>\r\n\t\t\t<td>\r\n\t\t\t\t<img class=\"r1\" src=\"assets/x.gif\" alt=\"";
            echo item_title_1;
            echo "\" title=\"";
            echo item_title_1;
            echo "\">";
            echo $mResources[0];
            echo " | \r\n\t\t\t\t<img class=\"r2\" src=\"assets/x.gif\" alt=\"";
            echo item_title_2;
            echo "\" title=\"";
            echo item_title_2;
            echo "\">";
            echo $mResources[1];
            echo " | \r\n\t\t\t\t<img class=\"r3\" src=\"assets/x.gif\" alt=\"";
            echo item_title_3;
            echo "\" title=\"";
            echo item_title_3;
            echo "\">";
            echo $mResources[2];
            echo " | \r\n\t\t\t\t<img class=\"r4\" src=\"assets/x.gif\" alt=\"";
            echo item_title_4;
            echo "\" title=\"";
            echo item_title_4;
            echo "\">";
            echo $mResources[3];
            echo "\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
        }
        $m->dispose( );
    }
    echo "\r\n";
    $akey = "merchant_travel";
    if ( isset( $this->queueModel->tasksInQueue[$akey] ) && 0 < sizeof( $this->queueModel->tasksInQueue[$akey] ) )
    {
        $qts = $this->queueModel->tasksInQueue[$akey];
        echo "<h4>";
        echo LANGUI_CUSTBU_MKT_p1_t17;
        echo "</h4>\r\n";
        $m = new BuildModel( );
        foreach ( $qts as $qt )
        {
            $resStr = explode( "|", $qt['proc_params'][1] );
            $merchantNum = explode( "|", $qt['proc_params'][0] );
            $mResources = explode( " ", $resStr );
            $vn2 = $m->getVillageName( $qt['to_village_id'] );
            echo "<table class=\"traders\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td><a href=\"profile.php?uid=";
            echo $qt['player_id'];
            echo "\">";
            echo $this->data['name'];
            echo "</a></td>\r\n\t\t\t<td>";
            if ( $vn2 != "" )
            {
                echo "<a href=\"village3.php?id=";
                echo $qt['to_village_id'];
                echo "\"><p class=\"custDir\">";
                if ( $qt['merchantBack'] )
                {
                    echo LANGUI_CUSTBU_MKT_p1_t18;
                }
                else
                {
                    echo LANGUI_CUSTBU_MKT_p1_t19;
                }
                echo " ";
                echo $vn2;
                echo "</p></a>";
            }
            else
            {
                echo "<p class=\"custDir\">";
                if ( $qt['merchantBack'] )
                {
                    echo LANGUI_CUSTBU_MKT_p1_t18;
                }
                else
                {
                    echo LANGUI_CUSTBU_MKT_p1_t19;
                }
                echo " ";
                echo "<s";
                echo "pan class=\"none\">[?]</span></p>";
            }
            echo "</td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<th>";
            echo LANGUI_CUSTBU_MKT_p1_t14;
            echo "</th>\r\n\t\t\t<td>\r\n\t\t\t\t<div class=\"in\">";
            echo "<s";
            echo "pan id=\"timer1\">";
            echo ( $qt['remainingSeconds'] );
            echo "</span> ";
            echo LANGUI_CUSTBU_MKT_p1_t15;
            echo "</div>\r\n\t\t\t\t<div class=\"at\">";
            echo LANGUI_CUSTBU_MKT_p1_t20;
            echo ": ";
            echo $merchantNum;
            echo "</div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr class=\"res\">\r\n\t\t\t<th>";
            echo LANGUI_CUSTBU_MKT_p1_t16;
            echo "</th>\r\n\t\t\t<td>";
            if ( $qt['merchantBack'] )
            {
                echo "<s";
                echo "pan class=\"none\">";
            }
            echo "\t\t\t\t<img class=\"r1\" src=\"assets/x.gif\" alt=\"";
            echo item_title_1;
            echo "\" title=\"";
            echo item_title_1;
            echo "\">";
            echo $mResources[0];
            echo " | \r\n\t\t\t\t<img class=\"r2\" src=\"assets/x.gif\" alt=\"";
            echo item_title_2;
            echo "\" title=\"";
            echo item_title_2;
            echo "\">";
            echo $mResources[1];
            echo " | \r\n\t\t\t\t<img class=\"r3\" src=\"assets/x.gif\" alt=\"";
            echo item_title_3;
            echo "\" title=\"";
            echo item_title_3;
            echo "\">";
            echo $mResources[2];
            echo " | \r\n\t\t\t\t<img class=\"r4\" src=\"assets/x.gif\" alt=\"";
            echo item_title_4;
            echo "\" title=\"";
            echo item_title_4;
            echo "\">";
            echo $mResources[3];
            echo "\t\t\t";
            if ( $qt['merchantBack'] )
            {
                echo "</span>";
            }
            echo "</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
        }
        $m->dispose( );
    }
}
else if ( $this->selectedTabIndex == 1 )
{
    if ( $this->merchantProperty['showOfferList'] )
    {
        echo "<table id=\"range\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr><th colspan=\"5\"><a name=\"h2\"></a>";
        echo LANGUI_CUSTBU_MKT_p2_t1;
        echo "</th></tr>\r\n\t\t<tr>\r\n\t\t\t<td>";
        echo LANGUI_CUSTBU_MKT_p2_t2;
        echo "</td>\r\n\t\t\t<td>";
        echo LANGUI_CUSTBU_MKT_p2_t3;
        echo "</td>\r\n\t\t\t<td>";
        echo LANGUI_CUSTBU_MKT_p2_t4;
        echo "</td>\r\n\t\t\t<td>";
        echo text_period_lang;
        echo "</td>\r\n\t\t\t<td>";
        echo LANGUI_CUSTBU_MKT_p2_t5;
        echo "</td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t";
        $_c = 0;
        while ( $this->merchantProperty['all_offers']->next( ) )
        {
            ++$_c;
            $aid = 0;
            if ( $this->merchantProperty['all_offers']->row['alliance_only'] )
            {
                if ( 0 < intval( $this->data['alliance_id'] ) )
                {
                    $aid = $m->getPlayerAllianceId( $this->merchantProperty['all_offers']->row['player_id'] );
                    if ( intval( $this->data['alliance_id'] ) != $aid )
                    {
                        continue;
                    }
                }
                continue;
            }
            $res2 = explode( "|", $this->merchantProperty['all_offers']->row['offer'][1] );
            $res1 = explode( "|", $this->merchantProperty['all_offers']->row['offer'][0] );
            $resArr1 = explode( " ", $res1 );
            $needResources = array( "1" => $resArr1[0], "2" => $resArr1[1], "3" => $resArr1[2], "4" => $resArr1[3] );
            $res1_item_id = 0;
            $res1_value = 0;
            $i = 0;
            $_c = sizeof( $resArr1 );
            while ( $i < $_c )
            {
                if ( 0 < $resArr1[$i] )
                {
                    $res1_item_id = $i + 1;
                    $res1_value = $resArr1[$i];
                    break;
                }
                ++$i;
            }
            $resArr1 = explode( " ", $res2 );
            $giveResources = array( "1" => $resArr1[0], "2" => $resArr1[1], "3" => $resArr1[2], "4" => $resArr1[3] );
            $res2_item_id = 0;
            $res2_value = 0;
            $i = 0;
            $_c = sizeof( $resArr1 );
            while ( $i < $_c )
            {
                if ( 0 < $resArr1[$i] )
                {
                    $res2_item_id = $i + 1;
                    $res2_value = $resArr1[$i];
                    break;
                }
                ++$i;
            }
            echo "\t\t<tr>\r\n\t\t\t<td class=\"val\"><img src=\"assets/x.gif\" class=\"r";
            echo $res1_item_id;
            echo "\" alt=\"";
            echo constant( "item_title_".$res1_item_id );
            echo "\" title=\"";
            echo constant( "item_title_".$res1_item_id );
            echo "\">";
            echo $res1_value;
            echo "</td>\r\n\t\t\t<td class=\"val\"><img src=\"assets/x.gif\" class=\"r";
            echo $res2_item_id;
            echo "\" alt=\"";
            echo constant( "item_title_".$res2_item_id );
            echo "\" title=\"";
            echo constant( "item_title_".$res2_item_id );
            echo "\">";
            echo $res2_value;
            echo "</td>\r\n\t\t\t<td class=\"pla\"><a href=\"village3.php?id=";
            echo $this->merchantProperty['all_offers']->row['village_id'];
            echo "\">";
            echo $this->merchantProperty['all_offers']->row['player_name'];
            echo "</a></td>\r\n\t\t\t<td class=\"dur\">";
            echo /*->intval(*/ intval( $this->merchantProperty['all_offers']->row['timeInSeconds'] /*)*/ );
            echo "</td>\r\n\t\t\t<td class=\"act none\">\r\n\t\t\t";
            $acceptResult = $this->_canAcceptOffer( $needResources, $giveResources, $this->merchantProperty['all_offers']->row['village_id'], $this->merchantProperty['all_offers']->row['alliance_only'], $aid, $this->merchantProperty['all_offers']->row['max_time'], $this->merchantProperty['all_offers']->row['timeInSeconds'] / 3600 * $this->merchantProperty['all_offers']->row['merchants_speed'] );
            switch ( $acceptResult )
            {
                case 1 :
                    echo LANGUI_CUSTBU_MKT_p2_t6;
                    break;
                case 2 :
                    echo LANGUI_CUSTBU_MKT_p2_t7;
                    break;
                case 5 :
                    printf( "<a href=\"build.php?id=%s&t=%s&oid=%s\">".LANGUI_CUSTBU_MKT_p2_t8."</a>", $this->buildingIndex, $this->selectedTabIndex, $this->merchantProperty['all_offers']->row['id'] );
            }
            echo "\t\t\t</td>\r\n\t\t</tr>\r\n\t\t";
        }
       // $m->dispose( );
        echo "\t\t";
        if ( $_c == 0 )
        {
            echo "\t\t<tr><td colspan=\"5\" class=\"none\">";
            echo LANGUI_CUSTBU_MKT_p2_t9;
            echo "</td></tr>\r\n\t\t";
        }
        echo "\t</tbody>\r\n\t<tfoot>\r\n\t\t<tr><td colspan=\"5\" class=\"none\">";
        echo $this->getPreviousLink( );
        echo " ";
        echo $this->getNextLink( );
        echo "</td></tr>\r\n\t</tfoot>\r\n</table>\r\n";
    }
    else
    {
        echo "<table id=\"summary\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr><th colspan=\"2\">";
        echo LANGUI_CUSTBU_MKT_p2_t10;
        echo "</th></tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td colspan=\"2\" class=\"desc\">";
        echo LANGUI_CUSTBU_MKT_p2_t11;
        echo " <a href=\"profile.php?uid=";
        echo $this->merchantProperty['offerProperty']['player_id'];
        echo "\">";
        echo $this->merchantProperty['offerProperty']['player_name'];
        echo "</a></td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"val\"><img class=\"r";
        echo $this->merchantProperty['offerProperty']['res1_item_id'];
        echo "\" src=\"assets/x.gif\" alt=\"";
        echo constant( "item_title_".$this->merchantProperty['offerProperty']['res1_item_id'] );
        echo "\" title=\"";
        echo constant( "item_title_".$this->merchantProperty['offerProperty']['res1_item_id'] );
        echo "\"> ";
        echo $this->merchantProperty['offerProperty']['res1_value'];
        echo "</td>\r\n\t\t\t<td class=\"text\">";
        echo LANGUI_CUSTBU_MKT_p2_t12;
        echo "</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"val\"><img class=\"r";
        echo $this->merchantProperty['offerProperty']['res2_item_id'];
        echo "\" src=\"assets/x.gif\" alt=\"";
        echo constant( "item_title_".$this->merchantProperty['offerProperty']['res2_item_id'] );
        echo "\" title=\"";
        echo constant( "item_title_".$this->merchantProperty['offerProperty']['res2_item_id'] );
        echo "\"> ";
        echo $this->merchantProperty['offerProperty']['res2_value'];
        echo "</td>\r\n\t\t\t<td class=\"text\">";
        echo LANGUI_CUSTBU_MKT_p2_t13;
        echo ".</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n<br/><br/>\r\n";
    }
}
else
{
    if ( $this->selectedTabIndex == 2 )
    {
        echo "<div id=\"contract\">\r\n<form method=\"post\" name=\"snd\" action=\"build.php?id=";
        echo $this->buildingIndex;
        echo "&t=";
        echo $this->selectedTabIndex;
        echo "\" class=\"sell_resources\" >\r\n<table id=\"sell\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<tbody>\r\n\t<tr>\r\n\t\t<th>";
        echo LANGUI_CUSTBU_MKT_p3_t1;
        echo "</th>\r\n\t\t<td class=\"val\"><input class=\"text\" tabindex=\"1\" name=\"m1\" value=\"\" maxlength=\"6\"></td>\r\n\t\t<td class=\"res\">\r\n\t\t\t";
        echo "<s";
        echo "elect name=\"rid1\" tabindex=\"2\" class=\"dropdown\">\r\n\t\t\t\t<option value=\"1\" selected=\"selected\">";
        echo item_title_1;
        echo "</option>\r\n\t\t\t\t<option value=\"2\">";
        echo item_title_2;
        echo "</option>\r\n\t\t\t\t<option value=\"3\">";
        echo item_title_3;
        echo "</option>\r\n\t\t\t\t<option value=\"4\">";
        echo item_title_4;
        echo "</option>\r\n\t\t\t</select>\r\n\t\t</td>\r\n\t\t<td class=\"tra\"><input class=\"check\" type=\"checkbox\" tabindex=\"5\" name=\"d1\" value=\"1\"> ";
        echo LANGUI_CUSTBU_MKT_p3_t2;
        echo " : <input class=\"text\" tabindex=\"6\" name=\"d2\" value=\"2\" maxlength=\"2\"> ";
        echo time_hour_lang;
        echo "</td>\r\n\t</tr>\r\n\t<tr>\r\n\t\t<th>";
        echo LANGUI_CUSTBU_MKT_p3_t3;
        echo "</th>\r\n\t\t<td class=\"val\"><input class=\"text\" tabindex=\"3\" name=\"m2\" value=\"\" maxlength=\"6\"></td>\r\n\t\t<td class=\"res\">\r\n\t\t\t";
        echo "<s";
        echo "elect name=\"rid2\" tabindex=\"4\" class=\"dropdown\">\r\n\t\t\t\t<option value=\"1\">";
        echo item_title_1;
        echo "</option>\r\n\t\t\t\t<option value=\"2\" selected=\"selected\">";
        echo item_title_2;
        echo "</option>\r\n\t\t\t\t<option value=\"3\">";
        echo item_title_3;
        echo "</option>\r\n\t\t\t\t<option value=\"4\">";
        echo item_title_4;
        echo "</option>\r\n\t\t\t</select>\r\n\t\t</td>\r\n\t\t<td class=\"al\"><input class=\"check\" type=\"checkbox\" tabindex=\"7\" name=\"ally\" value=\"1\"> ";
        echo LANGUI_CUSTBU_MKT_p3_t4;
        echo "</td>\r\n\t</tr>\r\n\t</tbody>\r\n</table>\r\n\r\n<p>";
        echo LANGUI_CUSTBU_MKT_p1_t1;
        echo ": ";
        echo $this->merchantProperty['exits_num'];
        echo "/";
        echo $this->merchantProperty['total_num'];
        echo "</p>\r\n";
        if ( $this->merchantProperty['showError'] )
        {
            echo "<p class=\"error2\">\r\n";
            if ( $this->merchantProperty['showError3'] )
            {
                echo LANGUI_CUSTBU_MKT_p3_t5;
            }
            else if ( $this->merchantProperty['showError2'] || intval( $_POST['rid1'] ) == intval( $_POST['rid2'] ) )
            {
                echo LANGUI_CUSTBU_MKT_p3_t6;
            }
            else if ( !$this->merchantProperty['available_res'] )
            {
                echo LANGUI_CUSTBU_MKT_p2_t6;
            }
            else if ( $this->merchantProperty['vRow_merchant_num'] == 0 )
            {
                echo LANGUI_CUSTBU_MKT_p3_t7;
            }
            else if ( $this->merchantProperty['exits_num'] < $this->merchantProperty['vRow_merchant_num'] )
            {
                echo LANGUI_CUSTBU_MKT_p2_t7;
            }
            echo "</p>\r\n";
        }
        echo "\r\n<p><input type=\"image\" tabindex=\"8\" value=\"ok\" name=\"s1\" id=\"btn_ok\" class=\"dynamic_img\" src=\"assets/x.gif\" alt=\"";
        echo LANGUI_CUSTBU_MKT_p3_t8;
        echo "\"></p>\r\n</form>\r\n</div>\r\n\r\n";
        if ( 0 < $this->data['offer_merchants_count'] )
        {
            echo "<table id=\"sell_overview\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th colspan=\"6\">";
            echo LANGUI_CUSTBU_MKT_p3_t9;
            echo "</th>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>&nbsp;</td>\r\n\t\t\t<td>";
            echo LANGUI_CUSTBU_MKT_p3_t1;
            echo "</td>\r\n\t\t\t<td>";
            echo LANGUI_CUSTBU_MKT_p3_t3;
            echo "</td>\r\n\t\t\t<td>";
            echo LANGUI_CUSTBU_MKT_p1_t1;
            echo "</td>\r\n\t\t\t<td>";
            echo LANGUI_CUSTBU_MKT_p3_t10;
            echo "</td>\r\n\t\t\t<td>";
            echo text_period_lang;
            echo "</td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t";
            while ( $this->merchantProperty['offers']->next( ) )
            {
                $res2 = explode( "|", $this->merchantProperty['offers']->row['offer'][1] );
                $res1 = explode( "|", $this->merchantProperty['offers']->row['offer'][0] );
                $resArr1 = explode( " ", $res1 );
                $res1_item_id = 0;
                $res1_value = 0;
                $i = 0;
                $_c = sizeof( $resArr1 );
                while ( $i < $_c )
                {
                    if ( 0 < $resArr1[$i] )
                    {
                        $res1_item_id = $i + 1;
                        $res1_value = $resArr1[$i];
                        break;
                    }
                    ++$i;
                }
                $resArr1 = explode( " ", $res2 );
                $res2_item_id = 0;
                $res2_value = 0;
                $i = 0;
                $_c = sizeof( $resArr1 );
                while ( $i < $_c )
                {
                    if ( 0 < $resArr1[$i] )
                    {
                        $res2_item_id = $i + 1;
                        $res2_value = $resArr1[$i];
                        break;
                    }
                    ++$i;
                }
                echo "\t\t<tr>\r\n\t\t\t<td class=\"abo\"><a href=\"build.php?id=";
                echo $this->buildingIndex;
                echo "&t=";
                echo $this->selectedTabIndex;
                echo "&d=";
                echo $this->merchantProperty['offers']->row['id'];
                echo "\"><img class=\"del\" src=\"assets/x.gif\" alt=\"";
                echo LANGUI_CUSTBU_MKT_p3_t11;
                echo "\" title=\"";
                echo LANGUI_CUSTBU_MKT_p3_t11;
                echo "\"></a></td>\r\n\t\t\t<td class=\"val\"><img src=\"assets/x.gif\" class=\"r";
                echo $res1_item_id;
                echo "\" alt=\"";
                echo constant( "item_title_".$res1_item_id );
                echo "\" title=\"";
                echo constant( "item_title_".$res1_item_id );
                echo "\">";
                echo $res1_value;
                echo "</td>\r\n\t\t\t<td class=\"val\"><img src=\"assets/x.gif\" class=\"r";
                echo $res2_item_id;
                echo "\" alt=\"";
                echo constant( "item_title_".$res2_item_id );
                echo "\" title=\"";
                echo constant( "item_title_".$res2_item_id );
                echo "\">";
                echo $res2_value;
                echo "</td>\r\n\t\t\t<td class=\"tra\">";
                echo $this->merchantProperty['offers']->row['merchants_num'];
                echo "</td>\r\n\t\t\t<td class=\"al\">";
                echo $this->merchantProperty['offers']->row['alliance_only'] ? LANGUI_CUSTBU_MKT_p3_t13 : LANGUI_CUSTBU_MKT_p3_t12;
                echo "</td>\r\n\t\t\t<td class=\"dur\">";
                echo 0 < $this->merchantProperty['offers']->row['max_time'] ? $this->merchantProperty['offers']->row['max_time'].( " ".LANGUI_CUSTBU_MKT_p1_t15 ) : "-";
                echo "</td>\r\n\t\t</tr>\r\n\t\t";
            }
            echo "\t</tbody>\r\n</table>\r\n";
        }
    }
    else
    {
        if ( $this->selectedTabIndex == 3 )
        {
            echo "<s";
            echo "cript language=\"JavaScript\">\r\nvar overall;\r\nfunction calculateRes() {\r\n\tresObj=document.getElementsByName(\"m2\");\r\n\toverall=0;\r\n\tfor (i=0; i<resObj.length; i++) {\r\n\t\tvar tmp=\"\";\r\n\t\tfor (j=0; j<resObj[i].value.length; j++)\r\n\t\t\tif ((resObj[i].value.charAt(j)>=\"0\") && (resObj[i].value.charAt(j)<=\"9\")) tmp=tmp+resObj[i].value.charAt(j);\r\n\t\tresObj[i].value=tmp;\r\n\t\tif (tmp==\"\") tmp=\"0\";\r\n\t\tnewRes=Math.round";
            echo "(parseInt(tmp)*summe/100);\r\n\t\tif (((i<3) && (newRes<=max123)) || ((i==3) && (newRes<=max4)))\r\n\t\t\tnewHTML=newRes;\r\n\t\telse\r\n\t\t\tnewHTML=\"";
            echo "<s";
            echo "pan class='corr'>\"+newRes+\"</span>\";\r\n\t\tdocument.getElementById(\"new\"+i).innerHTML=newHTML;\r\n\t\toverall+=parseInt(tmp);\r\n\t}\r\n\tdocument.getElementById(\"overall\").innerHTML=overall+\"%\";\r\n}\r\nfunction normalize() {\r\n\tcalculateRes();\r\n\tresObj=document.getElementsByName(\"m2\");\r\n\tfor (i=0; i<resObj.length; i++) {\r\n\t\ttmp=parseInt(resObj[i].value);\r\n\t\ttmp=tmp*(100/overall);\r\n\t\tresObj[i].value=Math.round(tmp);";
            echo "\r\n\t}\r\n\tcalculateRes();\r\n}\r\n\r\n\r\nfunction calculateRest() {\r\n\tresObj=document.getElementsByName(\"m2[]\");\r\n\toverall=0;\r\n\tfor (i=0; i<resObj.length; i++) {\r\n\t\tvar tmp=\"\";\r\n\t\tfor (j=0; j<resObj[i].value.length; j++)\r\n\t\t\tif ((resObj[i].value.charAt(j)>=\"0\") && (resObj[i].value.charAt(j)<=\"9\")) tmp=tmp+resObj[i].value.charAt(j);\r\n\t\tif (tmp==\"\") {\r\n\t\t\ttmp=\"0\";\r\n\t\t\tnewRes=0;\r\n\t\t\tresObj[i].value=\"\";\r\n\t\t} else ";
            echo "{\r\n\t\t\tnewRes=parseInt(tmp);\r\n\t\t\tif ((i<3) && (newRes>max123)) newRes=max123;\r\n\t\t\tif ((i==3) && (newRes>max4)) newRes=max4;\r\n\t\t\tresObj[i].value=newRes;\r\n\t\t}\r\n\t\tdif=newRes-parseInt(document.getElementById(\"org\"+i).innerHTML);\r\n\t\tnewHTML=dif;\r\n\t\tif (dif>0) newHTML=\"+\"+dif;\r\n\t\tdocument.getElementById(\"diff\"+i).innerHTML=newHTML;\r\n\t\toverall+=newRes;\r\n\t}\r\n\tdocument.getElementById(\"newsum\").innerHTML=over";
            echo "all;\r\n\trest=parseInt(document.getElementById(\"org4\").innerHTML)-overall;\r\n\tdocument.getElementById(\"remain\").innerHTML=rest;\r\n\ttestSum();\r\n}\r\n\r\nfunction fillup(nr) {\r\n\tresObj=document.getElementsByName(\"m2[]\");\r\n\tif (nr<3) {\r\n\t\tresObj[nr].value=max123;\r\n\t} else {\r\n\t\tresObj[nr].value=max4;\r\n\t}\r\n\tcalculateRest();\r\n}\r\nfunction portionOut() {\r\n\trestRes=parseInt(document.getElementById(\"remain\").innerHT";
            echo "ML);\r\n\trest=restRes;\r\n\tresObj=document.getElementsByName(\"m2[]\");\r\n\tnullCount=0;\r\n\tnotNullCount=0;\r\n\t// Z�hlen\r\n\tfor (j=0; j<resObj.length; j++) {\r\n\t\tif ((restRes>0) && (resObj[j].value==\"\")) nullCount++;\r\n\t\tif ((restRes<0) && (resObj[j].value!=\"\")) notNullCount++;\r\n\t}\r\n\t// Verteilen\r\n\tnullCount2=0;\r\n\tif (restRes>0) {\r\n\t\t// In allen Feldern schon Zahlen?\r\n\t\tif (nullCount==0) {\r\n\t\t\tfor (i=0; i<resOb";
            echo "j.length; i++) {\r\n\t\t\t\tfree=max123-parseInt(resObj[i].value);\r\n\t\t\t\tresObj[i].value=(parseInt(resObj[i].value)+Math.round(rest/(4-i)));\r\n\t\t\t\trest=rest-Math.min(free,Math.round(rest/(4-i)));\r\n\t\t\t\tif ((i<3) && (parseInt(resObj[i].value)<max123)) nullCount2++;\r\n\t\t\t}\r\n\t\t} else {\r\n\t\t\tfor (i=0; i<resObj.length; i++) {\r\n\t\t\t\tif (resObj[i].value==\"\") {\r\n\t\t\t\t\tresObj[i].value=Math.round(rest/nullCount);\r\n\t\t\t\t\tres";
            echo "t=rest-Math.round(rest/nullCount);\r\n\t\t\t\t\tnullCount--;\r\n\t\t\t\t}\r\n\t\t\t\tif ((i<3) && (parseInt(resObj[i].value)<max123)) nullCount2++;\r\n\t\t\t}\r\n\t\t}\r\n\t} else {\r\n\t\tfor (j=0; j<resObj.length; j++) {\r\n\t\t\tif (parseInt(resObj[j].value)>0) {\r\n\t\t\t\tresObj[j].value=(parseInt(resObj[j].value)+Math.round(rest/notNullCount));\r\n\t\t\t\trest=rest-Math.round(rest/notNullCount);\r\n\t\t\t\tnotNullCount--;\r\n\t\t\t}\r\n\t\t}\r\n\t}\r\n\tcalculateRes";
            echo "t();\r\n\t// Noch irgendein Rest?\r\n\tif (rest>0) {\r\n\t\tif (max123>max4) {\r\n\t\t\tfor (j=0; j<3; j++) {\r\n\t\t\t\tif (parseInt(resObj[j].value)<max123) {\r\n\t\t\t\t\tresObj[j].value=(parseInt(resObj[j].value)+Math.round(rest/nullCount2));\r\n\t\t\t\t\trest=rest-Math.round(rest/nullCount2);\r\n\t\t\t\t\tnullCount2--;\r\n\t\t\t\t}\r\n\t\t\t}\r\n\t\t} else {\r\n\t\t\tresObj[3].value=(parseInt(resObj[3].value)+rest);\r\n\t\t}\r\n\t}\r\n\tcalculateRest();\r\n}\r\n\r\nfunct";
            echo "ion testSum() {\r\n\tif (document.getElementById(\"remain\").innerHTML!=0) {\r\n\t\tdocument.getElementById(\"submitText\").innerHTML=\"<a href='javascript:portionOut();'>";
            echo LANGUI_CUSTBU_MKT_p4_t1;
            echo "</a>\";\r\n\t\tdocument.getElementById(\"submitText\").style.display=\"block\";\r\n\t\tdocument.getElementById(\"submitButton\").style.display=\"none\";\r\n\t} else {\r\n\t\tdocument.getElementById(\"submitText\").innerHTML=\"\";\r\n\t\tdocument.getElementById(\"submitText\").style.display=\"none\";\r\n\t\tdocument.getElementById(\"submitButton\").style.display=\"block\";\r\n\t}\r\n}\r\n</script>\r\n";
            echo "<s";
            echo "cript language=\"JavaScript\">var summe=";
            echo $this->resources[1]['current_value'] + $this->resources[2]['current_value'] + $this->resources[3]['current_value'] + $this->resources[4]['current_value'];
            echo ";var max123=";
            echo $this->resources[1]['store_max_limit'];
            echo ";var max4=";
            echo $this->resources[4]['store_max_limit'];
            echo ";</script>\r\n<form method=\"post\" id=\"_fm1\" name=\"snd\" action=\"build.php?id=";
            echo $this->buildingIndex;
            echo "&t=";
            echo $this->selectedTabIndex;
            if ( isset( $_GET['rid'] ) )
            {
                echo "&rid=".intval( $_GET['rid'] );
            }
            echo "\">\r\n<table id=\"npc\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr><th colspan=\"5\">";
            echo LANGUI_CUSTBU_MKT_p4;
            echo "</th></tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"all\"><a href=\"javascript:fillup(0);\"><img class=\"r1\" src=\"assets/x.gif\" alt=\"";
            echo item_title_1;
            echo "\" title=\"";
            echo item_title_1;
            echo "\"></a>";
            echo "<s";
            echo "pan id=\"org0\">";
            echo $this->resources[1]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"all\"><a href=\"javascript:fillup(1);\"><img class=\"r2\" src=\"assets/x.gif\" alt=\"";
            echo item_title_2;
            echo "\" title=\"";
            echo item_title_2;
            echo "\"></a>";
            echo "<s";
            echo "pan id=\"org1\">";
            echo $this->resources[2]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"all\"><a href=\"javascript:fillup(2);\"><img class=\"r3\" src=\"assets/x.gif\" alt=\"";
            echo item_title_3;
            echo "\" title=\"";
            echo item_title_3;
            echo "\"></a>";
            echo "<s";
            echo "pan id=\"org2\">";
            echo $this->resources[3]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"all\"><a href=\"javascript:fillup(3);\"><img class=\"r4\" src=\"assets/x.gif\" alt=\"";
            echo item_title_4;
            echo "\" title=\"";
            echo item_title_4;
            echo "\"></a>";
            echo "<s";
            echo "pan id=\"org3\">";
            echo $this->resources[4]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"sum\">";
            echo LANGUI_CUSTBU_MKT_p4_t2;
            echo ":&nbsp;";
            echo "<s";
            echo "pan id=\"org4\">";
            echo $this->resources[1]['current_value'] + $this->resources[2]['current_value'] + $this->resources[3]['current_value'] + $this->resources[4]['current_value'];
            echo "</span></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td class=\"sel\">\r\n\t\t\t\t<input class=\"text\" onkeyup=\"calculateRest();\" name=\"m2[]\" size=\"5\" maxlength=\"7\" value=\"";
            echo isset( $_GET['r1'] ) ? intval( $_GET['r1'] ) : "";
            echo "\">\r\n\t\t\t\t<input type=\"hidden\" name=\"m1[]\" value=\"";
            echo $this->resources[1]['current_value'];
            echo "\">\r\n\t\t\t</td>\r\n\t\t\t<td class=\"sel\">\r\n\t\t\t\t<input class=\"text\" onkeyup=\"calculateRest();\" name=\"m2[]\" size=\"5\" maxlength=\"7\" value=\"";
            echo isset( $_GET['r2'] ) ? intval( $_GET['r2'] ) : "";
            echo "\">\r\n\t\t\t\t<input type=\"hidden\" name=\"m1[]\" value=\"";
            echo $this->resources[2]['current_value'];
            echo "\">\r\n\t\t\t</td>\r\n\t\t\t<td class=\"sel\">\r\n\t\t\t\t<input class=\"text\" onkeyup=\"calculateRest();\" name=\"m2[]\" size=\"5\" maxlength=\"7\" value=\"";
            echo isset( $_GET['r3'] ) ? intval( $_GET['r3'] ) : "";
            echo "\">\r\n\t\t\t\t<input type=\"hidden\" name=\"m1[]\" value=\"";
            echo $this->resources[3]['current_value'];
            echo "\">\r\n\t\t\t</td>\r\n\t\t\t<td class=\"sel\">\r\n\t\t\t\t<input class=\"text\" onkeyup=\"calculateRest();\" name=\"m2[]\" size=\"5\" maxlength=\"7\" value=\"";
            echo isset( $_GET['r4'] ) ? intval( $_GET['r4'] ) : "";
            echo "\">\r\n\t\t\t\t<input type=\"hidden\" name=\"m1[]\" value=\"";
            echo $this->resources[4]['current_value'];
            echo "\">\r\n\t\t\t</td>\r\n\t\t\t<td class=\"sum\">";
            echo LANGUI_CUSTBU_MKT_p4_t2;
            echo ":&nbsp;";
            echo "<s";
            echo "pan id=\"newsum\">0</span></td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td class=\"rem\">";
            echo "<s";
            echo "pan id=\"diff0\">-";
            echo $this->resources[1]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"rem\">";
            echo "<s";
            echo "pan id=\"diff1\">-";
            echo $this->resources[2]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"rem\">";
            echo "<s";
            echo "pan id=\"diff2\">-";
            echo $this->resources[3]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"rem\">";
            echo "<s";
            echo "pan id=\"diff3\">-";
            echo $this->resources[4]['current_value'];
            echo "</span></td>\r\n\t\t\t<td class=\"sum\">";
            echo LANGUI_CUSTBU_MKT_p4_t3;
            echo ":&nbsp;";
            echo "<s";
            echo "pan id=\"remain\">";
            echo $this->resources[1]['current_value'] + $this->resources[2]['current_value'] + $this->resources[3]['current_value'] + $this->resources[4]['current_value'];
            echo "</span></td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n<p id=\"submitText\" style=\"display: block; \"><a href=\"javascript:portionOut();\">";
            echo LANGUI_CUSTBU_MKT_p4_t1;
            echo "</a></p>\r\n";
            if ( $this->data['gold_num'] < $this->gameMetadata['plusTable'][6]['cost'] )
            {
                echo "<p id=\"submitButton\" style=\"display: none; \"><a href=\"plus.php?t=2\">";
                echo "<s";
                echo "pan class=\"none\">";
                echo LANGUI_CUSTBU_MKT_p4_t4;
                echo "</span></a></p>\r\n";
            }
            else
            {
                echo "<p id=\"submitButton\" style=\"display: none; \"><a href=\"#\" onclick=\"_('_fm1').submit();return false;\">";
                echo LANGUI_CUSTBU_MKT_p4_t5;
                echo "</a> (";
                echo LANGUI_CUSTBU_MKT_p4_t6;
                echo " ";
                echo $this->gameMetadata['plusTable'][6]['cost'];
                echo " ";
                echo LANGUI_CUSTBU_MKT_p4_t8;
                echo ")</p>\r\n";
            }
            echo "</form>\r\n\r\n";
            echo "<s";
            echo "cript>calculateRest();testSum();</script>\r\n<p>";
            echo LANGUI_CUSTBU_MKT_p4_t9;
            echo ".</p>\r\n";
            if ( isset( $_GET['rid'] ) )
            {
                $rid = intval( $_GET['rid'] );
                $prop = $this->getBuildingProperties( $rid );
                $btext = LANGUI_CUSTBU_MKT_p4_t7;
                if ( !$prop['emptyPlace'] )
                {
                    $btext .= " ".text_to_lang." ".constant( "item_".$prop['building']['item_id'] );
                }
                echo "<p><a href=\"build.php?id=";
                echo $rid;
                echo "\" title=\"";
                echo $btext;
                echo "\">";
                echo $btext;
                echo "</a></p>\r\n";
            }
            echo "<br/><br/>\r\n";
        }
    }
}
?>
