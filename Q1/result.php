<!DOCTYPE html>
<html lang="en">
<head>
    <title>Result</title>
</head>
<body>
    <h1>Result of the Student</h1>

    <?php
    //class to get the marks of the student
    class subjectMarks
    {
        public $ca1;
        public $ca2;
        public $finalexm;

        function __construct($ca1, $ca2, $finalexm)
        {
            $this->ca1 = $ca1;
            $this->ca2 = $ca2;
            $this->finalexm = $finalexm;
        }
    }

    //class to calculate the total marks in each subject by fetching the data from inherited class
    class totalMarks extends subjectMarks
    {
        public $subTotalMakrs;
        function getSubTotalMarks()
        {
            $this->subTotalMakrs = $this->ca1 + $this->ca2 + $this->finalexm;
            return $this->subTotalMakrs;
        }
    }

    //function to generate the percentage        
    function percent($tsub1, $tsub2, $tsub3)
    {
        $total = $tsub1 + $tsub2 + $tsub3;
        return ($total / 300) * 100;
    }

    // receiving the marks of each subject in the objects
    $html = new totalMarks($_POST['ca1html'], $_POST['ca2html'], $_POST['fehtml']);
    $css = new totalMarks($_POST['ca1css'], $_POST['ca2css'], $_POST['fecss']);
    $js = new totalMarks($_POST['ca1js'], $_POST['ca2js'], $_POST['fejs']);

    $result = percent($html->getSubTotalMarks(), $css->getSubTotalMarks(), $js->getSubTotalMarks());
    $result = round($result, 2); // rounding off the percentage 

    //printing the result
    echo "Total Marks Obtained in HTML (out of 100) : " . $html->getSubTotalMarks();
    echo "<br>";
    echo "Total Marks Obtained in CSS (out of 100) : " . $css->getSubTotalMarks();
    echo "<br>";
    echo "Total Marks Obtained in Js (out of 100) : " . $css->getSubTotalMarks();

    echo "<h3>Percentage Obtained : $result %</h3>";

    if ($result >= 33) { echo "<h1>Result : Pass</h1>";} 
    else { echo "<h1>Result : Fail</h1>";}

    ?>

</body>
</html>