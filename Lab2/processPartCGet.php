<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Part C - GET - PHP</title>
</head>
<body>
    <?php
        function findZodiacSign($dayBirth, $monthBirth)
        {
            if (($monthBirth == "March" && $dayBirth >= 21) || ($monthBirth == "April" && $dayBirth <= 19 ))//Aries
            {
                return "Aries";
            }//End Aries
            if (($monthBirth == "April" && $dayBirth >= 20) || ($monthBirth == "May" && $dayBirth <= 20 ))//Taurus
            {
                return "Taurus";
            }//End Taurus
            if (($monthBirth == "May" && $dayBirth >= 21) || ($monthBirth == "June" && $dayBirth <= 20 ))//Gemini
            {
                return "Gemini";
            }//End Gemini
            if (($monthBirth == "June" && $dayBirth >= 21) || ($monthBirth == "July" && $dayBirth <= 22 ))//Cancer
            {
                return "Cancer";
            }//End Cancer
            if (($monthBirth == "July" && $dayBirth >= 23) || ($monthBirth == "August" && $dayBirth <= 22 ))//Leo
            {
                return "Leo";
            }//End Leo
            if (($monthBirth == "August" && $dayBirth >= 23) || ($monthBirth == "September" && $dayBirth <= 22 ))//Virgo
            {
                return "Virgo";
            }//End Virgo
            if (($monthBirth == "September" && $dayBirth >= 23) || ($monthBirth == "October" && $dayBirth <= 22 ))//Libra
            {
                return "Libra";
            }//End Libra
            if (($monthBirth == "October" && $dayBirth >= 23) || ($monthBirth == "November" && $dayBirth <= 21 ))//Scorpio
            {
                return "Scorpio";
            }//End Scorpio
            if (($monthBirth == "November" && $dayBirth >= 22) || ($monthBirth == "December" && $dayBirth <= 21 ))//Sagittarius
            {
                return "Sagittarius";
            }//End Sagittarius
            if (($monthBirth == "December" && $dayBirth >= 22) || ($monthBirth == "January" && $dayBirth <= 19 ))//Capricorn
            {
                return "Capricorn";
            }//End Capricorn
            if (($monthBirth == "January" && $dayBirth >= 20) || ($monthBirth == "February" && $dayBirth <= 18 ))//Aquarius
            {
                return "Aquarius";
            }//End Aquarius
            if (($monthBirth == "February" && $dayBirth >= 19) || ($monthBirth == "March" && $dayBirth <= 20 ))//Pisces
            {
                return "Pisces";
            }//End Pisces
        }
        echo "<p>Hello, ".$_GET['fName']." ".$_GET['lName']."</p>";

        echo "<p>Your zodiac sign is: ".findZodiacSign($_GET['dBirth'],$_GET['mBirth'])."</p>";
    ?>
</body>
</html>