<?php
require_once( LANG_UI_PATH."custbuilds.php" );
echo "<p></p>\r\n";
if ( $this->buildings[$this->buildingIndex]['item_id'] == 36 )
{
    echo "<p>";
    echo LANGUI_CUSTBU_TRP_t1;
    echo " <b>";
    echo $this->troops[99];
    echo "</b> ";
    echo LANGUI_CUSTBU_TRP_t2;
    echo " <b>";
    echo $this->data['troops_trapped_num'];
    echo "</b> ";
    echo LANGUI_CUSTBU_TRP_t3;
    echo ".</p>\r\n<p></p>\r\n";
}
echo "<form method=\"post\" name=\"snd\" action=\"build.php?id=";
echo $this->buildingIndex;
echo "\">\r\n<table cellpadding=\"1\" cellspacing=\"1\" class=\"build_details\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td>";
echo LANGUI_CUSTBU_TRP_t4;
echo "</td>\r\n\t\t\t<td>";
echo LANGUI_CUSTBU_TRP_t5;
echo "</td>\r\n\t\t\t<td>";
echo LANGUI_CUSTBU_TRP_t6;
echo "</td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t";
$_ac = 0;
foreach ( $this->troopsUpgrade as $tid )
{
    ++$_ac;
    $buildingMetadata = $this->gameMetadata['troops'][$tid];
    $timeFactor = 1;
    if ( $buildingMetadata['is_cavalry'] == TRUE )
    {
        $flvl = $this->_getMaxBuildingLevel( 41 );
        if ( 0 < $flvl )
        {
            $timeFactor -= $this->gameMetadata['items'][41]['levels'][$flvl - 1]['value'] / 100;
        }
    }
    $lvlTime = intval( $buildingMetadata['training_time_consume'] / $this->gameSpeed * ( 10 / ( $this->buildProperties['building']['level'] + 9 ) ) * $timeFactor );
    $maxNumber = $this->_getMaxTrainNumber( $tid, $this->buildings[$this->buildingIndex]['item_id'] );
    $manual = $tid == 99 ? "4,36" : "3,".$tid;
    echo "\t\t<tr>\r\n\t\t\t<td class=\"desc\">\r\n\t\t\t\t<div class=\"tit\"><img class=\"unit u";
    echo $tid;
    echo "\" src=\"assets/x.gif\" alt=\"";
    echo constant( "troop_".$tid );
    echo "\" title=\"";
    echo constant( "troop_".$tid );
    echo "\"><a href=\"#\" onclick=\"return showManual(";
    echo $manual;
    echo ");\">";
    echo constant( "troop_".$tid );
    echo "</a> ";
    echo "<s";
    echo "pan class=\"info\">(";
    echo LANGUI_CUSTBU_TRP_t7;
    echo ": ";
    echo $this->troops[$tid];
    echo ")</span></div>\r\n\t\t\t\t<div class=\"details\">\r\n\t\t\t\t\t<img class=\"r1\" src=\"assets/x.gif\" alt=\"";
    echo item_title_1;
    echo "\" title=\"";
    echo item_title_1;
    echo "\">";
    echo "<s";
    echo "pan class=\"little_res\">";
    echo $buildingMetadata['training_resources'][1] * $this->buildingTribeFactor;
    echo "</span>|<img class=\"r2\" src=\"assets/x.gif\" alt=\"";
    echo item_title_2;
    echo "\" title=\"";
    echo item_title_2;
    echo "\">";
    echo "<s";
    echo "pan class=\"little_res\">";
    echo $buildingMetadata['training_resources'][2] * $this->buildingTribeFactor;
    echo "</span>|<img class=\"r3\" src=\"assets/x.gif\" alt=\"";
    echo item_title_3;
    echo "\" title=\"";
    echo item_title_3;
    echo "\">";
    echo "<s";
    echo "pan class=\"little_res\">";
    echo $buildingMetadata['training_resources'][3] * $this->buildingTribeFactor;
    echo "</span>|<img class=\"r4\" src=\"assets/x.gif\" alt=\"";
    echo item_title_4;
    echo "\" title=\"";
    echo item_title_4;
    echo "\">";
    echo "<s";
    echo "pan class=\"little_res\">";
    echo $buildingMetadata['training_resources'][4] * $this->buildingTribeFactor;
    echo "</span>|<img class=\"clock\" src=\"assets/x.gif\" alt=\"";
    echo text_period_lang;
    echo "\" title=\"";
    echo text_period_lang;
    echo "\">";
    echo ( $lvlTime );
    $neededResources = array( );
    foreach ( $buildingMetadata['training_resources'] as $k => $v )
    {
        $neededResources[$k] = $v * $this->buildingTribeFactor;
    }
    echo $this->getResourceGoldExchange( $neededResources, 0, $this->buildingIndex, TRUE );
    echo "\t\t\t\t</div>\r\n\t\t\t</td>\r\n\t\t\t<td class=\"val\"><input type=\"text\" class=\"text\" id=\"_tf";
    echo $tid;
    echo "\" name=\"tf[";
    echo $tid;
    echo "]\" value=\"0\" maxlength=\"4\"></td>\r\n\t\t\t<td class=\"max\"><a href=\"#\" onclick=\"_('_tf";
    echo $tid;
    echo "').value=";
    echo $maxNumber;
    echo "; return false;\">(";
    echo $maxNumber;
    echo ")</a></td>\r\n\t\t</tr>\r\n\t\t";
}
echo "\t\t";
if ( $_ac == 0 )
{
    echo "\t\t<tr><td colspan=\"3\">";
    echo "<s";
    echo "pan class=\"none\">";
    echo LANGUI_CUSTBU_TRP_t8;
    echo "</span></td></tr>\r\n\t\t";
}
echo "\t</tbody>\r\n</table>\r\n";
if ( 0 < $_ac )
{
    echo "<p><input type=\"image\" id=\"btn_train\" class=\"dynamic_img\" value=\"ok\" name=\"s1\" src=\"assets/x.gif\" alt=\"";
    echo LANGUI_CUSTBU_TRP_t9;
    echo "\"></p>";
}
echo "</form>\r\n";
//if ( [$this->buildProperties['building']['item_id']]isset( $this->queueModel->tasksInQueue[$this->troopsUpgradeType], $this->queueModel->tasksInQueue[$this->troopsUpgradeType] ) )
if ( isset( $this->queueModel->tasksInQueue[$this->troopsUpgradeType], $this->queueModel->tasksInQueue[$this->troopsUpgradeType][$this->buildProperties['building']['item_id']] ) )

