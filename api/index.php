<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>

    <h1 class="text">TermProject:</h1>
    <p>
        
<h1>Title: Development of a Web-Based Student Information System Using PHP</h1>
<h2>Abstract:</h2> This project involves creating a web-based Student Information System (SIS) using PHP to manage student data efficiently.

<h2>Introduction:</h2> The SIS is designed to streamline the administration of student records, including personal details, academic performance, and course enrollments.

<h2>Objectives:</h2>
<ul>
<li>
Develop a user-friendly SIS.
</li>
<li>
Implement secure user authentication.
</li>
<li>
Facilitate easy data management.
</li>
</ul>

<h2>Scope:</h2> The system will include modules for Student Registration, Course Management, and Academic Records.

<h2>Methodology:</h2> The project will be developed using PHP, MySQL, HTML, and CSS, following Agile methodology for iterative improvements.

<h2>Expected Outcomes:</h2> A functional SIS that enhances data management and administrative efficiency in academic settings.

<h2>Conclusion:</h2> This project showcases the application of PHP in developing an effective Student Information System.
    </p>
    <h1 class="text">TeamMembers:</h1>
    <?php
 $TeamMembers = array(
        new Student("BSCS51F22S043", "NajeeUllah"),
        new Student("BSCS51F22S045", "Osama"),
        new Student("BSCS51F22S050", "Ahmed"),
        new Student("BSCS51F22S012", "Hammad"),
      );

      final class Student{
        public $name;
        public $rollNo;

        function __construct($rollNo, $name){
          $this->name = $name;
          $this->rollNo = $rollNo;
        }
      }
    foreach ($TeamMembers as $member) {
        echo"
                    <p>$member->name
                    <br>
                    $member->rollNo</p>
            <hr>
        ";
    }


    ?>
</body>

</html>