<?php
require_once( LANG_UI_PATH."custbuilds.php" );
echo "<p></p><p></p>\r\n\r\n<div id=\"textmenu\">\r\n<a href=\"build.php?id=";
echo $this->buildingIndex;
echo "\" class=\"selected\">";
echo LANGUI_CUSTBU_RP_p1;
echo "</a>\r\n | <a href=\"v2v.php\">";
echo LANGUI_CUSTBU_RP_p2;
echo "</a>\r\n | <a href=\"warsm.php\">";
echo LANGUI_CUSTBU_RP_p3;
echo "</a>\r\n</div>\r\n\r\n\r\n";
if ( 0 < sizeof( $this->rallyPointProperty['war_to_village'] ) ){
	$m = new BuildModel( );
	echo "<h4>".LANGUI_CUSTBU_RP_t1."</h4>\r\n";
	foreach ( $this->rallyPointProperty['war_to_village'] as $taskTable ){
		$procType = $taskTable['proc_type'];
		$resources = NULL;
		$action1 = "";
		switch ( $procType ){
			case QS_WAR_REINFORCE :
                $_arr = explode( "|", $taskTable['proc_params'] );
                $troopsBack = $_arr[sizeof( $_arr ) - 1] == 1;
                $action1 = $troopsBack ? LANGUI_CUSTBU_RP_t2 : LANGUI_CUSTBU_RP_t10;
                if ( $troopsBack && trim( $_arr[4] ) != "" )
                {
                    $resources = explode( " ", $_arr[4] );
                }
                break;
            case QS_WAR_ATTACK :
                $action1 = LANGUI_CUSTBU_RP_t3;
                break;
            case QS_WAR_ATTACK_PLUNDER :
                $action1 = LANGUI_CUSTBU_RP_t4;
        }
        $action1 .= " ".$this->data['village_name'];
        $action2 = "";
        $actionRow = $m->getVillageData2ById( intval( $taskTable['village_id'] ) );
        if ( $actionRow == NULL || intval( $actionRow['player_id'] ) != intval( $taskTable['player_id'] ) )
        {
            $action2 .= "<span class=\"none\">[?]</span>";
        }
        else
        {
        }
        $_arr = explode( "|", $taskTable['proc_params'] );
        $troopsStr = explode( ",", $_arr[0] );
        $hasHero = FALSE;
        $troops = array( );
        foreach ( $troopsStr as $s )
        {
            $tnum = explode( " ", $s[1] );
            $tid = explode( " ", $s[0] );
            if ( $tnum == 0 - 1 )
            {
                $hasHero = TRUE;
                continue;
            }
            $troops[$tid] = $tnum;
        }
        $colspan = $hasHero && $procType == QS_WAR_REINFORCE ? 11 : 10;
        echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
        if ( $actionRow != NULL && $Tmp_166 )
        {
            echo "<a href=\"village3.php?id=";
            echo $taskTable['village_id'];
            echo "\">";
            echo $action2;
            echo "</a>";
        }
        else
        {
            echo $action2;
        }
        echo "</td>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\"><a href=\"village3.php?id=";
        echo $taskTable['to_village_id'];
        echo "\"><p>";
        echo $action1;
        echo "</p></a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
        foreach ( $troops as $tid => $tnum )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
            echo $tid;
            echo "\" title=\"";
            echo constant( "troop_".$tid );
            echo "\" alt=\"";
            echo constant( "troop_".$tid );
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t\t";
        if ( $hasHero && $procType == QS_WAR_REINFORCE )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
            echo troop_hero;
            echo "\" alt=\"";
            echo troop_hero;
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t6;
        echo "</th>\r\n\t\t\t";
        foreach ( $troops as $tid => $tnum )
        {
            echo "\t\t\t";
            if ( $procType != QS_WAR_REINFORCE )
            {
                echo "<td class=\"none\">?</td>";
                continue;
            }
            echo "\t\t\t";
            if ( $tnum == 0 )
            {
                echo "<td class=\"none\">0</td>";
            }
            else
            {
                echo "<td>";
                echo $tnum;
                echo "</td>";
            }
            echo "\t\t\t";
        }
        echo "\t\t\t";
        if ( $hasHero && $procType == QS_WAR_REINFORCE )
        {
            echo "\t\t\t<td>1</td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t7;
        echo "</th>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\">\r\n\t\t\t\t<div class=\"in small\">";
        echo text_in_lang;
        echo " ";
        echo "<span id=\"timer1\">";
        echo ( $taskTable['remainingSeconds'] );
        echo "</span> ";
        echo time_hour_lang;
        echo "</div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n\t";
        if ( $resources != NULL )
        {
            echo "\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
            echo LANGUI_CUSTBU_RP_t8;
            echo "</th>\r\n\t\t\t<td colspan=\"";
            echo $colspan;
            echo "\">\r\n\t\t\t\t<img class=\"r1\" src=\"assets/x.gif\" alt=\"";
            echo item_title_1;
            echo "\" title=\"";
            echo item_title_1;
            echo "\">";
            echo $resources[0];
            echo " | \r\n\t\t\t\t<img class=\"r2\" src=\"assets/x.gif\" alt=\"";
            echo item_title_2;
            echo "\" title=\"";
            echo item_title_2;
            echo "\">";
            echo $resources[1];
            echo " | \r\n\t\t\t\t<img class=\"r3\" src=\"assets/x.gif\" alt=\"";
            echo item_title_3;
            echo "\" title=\"";
            echo item_title_3;
            echo "\">";
            echo $resources[2];
            echo " | \r\n\t\t\t\t<img class=\"r4\" src=\"assets/x.gif\" alt=\"";
            echo item_title_4;
            echo "\" title=\"";
            echo item_title_4;
            echo "\">";
            echo $resources[3];
            echo "\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n\t";
        }
        echo "</table>\r\n";
    }
    $m->dispose( );
}
echo "\r\n\r\n";
if ( 0 < sizeof( $this->rallyPointProperty['war_from_village'] ) )
{
    $m = new BuildModel( );
    echo "<h4>";
    echo LANGUI_CUSTBU_RP_t9;
    echo "</h4>\r\n";
    foreach ( $this->rallyPointProperty['war_from_village'] as $taskTable )
    {
        $procType = $taskTable['proc_type'];
        $_arr = explode( "|", $taskTable['proc_params'] );
        $resources = NULL;
        $action = "";
        switch ( $procType )
        {
            case QS_WAR_REINFORCE :
                $action = LANGUI_CUSTBU_RP_t10." ";
                break;
            case QS_WAR_ATTACK :
                $action = LANGUI_CUSTBU_RP_t3." ";
                break;
            case QS_WAR_ATTACK_PLUNDER :
                $action = LANGUI_CUSTBU_RP_t4." ";
                break;
            case QS_WAR_ATTACK_SPY :
                $action = LANGUI_CUSTBU_RP_t11." ";
                break;
            case QS_CREATEVILLAGE :
                $action = LANGUI_CUSTBU_RP_t12;
                $resources = explode( " ", $_arr[4] );
        }
        if ( $procType != QS_CREATEVILLAGE )
        {
            $actionRow = $m->getVillageData2ById( $taskTable['to_village_id'] );
            if ( $actionRow == NULL )
            {
                $action .= "<span class=\"none\">[?]</span>";
            }
            else
            {
                if ( $actionRow['is_oasis'] )
                {
                    $action .= 0 < intval( $actionRow['player_id'] ) ? LANGUI_CUSTBU_RP_t13 : LANGUI_CUSTBU_RP_t14;
                }
                else
                {
                    $action .= 0 < intval( $actionRow['player_id'] ) ? $actionRow['village_name'] : "<span class=\"none\">[?]</span>";
                }
            }
        }
        $troopsStr = explode( ",", $_arr[0] );
        $hasHero = FALSE;
        $troops = array( );
        foreach ( $troopsStr as $s )
        {
            $tnum = explode( " ", $s[1] );
            $tid = explode( " ", $s[0] );
            if ( $tnum == 0 - 1 )
            {
                $hasHero = TRUE;
                continue;
            }
            $troops[$tid] = $tnum;
        }
        $colspan = $hasHero ? 11 : 10;
        echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\"><a href=\"village3.php?id=";
        echo $this->data['selected_village_id'];
        echo "\">";
        echo $this->data['village_name'];
        echo "</a></td>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\"><a href=\"village3.php?id=";
        echo $taskTable['to_village_id'];
        echo "\"><p>";
        echo $action;
        echo "</p></a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
        foreach ( $troops as $Var_9576 => $tnum )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
            echo $tid;
            echo "\" title=\"";
            echo constant( "troop_".$tid );
            echo "\" alt=\"";
            echo constant( "troop_".$tid );
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t\t";
        if ( $hasHero )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
            echo troop_hero;
            echo "\" alt=\"";
            echo troop_hero;
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t6;
        echo "</th>\r\n\t\t\t";
        foreach ( $troops as $tid => $tnum )
        {
            echo "\t\t\t";
            if ( $tnum == 0 )
            {
                echo "<td class=\"none\">0</td>";
            }
            else
            {
                echo "<td>";
                echo $tnum;
                echo "</td>";
            }
            echo "\t\t\t";
        }
        echo "\t\t\t";
        if ( $hasHero )
        {
            echo "\t\t\t<td>1</td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t7;
        echo "</th>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\">\r\n\t\t\t\t<div class=\"in small\">";
        echo text_in_lang;
        echo " ";
        echo "<span id=\"timer1\">";
        echo ( $taskTable['remainingSeconds'] );
        echo "</span> ";
        echo time_hour_lang;
        echo "</div>\r\n\t\t\t\t";
        if ( $this->_canCancelWarTask( $taskTable['proc_type'], $taskTable['id'] ) )
        {
            echo "<div class=\"abort\"><a href=\"build.php?id=39&d=";
            echo $taskTable['id'];
            echo "\"><img src=\"assets/x.gif\" class=\"del\" title=\"";
            echo LANGUI_CUSTBU_RP_t27;
            echo "\" alt=\"";
            echo LANGUI_CUSTBU_RP_t27;
            echo "\"></a></div>";
        }
        echo "\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n\t";
        if ( $resources != NULL )
        {
            echo "\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
            echo LANGUI_CUSTBU_RP_t15;
            echo "</th>\r\n\t\t\t<td colspan=\"";
            echo $colspan;
            echo "\">\r\n\t\t\t\t<img class=\"r1\" src=\"assets/x.gif\" alt=\"";
            echo item_title_1;
            echo "\" title=\"";
            echo item_title_1;
            echo "\">";
            echo $resources[0];
            echo " | \r\n\t\t\t\t<img class=\"r2\" src=\"assets/x.gif\" alt=\"";
            echo item_title_2;
            echo "\" title=\"";
            echo item_title_2;
            echo "\">";
            echo $resources[1];
            echo " | \r\n\t\t\t\t<img class=\"r3\" src=\"assets/x.gif\" alt=\"";
            echo item_title_3;
            echo "\" title=\"";
            echo item_title_3;
            echo "\">";
            echo $resources[2];
            echo " | \r\n\t\t\t\t<img class=\"r4\" src=\"assets/x.gif\" alt=\"";
            echo item_title_4;
            echo "\" title=\"";
            echo item_title_4;
            echo "\">";
            echo $resources[3];
            echo "\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n\t";
        }
        echo "</table>\r\n";
    }
    $m->dispose( );
}
echo "\r\n\r\n";
if ( 0 < sizeof( $this->rallyPointProperty['troops_in_village']['troopsTable'] ) || 0 < sizeof( $this->rallyPointProperty['troops_in_village']['troopsIntrapTable'] ) )
{
    echo "<h4>";
    echo LANGUI_CUSTBU_RP_t16;
    echo "</h4>\r\n";
    foreach ( $this->rallyPointProperty['troops_in_village']['troopsTable'] as $vid => $troopTable )
    {
        $colspan = $troopTable['hasHero'] ? 11 : 10;
        $canBack = TRUE;
        echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo "<a href=\"village3.php?id=";
            echo $troopTable['villageData']['id'];
            echo "\">";
            echo $troopTable['villageData']['village_name'];
            echo "</a>";
        }
        else
        {
            echo "<s";
            echo "pan class=\"none\">[?]</span>";
        }
        echo "</td>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\"><a href=\"profile.php?uid=";
        echo $troopTable['villageData']['player_id'];
        echo "\">";
        echo LANGUI_CUSTBU_RP_t17;
        echo " ";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo $troopTable['villageData']['player_name'];
        }
        else
        {
            echo "<s";
            echo "pan class=\"none\">[?]</span>";
        }
        echo "</a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            if ( $tid == 31 )
            {
                $canBack = FALSE;
            }
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
            echo $tid;
            echo "\" title=\"";
            echo constant( "troop_".$tid );
            echo "\" alt=\"";
            echo constant( "troop_".$tid );
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
            echo troop_hero;
            echo "\" alt=\"";
            echo troop_hero;
        }
        echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t6;
        echo "</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t";
            if ( $tnum == 0 )
            {
                echo "<td class=\"none\">0</td>";
            }
            else
            {
                echo "<td>";
                echo $tnum;
                echo "</td>";
            }
            echo "\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td>1</td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t18;
        echo "</th>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\">\r\n\t\t\t\t<div class=\"sup\">";
        echo $troopTable['cropConsumption'];
        echo "<img class=\"r4\" src=\"assets/x.gif\" title=\"";
        echo item_title_4;
        echo "\" alt=\"";
        echo item_title_4;
        echo "\"> ";
        echo LANGUI_CUSTBU_RP_t19;
        echo "</div>\r\n\t\t\t\t";
        if ( $troopTable['villageData']['id'] != $this->data['selected_village_id'] && $canBack )
        {
            echo "<div class=\"gback\"><a href=\"v2v.php?d1=";
            echo $troopTable['villageData']['id'];
            echo "\">";
            echo LANGUI_CUSTBU_RP_t20;
            echo "</a></div>";
        }
        echo "\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
    }
    foreach ( $this->rallyPointProperty['troops_in_village']['troopsIntrapTable'] as $vid => $troopTable )
    {
        $colspan = $troopTable['hasHero'] ? 11 : 10;
        echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo "<a href=\"village3.php?id=";
            echo $troopTable['villageData']['id'];
            echo "\">";
            echo $troopTable['villageData']['village_name'];
            echo "</a>";
        }
        else
        {
            echo "<s";
            echo "pan class=\"none\">[?]</span>";
        }
        echo "</td>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\"><a href=\"profile.php?uid=";
        echo $troopTable['villageData']['player_id'];
        echo "\">";
        echo LANGUI_CUSTBU_RP_t17;
        echo " ";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo $troopTable['villageData']['player_name'];
        }
        else
        {
            echo "<s";
            echo "pan class=\"none\">[?]</span>";
        }
        echo " ";
        echo LANGUI_CUSTBU_RP_t21;
        echo "</a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
            echo $tid;
            echo "\" title=\"";
            echo constant( "troop_".$tid );
            echo "\" alt=\"";
            echo constant( "troop_".$tid );
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
            echo troop_hero;
            echo "\" alt=\"";
            echo troop_hero;
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t6;
        echo "</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t";
            if ( $tnum == 0 )
            {
                echo "<td class=\"none\">0</td>";
            }
            else
            {
                echo "<td>";
                echo $tnum;
                echo "</td>";
            }
            echo "\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td>1</td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t18;
        echo "</th>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\">\r\n\t\t\t\t<div class=\"sup\">";
        echo $troopTable['cropConsumption'];
        echo "<img class=\"r4\" src=\"assets/x.gif\" title=\"";
        echo item_title_4;
        echo "\" alt=\"";
        echo item_title_4;
        echo "\"> ";
        echo LANGUI_CUSTBU_RP_t19;
        echo "</div>\r\n\t\t\t\t<div class=\"gback\"><a href=\"v2v.php?d2=";
        echo $troopTable['villageData']['id'];
        echo "\">";
        echo LANGUI_CUSTBU_RP_t22;
        echo "</a></div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
    }
}
echo "\r\n";
if ( 0 < sizeof( $this->rallyPointProperty['troops_out_village']['troopsTable'] ) || 0 < sizeof( $this->rallyPointProperty['troops_out_village']['troopsIntrapTable'] ) )
{
    echo "<h4>";
    echo LANGUI_CUSTBU_RP_t23;
    echo "</h4>\r\n";
    foreach ( $this->rallyPointProperty['troops_out_village']['troopsTable'] as $vid => $troopTable )
    {
        $colspan = $troopTable['hasHero'] ? 11 : 10;
        echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo "<a href=\"village3.php?id=";
            echo $troopTable['villageData']['id'];
            echo "\">";
            echo $troopTable['villageData']['village_name'];
            echo "</a>";
        }
        else
        {
            echo "<s";
            echo "pan class=\"none\">[?]</span>";
        }
        echo "</td>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\"><a href=\"profile.php?uid=";
        echo $troopTable['villageData']['player_id'];
        echo "\">";
        echo LANGUI_CUSTBU_RP_t10;
        echo " ";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo $troopTable['villageData']['player_name'];
        }
        else
        {
            echo "<span class=\"none\">[?]</span>";
        }
        echo "</a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
            echo $tid;
            echo "\" title=\"";
            echo constant( "troop_".$tid );
            echo "\" alt=\"";
            echo constant( "troop_".$tid );
            echo "\"></td>\r\n\t\t\t";
            continue;
            echo "\t\t\t";
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
            echo troop_hero;
            echo "\" alt=\"";
            echo troop_hero;
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t6;
        echo "</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t";
            if ( $tnum == 0 )
            {
                echo "<td class=\"none\">0</td>";
            }
            else
            {
                echo "<td>";
                echo $tnum;
                echo "</td>";
            }
            echo "\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td>1</td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t18;
        echo "</th>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\">\r\n\t\t\t\t<div class=\"sup\">";
        echo $troopTable['cropConsumption'];
        echo "<img class=\"r4\" src=\"assets/x.gif\" title=\"";
        echo item_title_4;
        echo "\" alt=\"";
        echo item_title_4;
        echo "\"> ";
        echo $Tmp_768;
        echo "</div>\r\n\t\t\t\t<div class=\"gback\"><a href=\"v2v.php?d3=";
        echo $troopTable['villageData']['id'];
        echo "\">";
        echo LANGUI_CUSTBU_RP_t24;
        echo "</a></div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
    }
    foreach ( $this->rallyPointProperty['troops_out_village']['troopsIntrapTable'] as $vid => $troopTable )
    {
        $colspan = $troopTable['hasHero'] ? 11 : 10;
        echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo "<a href=\"village3.php?id=";
            echo $troopTable['villageData']['id'];
            echo "\">";
            echo $troopTable['villageData']['village_name'];
            echo "</a>";
        }
        else
        {
            echo "<span class=\"none\">[?]</span>";
        }
        echo "</td>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\"><a href=\"profile.php?uid=";
        echo $troopTable['villageData']['player_id'];
        echo "\">";
        echo LANGUI_CUSTBU_RP_t25;
        echo " ";
        if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
        {
            echo $troopTable['villageData']['player_name'];
        }
        else
        {
            echo "<s";
            echo "pan class=\"none\">[?]</span>";
        }
        echo "</a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
            echo $tid;
            echo "\" title=\"";
            echo constant( "troop_".$tid );
            echo "\" alt=\"";
            echo constant( "troop_".$tid );
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
            echo troop_hero;
            echo "\" alt=\"";
            echo troop_hero;
            echo "\"></td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t6;
        echo "</th>\r\n\t\t\t";
        foreach ( $troopTable['troops'] as $tid => $tnum )
        {
            echo "\t\t\t";
            if ( $tnum == 0 )
            {
                echo "<td class=\"none\">0</td>";
            }
            else
            {
                echo "<td>";
                echo $tnum;
                echo "</td>";
            }
            echo "\t\t\t";
        }
        echo "\t\t\t";
        if ( $troopTable['hasHero'] )
        {
            echo "\t\t\t<td>1</td>\r\n\t\t\t";
        }
        echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
        echo LANGUI_CUSTBU_RP_t18;
        echo "</th>\r\n\t\t\t<td colspan=\"";
        echo $colspan;
        echo "\">\r\n\t\t\t\t<div class=\"sup\">";
        echo $troopTable['cropConsumption'];
        echo "<img class=\"r4\" src=\"assets/x.gif\" title=\"";
        echo item_title_4;
        echo "\" alt=\"";
        echo item_title_4;
        echo "\"> ";
        echo LANGUI_CUSTBU_RP_t19;
        echo "</div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
    }
}
else
{
    echo "\r\n\r\n";
    if ( 0 < sizeof( $this->rallyPointProperty['troops_in_oases'] ) )
    {
        foreach ( $this->rallyPointProperty['troops_in_oases'] as $oasisId => $oasisData )
        {
            if ( sizeof( $oasisData['troopsTable'] ) == 0 && sizeof( $oasisData['war_to'] ) == 0 )
            {
                continue;
            }
            echo "<br/><p class=\"info\"><a href=\"village3.php?id=";
            echo $oasisId;
            echo "\">";
            echo LANGUI_CUSTBU_RP_t26;
            echo " (";
            echo $oasisData['oasisRow']['rel_x'];
            echo "|";
            echo $oasisData['oasisRow']['rel_y'];
            echo ")</a></p>\r\n\r\n";
            if ( 0 < sizeof( $oasisData['war_to'] ) )
            {
                $m = new BuildModel( );
                echo "<h4>";
                echo LANGUI_CUSTBU_RP_t1;
                echo "</h4>\r\n";
                foreach ( $oasisData['war_to'] as $taskTable )
                {
                    $procType = $taskTable['proc_type'];
                    $action1 = "";
                    switch ( $procType )
                    {
                        case QS_WAR_REINFORCE :
                            $action1 = LANGUI_CUSTBU_RP_t10;
                            break;
                        case QS_WAR_ATTACK :
                            $action1 = LANGUI_CUSTBU_RP_t3;
                            break;
                        case QS_WAR_ATTACK_PLUNDER :
                            $action1 = LANGUI_CUSTBU_RP_t4;
                    }
                    $action1 .= " ".LANGUI_CUSTBU_RP_t26;
                    $action2 = "";
                    $actionRow = $m->getVillageData2ById( $taskTable['village_id'] );
                    if ( $actionRow == NULL || intval( $actionRow['player_id'] ) != intval( $taskTable['player_id'] ) )
                    {
                        $action2 .= "<span class=\"none\">[?]</span>";
                    }
                    else
                    {
                        $action2 .= $actionRow['tribe_id'] == 4 ? LANGUI_CUSTBU_RP_t5 : $actionRow['village_name'];
                    }
                    $_arr = explode( "|", $taskTable['proc_params'] );
                    $troopsStr = explode( ",", $_arr[0] );
                    $hasHero = FALSE;
                    $troops = array( );
                    foreach ( $troopsStr as $s )
                    {
                        $tnum = explode( " ", $s[1] );
                        $tid = explode( " ", $s[0] );
                        if ( $tnum == 0 - 1 )
                        {
                            $hasHero = TRUE;
                            continue;
                        }
                        $troops[$tid] = $tnum;
                    }
                    $colspan = $hasHero && $procType == QS_WAR_REINFORCE ? 11 : 10;
                    echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
                    if ( $action2 != "" )
                    {
                        echo "<a href=\"village3.php?id=";
                        echo $taskTable['village_id'];
                        echo "\">";
                        echo $action2;
                        echo "</a>";
                    }
                    else
                    {
                        echo $action2;
                    }
                    echo "</td>\r\n\t\t\t<td colspan=\"";
                    echo $colspan;
                    echo "\"><a href=\"village3.php?id=";
                    echo $taskTable['to_village_id'];
                    echo "\"><p>";
                    echo $action1;
                    echo "</p></a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
                    foreach ( $troops as $tid => $tnum )
                    {
                        echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
                        echo $tid;
                        echo "\" title=\"";
                        echo constant( "troop_".$tid );
                        echo "\" alt=\"";
                        echo constant( "troop_".$tid );
                        echo "\"></td>\r\n\t\t\t";
                    }
                    echo "\t\t\t";
                    if ( $hasHero && $procType == QS_WAR_REINFORCE )
                    {
                        echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
                        echo troop_hero;
                        echo "\" alt=\"";
                        echo troop_hero;
                        echo "\"></td>\r\n\t\t\t";
                    }
                    echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
                    echo LANGUI_CUSTBU_RP_t6;
                    echo "</th>\r\n\t\t\t";
                    foreach ( $troops as $tid => $tnum )
                    {
                        echo "\t\t\t";
                        if ( $procType != QS_WAR_REINFORCE )
                        {
                            echo "<td class=\"none\">?</td>";
                            continue;
                        }
                        echo "\t\t\t";
                        if ( $tnum == 0 )
                        {
                            echo "<td class=\"none\">0</td>";
                        }
                        else
                        {
                            echo "<td>";
                            echo $tnum;
                            echo "</td>";
                        }
                        echo "\t\t\t";
                    }
                    echo "\t\t\t";
                    if ( $hasHero && $procType == QS_WAR_REINFORCE )
                    {
                        echo "\t\t\t<td>1</td>\r\n\t\t\t";
                    }
                    echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
                    echo LANGUI_CUSTBU_RP_t7;
                    echo "</th>\r\n\t\t\t<td colspan=\"";
                    echo $colspan;
                    echo "\">\r\n\t\t\t\t<div class=\"in small\">";
                    echo text_in_lang;
                    echo " ";
                    echo "<s";
                    echo "pan id=\"timer1\">";
                    echo ( $taskTable['remainingSeconds'] );
                    echo "</span> ";
                    echo time_hour_lang;
                    echo "</div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
                }
                $m->dispose( );
            }
            echo "\r\n";
            if ( 0 < sizeof( $oasisData['troopsTable'] ) )
            {
                echo "<h4>";
                echo LANGUI_CUSTBU_RP_t16;
                echo "</h4>\r\n";
                foreach ( $oasisData['troopsTable'] as $vid => $troopTable )
                {
                    $colspan = $troopTable['hasHero'] ? 11 : 10;
                    echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td class=\"role\">";
                    if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
                    {
                        echo "<a href=\"village3.php?id=";
                        echo $troopTable['villageData']['id'];
                        echo "\">";
                        echo $troopTable['villageData']['village_name'];
                        echo "</a>";
                    }
                    else
                    {
                        echo "<s";
                        echo "pan class=\"none\">[?]</span>";
                    }
                    echo "</td>\r\n\t\t\t<td colspan=\"";
                    echo $colspan;
                    echo "\"><a href=\"profile.php?uid=";
                    echo $troopTable['villageData']['player_id'];
                    echo "\">";
                    echo LANGUI_CUSTBU_RP_t17;
                    echo " ";
                    if ( 0 < intval( $troopTable['villageData']['player_id'] ) )
                    {
                        echo $troopTable['villageData']['player_name'];
                    }
                    else
                    {
                        echo "<s";
                        echo "pan class=\"none\">[?]</span>";
                    }
                    echo "</a></td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody class=\"units\">\r\n\t\t<tr>\r\n\t\t\t<th>&nbsp;</th>\r\n\t\t\t";
                    foreach ( $troopTable['troops'] as $tid => $tnum )
                    {
                        echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit u";
                        echo $tid;
                        echo "\" title=\"";
                        echo constant( "troop_".$tid );
                        echo "\" alt=\"";
                        echo constant( "troop_".$tid );
                        echo "\"></td>\r\n\t\t\t";
                    }
                    echo "\t\t\t";
                    if ( $troopTable['hasHero'] )
                    {
                        echo "\t\t\t<td><img src=\"assets/x.gif\" class=\"unit uhero\" title=\"";
                        echo troop_hero;
                        echo "\" alt=\"";
                        echo troop_hero;
                        echo "\"></td>\r\n\t\t\t";
                    }
                    echo "\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<th>";
                    echo LANGUI_CUSTBU_RP_t6;
                    echo "</th>\r\n\t\t\t";
                    foreach ( $troopTable['troops'] as $tid => $tnum )
                    {
                        echo "\t\t\t";
                        if ( $tnum == 0 )
                        {
                            echo "<td class=\"none\">0</td>";
                        }
                        else
                        {
                            echo "<td>";
                            echo $tnum;
                            echo "</td>";
                        }
                        echo "\t\t\t";
                    }
                    echo "\t\t\t";
                    if ( $troopTable['hasHero'] )
                    {
                        echo "\t\t\t<td>1</td>\r\n\t\t\t";
                    }
                    echo "\t\t</tr>\r\n\t</tbody>\r\n\t<tbody class=\"infos\">\r\n\t\t<tr>\r\n\t\t\t<th>";
                    echo LANGUI_CUSTBU_RP_t18;
                    echo "</th>\r\n\t\t\t<td colspan=\"";
                    echo $colspan;
                    echo "\">\r\n\t\t\t\t<div class=\"sup\">";
                    echo $troopTable['cropConsumption'];
                    echo "<img class=\"r4\" src=\"assets/x.gif\" title=\"";
                    echo item_title_4;
                    echo "\" alt=\"";
                    echo item_title_4;
                    echo "\"> ";
                    echo LANGUI_CUSTBU_RP_t19;
                    echo "</div>\r\n\t\t\t\t<div class=\"gback\"><a href=\"v2v.php?d1=";
                    echo $troopTable['villageData']['id'];
                    echo "&o=";
                    echo $oasisId;
                    echo "\">";
                    echo LANGUI_CUSTBU_RP_t20;
                    echo "</a></div>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n";
                }
            }
        }
    }
}
//}