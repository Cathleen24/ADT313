<h1>Hands-on-3a</h1>
<?php
$studentID = 0;
    $table = array(
        "Header" => array(
            "Student ID",
            "Firstname",
            "Lastname",
            "Section",
            "Course",
            "YearLevel"
        ),
        "Body"=>[
            array(
                "Firstname" => "Cathleen",
                "Lastname" => "Bartolome",
                "Section" => "A",
                "Course" => "Bachelor of scieence in Information Technology",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            ),
            array(
                "Firstname" => "First_Name",
                "Lastname" => "Last_Name",
                "Section" => "Section_Info",
                "Course" => "Course_Info",
                "YearLevel" => "3"
            )
        ]
        );
    
    $studentID = 0;

    echo "<table border ='5'>";
    echo "<tr>";
    
    foreach ($table["Header"] as $header){
        echo "<th>$header</th>";
    }
    echo "</tr>";

    foreach($table["Body"] as $row){
        echo"<tr>";
        echo "<td>".($studentID + 1)."</td>";
          $studentID++;
    foreach($table["Header"] as $header){
        if ($header !== "Student ID"){
        $x = str_replace(' ', '', $header);
        echo "<td>{$row[$x]}</td>";
        }
    }
    echo "</tr>";
    }
  ?>

