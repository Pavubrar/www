<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa)
            {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            function HasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Arts", 3.7);
        echo $student2->HasHonors();
    ?>
</body>
</html>