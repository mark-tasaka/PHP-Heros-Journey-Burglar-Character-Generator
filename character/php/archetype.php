<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 6;
    $enduranceLevel2 = 6 + rand(1, 6);
    $enduranceLevel3 = 6 + rand(1, 6) + rand(1, 6);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 2;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 3;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 4;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 6;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 7;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 8;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 10;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}

function getAttackBonus($level)
{
    $bonus = 0;

    if($level >= 4 && $level <= 5)
    {
        $bonus = 1;
    }
    else if($level >= 6 && $level <= 7)
    {
        $bonus = 2;
    }
    else if($level == 8)
    {
        $bonus = 3;
    }
    else if($level == 9)
    {
        $bonus = 4;
    }
    else if($level == 10)
    {
        $bonus = 5;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (15 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function burglarSaveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws made to reduce or avoid traps (both ordinary and magical).<br/><br/>";

    return $message;
}


function thiefCant($score)
{
    $message = "";

    if($score >= 9)
    {
        $message = "<span class='archetypeBold'>Thief's Cant:</span> The secretive language used between Burglars.<br/><br/>";
    }

    return $message;
}


function decipherLanguages($score)
{
    $message = "";

    if($score >= 15)
    {
        $message = "<span class='archetypeBold'>Decipher Languages:</span> Ability to decipher maps, scripts and unknown languages.<br/><br/>";
    }

    return $message;
}

function usePoison($score, $score2)
{
    $message = "";

    if($score >= 13 && $score2 >= 13)
    {
        $message = "<span class='archetypeBold'>Poison Use:</span> Use of poisons and advantage to saving throws against poisons.<br/><br/>";
    }

    return $message;
}


function proficientClimber($score)
{
    $message = "";

    if($score >= 15)
    {
        $message = "<span class='archetypeBold'>Proficient Climber:</span> Advantage when Thievery checks are made to climb.<br/><br/>";
    }

    return $message;
}



function thiefAcrobat($score)
{
    $message = "";

    if($score >= 15)
    {
        $message = "<span class='archetypeBold'>Thief-Acrobat:</span> Able to use the Acrobatics ability of a Swordsman of equal level.<br/><br/>";
    }

    return $message;
}



function thievery($level)
{
    if($level >= "1" && $level <= "3")
    {
        $lore = "<span class='archetypeBold'>Thievery: 2</span><br/><br/><span class='archetypeBold'>Backstab</span><br/><br/>";
    }
    else if($level >= "4" && $level <= "6")
    {
        $lore = "<span class='archetypeBold'>Thievery: 3</span><br/><br/><span class='archetypeBold'>Backstab</span><br/><br/>";
    }
    else if($level >= "7" && $level <= "9")
    {
        $lore = "<span class='archetypeBold'>Thievery: 4</span><br/><br/><span class='archetypeBold'>Backstab</span><br/><br/>";
    }
    else
    {
        $lore = "<span class='archetypeBold'>Thievery: 5</span><br/><br/><span class='archetypeBold'>Backstab</span><br/><br/>";
    }

    return $lore;
}


?>