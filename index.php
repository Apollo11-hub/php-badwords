<?php 

$testo_lorem ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam temporibus libero nemo minima pariatur quod accusantium tenetur neque sit, incidunt fuga quasi necessitatibus quae impedit modi sequi maxime? Unde impedit saepe eum laboriosam eius doloremque autem placeat, illo nostrum dolores ad consectetur quaerat fuga, nihil fugiat, numquam facilis rerum obcaecati veritatis eveniet earum recusandae totam. Voluptatem dignissimos nulla quo asperiores saepe ad vero totam et fugiat vitae? Neque nobis aperiam numquam corrupti ab ratione molestias optio commodi consectetur asperiores ipsa tempora praesentium porro, qui id veniam minima eveniet nemo. Itaque veritatis nulla minima temporibus impedit, sint necessitatibus earum recusandae amet consequatur neque architecto doloribus non, possimus qui nihil fuga quas distinctio voluptatibus quibusdam reiciendis tempore. Cupiditate saepe consequuntur quis, provident eaque exercitationem vitae fuga perferendis dolorem architecto quas voluptatibus sapiente reprehenderit nesciunt! Tempora id asperiores labore reprehenderit enim iusto, architecto repellendus doloremque ducimus fugiat, temporibus excepturi hic, soluta impedit quod tenetur nihil modi quaerat itaque voluptas adipisci omnis provident voluptatibus. Similique beatae quibusdam nobis! Porro, laborum. Eveniet nostrum expedita eaque culpa alias ut vel ipsum voluptatem ratione. Veniam sit ipsum nam incidunt animi cupiditate praesentium eligendi voluptate, commodi, dolorem in expedita. Natus iste quo beatae aliquam ducimus dicta quisquam perspiciatis?";

$testo_lorem_censurato = str_replace('dolorem', '<strong> *** </strong>' , $testo_lorem);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Questo testo lorem non è censurato</h1>
  <p> <?php echo $testo_lorem ?></p>
  <h2>Questo testo lorem è censurato</h2>
  <p> <?php echo $testo_lorem_censurato ?></p>

</body>
</html>