<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The View</title>
</head>
<body>
    <h2>List if students from template </h2>

    <?php foreach($students as $key => $value):
         ?>
         <ul>
         <?php if(is_array($value)):?>
         <?php foreach ($value as $attribute => $val): ?>
         <li> <?= $attribute ?> => <?= $val ?> </li>
         <?php endforeach; ?>
         <?php else: ?>
         <li> <?= $key ?> => <?=$value ?></li>
         <?php endif; ?>
         </ul><hr/>
         <?php endforeach; ?>

         <?php if($isLeapYear): ?>
         <?= $year ?> is a leap year;
         <?php else : ?>
         <?= $year ?> is not a leap year;
         <?php endif; ?>
</body>
</html>