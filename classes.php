<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Teacher{
        public $name;
        public $designation;

  }
    class ScienceTeacher extends Teacher
    {

    }
    $x= new ScienceTeacher();
    $x->name="hari";
    $x->designations="x";
    echo $x->name;
    echo "<br>";
    echo $x->designations;
    ?>

</body>
</html>