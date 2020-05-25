<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes a potato salad <br>";
            }
            function makeSpecialDish(){
                echo " The special dish is Rajmah Chaul <br>";
            }
        }
        class PunjabiChef extends Chef{
            function makeSaag(){
                echo "The chef makes yummy Saag and Makki di roti <br>";
            }
            function makeSpecialDish(){     // overiding the method
                echo " The special dish is Kofte <br>";
            }
            
                
            

        }
        $chef = new Chef();
        $chef->makeChicken();

        $punjabiChef = new PunjabiChef();
        $punjabiChef->makeChicken(); 
        $punjabiChef->makeSpecialDish();
    ?>
</body>
</html>