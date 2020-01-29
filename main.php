<?php
require_once('standard.php');
 //create agents using an object class called standard
$standard8 = new standard;
$standard7 = new standard;
$standard6 = new standard;
$standard5 = new standard;
$standard4 = new standard;

print("
<style>
table, td, th {
    border: 1px solid;
};
table {
    border-collapse: collapse;
};
</style>
");

//function for decoding user input from the form (to be used by code starting at line 90's)
function getpref($array){
    $new = array(0,0,0,0,0,0);
    $subject = ' ';
    foreach ($array as $key => $value) {
        switch($key){
            case 0:
                $subject = 'Maths';
            break;
            case 1:
                $subject = 'Eng';
            break;
            case 2:
                $subject = 'Sci';
            break;
            case 3:
                $subject = 'Kis';
            break;
            case 4:
                $subject = 'Social';
            break;
            case 5:
                $subject = 'Cre';
            break;
            default:

            break;
        }
        $new[$value-1] = $subject;
    }
    return $new;
}

// beginning of form processing
$error = 0; $sum = 0;
foreach ($_POST as $key => $value) {
    # code...
    if(empty($value)){
        echo"<hr>". $key."<br>has not been filled";
        echo"<br>";
        ++$error;
    }
    if(is_numeric($_POST[$key])){
        $sum = $sum + $value;
        
    }
}
$size = $_POST['size'];
// If all fields are initialized
if($error == 0 && (($sum - $size) == 315)){
    
    
    $teachers = array();
    
    for($i=1 ; $i<=$size ; $i++){
        $teachers[$i-1] = "teacher".$i;
    }

    $std8_teachers = array();
    array_push($std8_teachers, $_POST['maths8-teacher'], $_POST['eng8-teacher'], $_POST['sci8-teacher'], $_POST['kis8-teacher'], $_POST['ss8-teacher'], $_POST['cre8-teacher']);
    
    $std8_morning = array();
    array_push($std8_morning, $_POST['math8-morning'], $_POST['eng8-morning'], $_POST['sci8-morning'], $_POST['kis8-morning'], $_POST['ss8-morning'], $_POST['cre8-morning']);
    $std8_morning = getpref($std8_morning);

    $std8_mid = array();
    array_push($std8_mid, $_POST['math8-mid'],  $_POST['eng8-mid'],  $_POST['sci8-mid'],  $_POST['kis8-mid'],  $_POST['ss8-mid'],  $_POST['cre8-mid']);
    $std8_mid = getpref($std8_mid);

    $std8_ev = array();
    array_push($std8_ev, $_POST['math8-ev'], $_POST['eng8-ev'], $_POST['sci8-ev'], $_POST['kis8-ev'], $_POST['ss8-ev'], $_POST['cre8-ev']);
    $std8_ev = getpref($std8_ev);
/************************************     7   ********************************************************************* */
    $std7_teachers = array();
    array_push($std7_teachers, $_POST['maths7-teacher'], $_POST['eng7-teacher'], $_POST['sci7-teacher'], $_POST['kis7-teacher'], $_POST['ss7-teacher'], $_POST['cre7-teacher']);
    
    $std7_morning = array();
    array_push($std7_morning, $_POST['math7-morning'], $_POST['eng7-morning'], $_POST['sci7-morning'], $_POST['kis7-morning'], $_POST['ss7-morning'], $_POST['cre7-morning']);
    $std7_morning = getpref($std7_morning);

    $std7_mid = array();
    array_push($std7_mid, $_POST['math7-mid'],  $_POST['eng7-mid'],  $_POST['sci7-mid'],  $_POST['kis7-mid'],  $_POST['ss7-mid'],  $_POST['cre7-mid']);
    $std7_mid = getpref($std7_mid);

    $std7_ev = array();
    array_push($std7_ev, $_POST['math7-ev'], $_POST['eng7-ev'], $_POST['sci7-ev'], $_POST['kis7-ev'], $_POST['ss7-ev'], $_POST['cre7-ev']);
    $std7_ev = getpref($std7_ev);
/************************************************  6  *********************************************** */
$std6_teachers = array();
    array_push($std6_teachers, $_POST['maths6-teacher'], $_POST['eng6-teacher'], $_POST['sci6-teacher'], $_POST['kis6-teacher'], $_POST['ss6-teacher'], $_POST['cre6-teacher']);
    
    $std6_morning = array();
    array_push($std6_morning, $_POST['math6-morning'], $_POST['eng6-morning'], $_POST['sci6-morning'], $_POST['kis6-morning'], $_POST['ss6-morning'], $_POST['cre6-morning']);
    $std6_morning = getpref($std6_morning);

    $std6_mid = array();
    array_push($std6_mid, $_POST['math6-mid'],  $_POST['eng6-mid'],  $_POST['sci6-mid'],  $_POST['kis6-mid'],  $_POST['ss6-mid'],  $_POST['cre6-mid']);
    $std6_mid = getpref($std6_mid);

    $std6_ev = array();
    array_push($std6_ev, $_POST['math6-ev'], $_POST['eng6-ev'], $_POST['sci6-ev'], $_POST['kis6-ev'], $_POST['ss6-ev'], $_POST['cre6-ev']);
    $std6_ev = getpref($std6_ev);

    /******************************************  5   ************************************************************ */
    $std5_teachers = array();
    array_push($std5_teachers, $_POST['maths5-teacher'], $_POST['eng5-teacher'], $_POST['sci5-teacher'], $_POST['kis5-teacher'], $_POST['ss5-teacher'], $_POST['cre5-teacher']);
    
    $std5_morning = array();
    array_push($std5_morning, $_POST['math5-morning'], $_POST['eng5-morning'], $_POST['sci5-morning'], $_POST['kis5-morning'], $_POST['ss5-morning'], $_POST['cre5-morning']);
    $std5_morning = getpref($std5_morning);

    $std5_mid = array();
    array_push($std5_mid, $_POST['math5-mid'],  $_POST['eng5-mid'],  $_POST['sci5-mid'],  $_POST['kis5-mid'],  $_POST['ss5-mid'],  $_POST['cre5-mid']);
    $std5_mid = getpref($std5_mid);

    $std5_ev = array();
    array_push($std5_ev, $_POST['math5-ev'], $_POST['eng5-ev'], $_POST['sci5-ev'], $_POST['kis5-ev'], $_POST['ss5-ev'], $_POST['cre5-ev']);
    $std5_ev = getpref($std5_ev);
/*****************************************   4   ********************************************************** */
$std4_teachers = array();
    array_push($std4_teachers, $_POST['maths4-teacher'], $_POST['eng4-teacher'], $_POST['sci4-teacher'], $_POST['kis4-teacher'], $_POST['ss4-teacher'], $_POST['cre4-teacher']);
    
    $std4_morning = array();
    array_push($std4_morning, $_POST['math4-morning'], $_POST['eng4-morning'], $_POST['sci4-morning'], $_POST['kis4-morning'], $_POST['ss4-morning'], $_POST['cre4-morning']);
    $std4_morning = getpref($std4_morning);

    $std4_mid = array();
    array_push($std4_mid, $_POST['math4-mid'],  $_POST['eng4-mid'],  $_POST['sci4-mid'],  $_POST['kis4-mid'],  $_POST['ss4-mid'],  $_POST['cre4-mid']);
    $std4_mid = getpref($std4_mid);

    $std4_ev = array();
    array_push($std4_ev, $_POST['math4-ev'], $_POST['eng4-ev'], $_POST['sci4-ev'], $_POST['kis4-ev'], $_POST['ss4-ev'], $_POST['cre4-ev']);
    $std4_ev = getpref($std4_ev);

//*** *       *****************    End of Form Processing        **************      * */

// initializing the agents with user input values

$standard8->morning_preferences = $std8_morning;
$standard8->restore_morning = $std8_morning;

$standard7->morning_preferences = $std7_morning;
$standard7->restore_morning = $std7_morning;

$standard6->morning_preferences = $std6_morning;
$standard6->restore_morning =  $std6_morning;

$standard5->morning_preferences = $std5_morning;
$standard5->restore_morning = $std5_morning;

$standard4->morning_preferences = $std4_morning;
$standard4->restore_morning = $std4_morning;

$standard8->midday_preferences = $std8_mid;
$standard8->restore_midday = $std8_mid;

$standard7->midday_preferences = $std7_mid;
$standard7->restore_midday = $std7_mid;

$standard6->midday_preferences = $std6_mid;
$standard6->restore_midday = $std6_mid;

$standard5->midday_preferences = $std5_mid;
$standard5->restore_midday = $std5_mid;

$standard4->midday_preferences = $std4_mid;
$standard4->restore_midday = $std4_mid;

$standard8->evening_preferences = $std8_ev;
$standard8->restore_evening = $std8_ev;

$standard7->evening_preferences = $std7_ev;
$standard7->restore_evening = $std7_ev;

$standard6->evening_preferences = $std6_ev;
$standard6->restore_evening = $std6_ev;

$standard5->evening_preferences = $std5_ev;
$standard5->restore_evening = $std5_ev;

$standard4->evening_preferences = $std4_ev;
$standard4->restore_evening = $std4_ev;

$standard8->teachers = $std8_teachers;
$standard7->teachers = $std7_teachers;
$standard6->teachers = $std6_teachers;
$standard5->teachers = $std5_teachers;
$standard4->teachers = $std4_teachers;


// set class names
$standard8->className = "Standard 8";
$standard7->className = "Standard 7";
$standard6->className = "Standard 6";
$standard5->className = "Standard 5";
$standard4->className = "Standard 4";

/************************        End of agent initialization        ************************** */

/** Looping while calling specific agents to do a scheduling process */

for($day = 1; $day<= 5; $day++){
    for($day_lesson = 1; $day_lesson<= 8; $day_lesson++){
        $time = 0;
        
        if ($day_lesson <= 3) {
            $time = 1;
        } elseif($day_lesson <= 5){
            $time = 2;
        }
        else{
            $time = 3;
        }
        //creating the variable to be used in locking teachers
        $available_teachers = $teachers;
        $dice = array('standard8', 'standard7', 'standard6', 'standard5', 'standard4');
        $turns = array();
        
        for ($i=0; $i <5; $i++){
            shuffle($dice);
            $turns[] = array_pop($dice);
        }
        while(!empty($turns)){
        $current_class = array_pop($turns);
        switch ($current_class) {
            case 'standard8':
                $remove_teacher = $standard8->choose($available_teachers, $time, $day);
                if($remove_teacher != -101){
                   array_splice($available_teachers, $remove_teacher, 1);
            }
                break;
            case 'standard7':
                $remove_teacher = $standard7->choose($available_teachers, $time, $day);
                if($remove_teacher != -101){
                    array_splice($available_teachers, $remove_teacher, 1);
                     
                }
                break;
            case'standard6':
                $remove_teacher = $standard6->choose($available_teachers, $time, $day);
                if($remove_teacher != -101){
                    array_splice($available_teachers, $remove_teacher, 1);
                     
                }
                break;
            case 'standard5':
                $remove_teacher = $standard5->choose($available_teachers, $time, $day);
                if($remove_teacher != -101){
                    array_splice($available_teachers, $remove_teacher, 1);
                }
                break;
            case 'standard4':
                $remove_teacher = $standard4->choose($available_teachers, $time, $day);
                if($remove_teacher != -101){
                    array_splice($available_teachers, $remove_teacher, 1);
                }
                break;
            default:
                print("Cannot call standard class room given");
                break;
        }
        }
        
        }
    }

    /*  ****************************   End of time table generation   ******************************* */

    //printing the timetable

/*the function responsible for checking constraints and displaying if the generated timetable meets education standards*/

function confirm($var){
    $var = array_count_values($var);
    if($var['Maths']<7 || $var['Maths']>11 
    || $var['Eng'] < 5 || $var['Eng'] > 9 
    || $var['Kis'] < 4 || $var['Kis'] > 8
    || $var['Sci'] <5  || $var['Sci'] > 8
    || $var['Social'] < 4 
    ||  $var['Cre'] < 3){
        return 'Some Hard Constraints are yet to be met';
    }
    else{
        return 'Hard Constraints Met';
    }
}

    echo"<br>";
    echo"Standard8 says: ";print(confirm($standard8->timetable));echo"<br>";
    echo"Standard7 says: ";print(confirm($standard7->timetable));echo"<br>";
    echo"Standard6 says: ";print(confirm($standard6->timetable));echo"<br>";
    echo"Standard5 says: ";print(confirm($standard5->timetable));echo"<br>";
    echo"Standard4 says: ";print(confirm($standard4->timetable));echo"<br>";

        $classArray = array($standard8, $standard7, $standard6, $standard5, $standard4);
        foreach($classArray as $class) {
            printf("<br><br>%s<br>", $class->className);
            echo "<table>";
            print("<tr><th width='150px'>Day</th><th width='75px'>Session 1</th><th width='75px'>Session 2</th><th width='75px'>Session 3</th><th width='75px'>Session 4</th><th width='75px'>Session 5</th><th width='75px'>Session 6</th><th width='75px'>Session 7</th><th width='75px'>Session 8</th></tr>");
            for($i = 0; $i < 40; $i++) {
                if ($i%8 == 0) {
                    switch($i/8) {
                        case 0:
                            print("<tr><td width='150px'>MONDAY</td>");
                            break;
                        case 1:
                            printf("</tr><tr><td width='150px'>TUESDAY</td>");
                            break;
                        case 2:
                            printf("</tr><tr><td width='150px'>WEDNESDAY</td>");
                            break;
                        case 3:
                            printf("</tr><tr><td width='150px'>THURSDAY</td>");
                            break;
                        case 4:
                            printf("</tr><tr><td width='150px'>FRIDAY</td>");
                            break;
                        default:
                            break;
                    }
                }
                printf("<td width='75px'>%s</td>", $class->timetable[$i]);
            }
            echo "</tr></table>";
        }

        $array = array_count_values($standard8->timetable);echo"<br>";
        print_r($array);
        $array =array_count_values($standard7->timetable);echo"<br>";
        print_r($array);
        $array =array_count_values($standard6->timetable);echo"<br>";
        print_r($array);
        $array =array_count_values($standard5->timetable);echo"<br>";
        print_r($array);
        $array = array_count_values($standard4->timetable);echo"<br>";;
        print_r($array);
        echo"<br>";

    }
    else{
        echo"<hr>You have an incorrect preference value that is identical to another preference.<br>
         check that for a class morning preference: <br>
         say Math - 6 does not have a cre - 6  or <br>
          Eng-2 and math-2 for the same preference set";
    }
?>