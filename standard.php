<?php

class standard{
    public $classname;
    public $teachers;
    public $day = 0;

    public $morning_preferences = array();
    public $midday_preferences  = array();
    public $evening_preferences = array();

    public $restore_morning = array();
    public $restore_midday = array();
    public $restore_evening = array();

    public $timetable = array();
    public $max_day_lessons = array();
    public $satisfied = array();

    //functions
    public function translate($variable){
        switch ($variable) {
            case 'Maths':
                return 0; break;
            case 'Eng':
            return 1; break;
            case 'Sci':
            return 2; break;
            case 'Kis':
            return 3; break;
            case 'Social':
                return 4; break;
            case 'Cre':
            return 5; break;
            default:
                break;
        }
    }

    public function setsub($subject){
        array_push($this->timetable, $subject);
        return;
    }


    public function distribute($lessons){
        $Maths = 0; $Eng = 0; $Kis = 0; $Sci = 0; $Social = 0; $Cre = 0; $day_subjects =array();
        foreach ($lessons as $key => $value) {
            if(($key>=(8*($this->day-1)))&&($key<=(8*$this->day)-1)){
                $day_subjects[] = $value;
            }
        }
        foreach ($day_subjects as $key => $value) {
            switch($value){
                case 'Maths':
                    ++$Maths;
                    if($Maths >= 2){
                        $this->max_day_lessons[] = 'Maths';
                        $remove= array_search('Maths', $this->morning_preferences);
                        $restore = array_splice($this->morning_preferences, $remove, 1);
                        array_push($this->morning_preferences, $restore[0]);

                        $remove= array_search('Maths', $this->midday_preferences);
                        $restore = array_splice($this->midday_preferences, $remove, 1);
                        array_push($this->midday_preferences, $restore[0]);

                        $remove= array_search('Maths', $this->evening_preferences);
                        $restore = array_splice($this->evening_preferences, $remove, 1);
                        array_push($this->evening_preferences, $restore[0]);

                        shuffle($this->morning_preferences);
                        shuffle($this->midday_preferences);
                        shuffle($this->evening_preferences);
                    }
                    break;
                case 'Eng':
                    ++$Eng;
                    if($Eng >= 2){
                        $this->max_day_lessons[] = 'Eng';
                        $remove= array_search('Eng', $this->morning_preferences);
                        $restore = array_splice($this->morning_preferences, $remove, 1);
                        array_push($this->morning_preferences, $restore[0]);

                        $remove= array_search('Eng', $this->midday_preferences);
                        $restore = array_splice($this->midday_preferences, $remove, 1);
                        array_push($this->midday_preferences, $restore[0]);

                        $remove= array_search('Eng', $this->evening_preferences);
                        $restore = array_splice($this->evening_preferences, $remove, 1);
                        array_push($this->evening_preferences, $restore[0]);

                        shuffle($this->morning_preferences);
                        shuffle($this->midday_preferences);
                        shuffle($this->evening_preferences);
                    }
                    break;
                case 'Kis':
                    ++$Kis;
                    if($Kis >= 2){
                        $this->max_day_lessons[] = 'Kis';
                        $remove= array_search('Kis', $this->morning_preferences);
                        $restore = array_splice($this->morning_preferences, $remove, 1);
                        array_push($this->morning_preferences, $restore[0]);

                        $remove= array_search('Kis', $this->midday_preferences);
                        $restore = array_splice($this->midday_preferences, $remove, 1);
                        array_push($this->midday_preferences, $restore[0]);

                        $remove= array_search('Kis', $this->evening_preferences);
                        $restore = array_splice($this->evening_preferences, $remove, 1);
                        array_push($this->evening_preferences, $restore[0]);

                        shuffle($this->morning_preferences);
                        shuffle($this->midday_preferences);
                        shuffle($this->evening_preferences);
                    }
                    break;
                case 'Sci':
                    ++$Sci;
                    if($Sci >= 2){
                        $this->max_day_lessons[] = 'Sci';
                        $remove= array_search('Sci', $this->morning_preferences);
                        $restore = array_splice($this->morning_preferences, $remove, 1);
                        array_push($this->morning_preferences, $restore[0]);

                        $remove= array_search('Sci', $this->midday_preferences);
                        $restore = array_splice($this->midday_preferences, $remove, 1);
                        array_push($this->midday_preferences, $restore[0]);

                        $remove= array_search('Sci', $this->evening_preferences);
                        $restore = array_splice($this->evening_preferences, $remove, 1);
                        array_push($this->evening_preferences, $restore[0]);

                        shuffle($this->morning_preferences);
                        shuffle($this->midday_preferences);
                        shuffle($this->evening_preferences);
                    }
                    break;
                case 'Social':
                    ++$Social;
                    if($Social >= 1){
                        $this->max_day_lessons[] = 'Social';
                        $remove= array_search('Social', $this->morning_preferences);
                        $restore = array_splice($this->morning_preferences, $remove, 1);
                        array_push($this->morning_preferences, $restore[0]);

                        $remove= array_search('Social', $this->midday_preferences);
                        $restore = array_splice($this->midday_preferences, $remove, 1);
                        array_push($this->midday_preferences, $restore[0]);

                        $remove= array_search('Social', $this->evening_preferences);
                        $restore = array_splice($this->evening_preferences, $remove, 1);
                        array_push($this->evening_preferences, $restore[0]);

                        shuffle($this->morning_preferences);
                        shuffle($this->midday_preferences);
                        shuffle($this->evening_preferences);
                    }
                    break;
                case 'Cre':
                    ++$Cre;
                    if($Cre >= 1){
                        $this->max_day_lessons[] = 'Cre';
                        $remove= array_search('Cre', $this->morning_preferences);
                        $restore = array_splice($this->morning_preferences, $remove, 1);
                        array_push($this->morning_preferences, $restore[0]);

                        $remove= array_search('Cre', $this->midday_preferences);
                        $restore = array_splice($this->midday_preferences, $remove, 1);
                        array_push($this->midday_preferences, $restore[0]);

                        $remove= array_search('Cre', $this->evening_preferences);
                        $restore = array_splice($this->evening_preferences, $remove, 1);
                        array_push($this->evening_preferences, $restore[0]);

                        shuffle($this->morning_preferences);
                        shuffle($this->midday_preferences);
                        shuffle($this->evening_preferences);
                    }
                    break;
                default:
                    break;
            }
        }
        return;
    }

