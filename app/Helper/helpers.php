<?php

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function newName($path, $filename) {
    $res = "$path/$filename";
    if (!file_exists($res)) return $filename;
    $fnameNoExt = pathinfo($filename,PATHINFO_FILENAME);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $i = 1;
    while(file_exists($path."/".$fnameNoExt."_".str_pad($i, 2, '0', STR_PAD_LEFT).".".$ext)) $i++;
    return $fnameNoExt."_".str_pad($i, 2, '0', STR_PAD_LEFT).".".$ext;
}

function checktask($id){
    $talent = App\Models\Talent::where('id',$id)->first();
    $task = 3;
    if(!is_null($talent->statement))
      $task--;
    if($talent->selflog)
      $task--;
    if($talent->reflog->count()>=2)
      $task--;

    return $task;
}

function checkeform($id, $stage){
    $talent = App\Models\Talent::where('id',$id)->first();
    
    if($stage==1)
        if($talent)
            return true;
    if($stage==2)
        if($talent->academics->count()>0)
            return true;    
    if($stage==3)
        if($talent->user->group_id==3)
            if(!is_null($talent->research_id) && !is_null($talent->headquarters) && $talent->designations->count()>0 && $talent->cpdnsr->count()>0 && $talent->lnpt->count()>0 && $talent->interest->count()>0)
                return true;
        if($talent->user->group_id==7)
            if(!is_null($talent->headquarters) && $talent->designations->count()>0 && $talent->cpdnsr->count()>0 && $talent->lnpt->count()>0 && $talent->interest->count()>0)
                return true;        
    if($stage==4)
        if(!is_null($talent->statement))
            return true;
    return false;

}

function checkref($id, $stage){
    
    $recommend = App\Models\RefereeRecommendation::where('talent_id',$id)->whereNotNull('status_id')->count();
    $logbook = App\Models\RefLogbook::where('talent_id',$id)->count();
    if($stage==1)
        if($recommend==2)
            return true;
    if($stage==2)
        if($logbook==2)
            return true;    
     return false;

}

function getRefLog($referee_id, $talent_id){
    $item = App\Models\RefLogbook::
    where('talent_id',$talent_id)
    ->where('referee_id',$referee_id)
    ->first();

    return $item;
}

function generateRandomString($length = 8) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function getrecommend($val){
  if ($val ==1){
    return 'Weak';

  }elseif ($val ==2){
    return 'Average';
    
  }if ($val ==3){
    return 'Good';
    
  }if ($val ==4){
    return 'Honours';
    
  }if ($val ==5){
    return 'Excellent';
    
  }if ($val ==6){
    return 'Unable to comment';
    
  }
}

function getBirthdateFromIdentity($identity) {
    // substring identity to get bday
    $date = substr($identity, 0, 6);

    // use built-in DateTime object to work with dates
    $date = \DateTime::createFromFormat('ymd', $date);
    $now  = new \DateTime();

    // compare birth date with current date: 
    // if it's bigger bd was in previous century
    if ($date > $now) {
        $date->modify('-100 years');
    }

    return $date->format('Y-m-d');
}

function getAgeFromIdentity($identity){
  // substring identity to get bday
    //$date = substr($identity, 0, 6);

    // use built-in DateTime object to work with dates
    $datetime1 =  new \DateTime(getBirthdateFromIdentity($identity));//\DateTime::createFromFormat('ymd', $date);
    $datetime2  = new \DateTime('today');
    $interval = $datetime1->diff($datetime2);
    //return date("y-m-d",);
    return $interval->format('%y');
}

function getlevel($mark){
    if($mark<50)
        $level = 1;
    elseif($mark>=50 &&  $mark <70)
        $level = 2;
    elseif($mark>=70 &&  $mark <90)
        $level = 3;
    else
        $level = 4;

    return $level;
}

function getoverall($level){
  $o='';
if($level==1)
    $o = 'Average Level';
elseif($level==2)
    $o = 'Basic Level';
    
elseif($level==3)
    $o = 'Intermediate Level';
    
elseif($level==4)
    $o = 'High Level';
return $o;

}

function checkComplete(\App\Models\Talent $applicant){
    $count = 0;
    if(!is_null($applicant->statement))
        $count++;     

    if($applicant->recommend->whereNotNull('status_id')->count()==2)
        $count+=3; 
    else{
        if($applicant->recommend->count()>0 && $applicant->recommend->count()<2)
        $count++; 
        else
        $count+=2; 
    }
    if(($applicant->scv1->status_id??'')==1)
        $count++;
    if($applicant->recommend->count()>0)
        if($applicant->selflog)
            $count++; 
        

    if($applicant->recommend->count()>0)
        if($applicant->reflog->count()==2)
            $count+=2; 
        else if($applicant->reflog->count()==0){}
        else
            $count++; 

    return $count;
}

function array_search_partial($keyword) {
    $arr = ['html', 'php', 'bypass'];
    $bool = false;
    foreach($arr as $string) {
        if (strpos($keyword, $string) !== FALSE){
            $bool = true;
            return $bool;
            break;    
        }
        
    }
   
}