{
    $qts = $this->queueModel->tasksInQueue[$this->troopsUpgradeType][$this->buildProperties['building']['item_id']];
    echo "<table cellpadding=\"1\" cellspacing=\"1\" class=\"under_progress\">\r\n\t";
    if ( !$this->data['is_special_village'] && $this->gameMetadata['plusTable'][7]['cost'] <= $this->data['gold_num'] )
    {
        echo "\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th colspan=\"2\">\r\n\t\t\t\t";
        $costTip = sprintf( LANGUI_CUSTBU_TRP_t15, $this->gameMetadata['plusTable'][7]['cost'] );
        echo "\t\t\t\t";
        echo LANGUI_CUSTBU_TRP_t16;
        echo ": \r\n\t\t\t\t<a href=\"village1.php?tfs&k=";
        echo "\" title=\"";
        echo $costTip;
        echo "\">\r\n\t\t\t\t<img class=\"clock\" alt=\"";
        echo $costTip;
        echo "\" src=\"assets/x.gif\"></a>\r\n\t\t\t</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t";
    }
    echo "\t<thead>\r\n\t\t<tr>\r\n\t\t\t<td>";
    if ( $this->buildProperties['building']['item_id'] == 36 )
    {
        echo LANGUI_CUSTBU_TRP_t10;
    }
    else
    {
        echo LANGUI_CUSTBU_TRP_t11;
    }
    echo "</td>\r\n\t\t\t<td>";
    echo text_period_lang;
    echo "</td>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t";
    $_f = TRUE;
	$nextTroopTime = 0; // <- just for fix error
    foreach ( $qts as $qt )
    {
        $tid = $qt['proc_params'];
        $troopTime = $qt['execution_time'] - ( $qt['execution_time'] * $qt['threads'] - $qt['remainingSeconds'] );
        //if ( $troopTime < $nextTroopTime || $Var_6144 )
        if ( $troopTime < $nextTroopTime || $_f )
        {
            $_f = FALSE;
            $nextTroopTime = $troopTime;
        }
        echo "\t\t<tr>\r\n\t\t\t<td class=\"desc\"><img class=\"unit u";
        echo $tid;
        echo "\" src=\"assets/x.gif\" alt=\"";
        echo constant( "troop_".$tid );
        echo "\" title=\"";
        echo constant( "troop_".$tid );
        echo "\"> ";
        echo $qt['threads'];
        echo " ";
        echo constant( "troop_".$tid );
        echo "</td>\r\n\t\t\t<td class=\"dur\">";
        echo "<s";
        echo "pan id=\"timer1\">";
        echo ( $qt['remainingSeconds'] );
        echo "</span></td>\r\n\t\t</tr>\r\n\t\t";
    }
    echo "\t\t<tr class=\"next\"><td colspan=\"2\">";
    echo $this->buildProperties['building']['item_id'] == 36 ? LANGUI_CUSTBU_TRP_t13 : LANGUI_CUSTBU_TRP_t14;
    echo " ";
    echo LANGUI_CUSTBU_TRP_t12;
    echo " ";
    echo "<s";
    echo "pan id=\"timer1\">";
    echo WebHelper::secondstostring( $nextTroopTime );
    echo "</span></td></tr>\r\n\t</tbody>\r\n</table>\r\n";
}