    public function check_class($lessons){
        $Maths = 0; $Eng = 0; $Kis = 0; $Sci = 0; $Social = 0; $Cre = 0; $day_subjects =array();

        foreach ($lessons as $key => $value) {
                $day_subjects[] = $value;
        }
        foreach ($day_subjects as $key => $value) {
            switch($value){
                case 'Maths':
                    ++$Maths;
                    if($Maths >= 9){
                        $this->satisfied[] = 'Maths';
                    }
                    break;
                case 'Eng':
                    ++$Eng;
                    if($Eng >= 7){
                        $this->satisfied[] = 'Eng';
                    }
                    break;
                case 'Kis':
                    ++$Kis;
                    if($Kis >= 6){
                        $this->satisfied[] = 'Kis';
                    }
                    break;
                case 'Sci':
                    ++$Sci;
                    if($Sci >= 6){
                        $this->satisfied[] = 'Sci';
                    }
                    break;
                case 'Social':
                    ++$Social;
                    if($Social >= 5){
                        $this->satisfied[] = 'Social';
                        
                    }
                    break;
                case 'Cre':
                    ++$Cre;
                    if($Cre >= 4){
                        $this->satisfied[] = 'Cre';
                    }
                    break;
                default:
                    break;
            }
        }
        return;
    }

    public function choose($given_teachers, $time, $current_day){
        if($current_day > $this->day){
            $this->day = $current_day;
            $this->max_day_lessons = array();
        }
        if($current_day > $this->day && ($current_day == 3 || $current_day == 5)){
            $this->morning_preferences = $this->restore_morning;
            $this->midday_preferences = $this->restore_midday;
            $this->evening_preferences = $this->restore_evening;
        }

        if(sizeof($this->timetable)== 32 || sizeof($this->timetable)== 33){
            $this->setsub('PPI');
            return -101;
        }

        if(empty($given_teachers)){
            $this->setsub('FREE');
            return -101;
        }

        $position = 0;
        switch ($time) {
            case 1:
            while ($position < sizeof($this->morning_preferences)) {
            $preference_index = $this->translate($this->morning_preferences[$position]);
            $subject_teacher = $this->teachers[$preference_index];
            
            if(in_array($subject_teacher, $given_teachers) && !in_array($this->morning_preferences[$position], $this->max_day_lessons) && !in_array($this->morning_preferences[$position], $this->satisfied)){
                $this->setsub($this->morning_preferences[$position]);
                $this->distribute($this->timetable);
                $this->check_class($this->timetable);
                $return_value= array_search($subject_teacher, $given_teachers);
                return $return_value;
            }
            else{
                ++$position;
            }
            if($position == sizeof($this->morning_preferences)){$this->setsub('PE'); return -101;}
            }
                break;
            
            case 2:
                while ($position < sizeof($this->midday_preferences)){
                    $preference_index = $this->translate($this->midday_preferences[$position]);
                    $subject_teacher = $this->teachers[$preference_index];
                    if(in_array($subject_teacher, $given_teachers) && !in_array($this->midday_preferences[$position], $this->max_day_lessons) && !in_array($this->midday_preferences[$position], $this->satisfied)){
                            $this->setsub($this->midday_preferences[$position]);
                            $this->distribute($this->timetable);
                            $this->check_class($this->timetable);
                            $return_value = array_search($subject_teacher, $given_teachers);
                            return $return_value;
                        }
                        else{
                            ++$position;
                        }
            
                    if($position == sizeof($this->midday_preferences)){$this->setsub('PE'); return -101;}
                    }
                break;

            case 3:
                while ($position < sizeof($this->evening_preferences)) {
                        $preference_index = $this->translate($this->evening_preferences[$position]);
                        $subject_teacher = $this->teachers[$preference_index];
                        if(in_array($subject_teacher, $given_teachers) && !in_array($this->evening_preferences[$position], $this->max_day_lessons) && !in_array($this->evening_preferences[$position], $this->satisfied)){
                            $this->setsub($this->evening_preferences[$position]);
                            $this->distribute($this->timetable);
                            $this->check_class($this->timetable);
                            $return_value= array_search($subject_teacher, $given_teachers);
                            return $return_value;
                        }
                        else{
                            ++$position;
                        }
                        if($position == sizeof($this->evening_preferences)){$this->setsub('PE'); return -101;}
                    }
                        break;
            default:
                break;
            }

    }
}

?>