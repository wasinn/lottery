<?php
$json = file_get_contents("run_results2.json");
//$json = file_get_contents("https://www.parsehub.com/api/v2/runs/tU_qHHPqaREDqHDEzKf18TOf/data?api_key=t0vhL2Hmuf0mO-0TisAoB_jL&format=json");
$obj = json_decode($json, true); 

//echo $obj['selection1']['0']['name'];


//loop
/*foreach($obj['selection1'] as $mydata) {
	echo $mydata['name'] . '<br/>';
}*/

?>

<head>
  <title>Lotto checker in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/my.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <h4 class="text-center bg-primary">รางวัลที่ 1</h4>
      <h1 id="price0" class="text-center"><?php echo $obj['selection1']['0']['name'];?></h1>
    </div>
    <div class="col-sm-4">
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <h4 class="text-center bg-primary">เลขท้าย 2 ตัว</h4>
      <h2 id="price1" class="text-center"><?php echo $obj['selection1']['1']['name'];?></h2>
    </div>
    <div class="col-sm-4">
      <h4 class="text-center bg-primary">รางวัลเลขหน้า 3 ตัว รางวัลเลขท้าย 3 ตัว</h4>
      <h2 id="price2" class="text-center"><?php echo $obj['selection1']['2']['name'];?></h2>
    </div>
    <div class="col-sm-4">
      <h4 class="text-center bg-primary">รางวัลเลขท้าย 3 ตัว</h4>
      <h2 id="price3" class="text-center"><?php echo $obj['selection1']['3']['name'];?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <h4 class="text-center bg-primary">รางวัลข้างเคียงรางวัลที่ 1</h4>
      <h2 id="price4" class="text-center"><?php echo $obj['selection1']['4']['name'];?></h2>
    </div>
    <div class="col-md-8">
      <h4 class="text-center bg-primary">รางวัลผลสลากกินแบ่งรัฐบาล รางวัลที่ 2</h4>
      <h2 id="price5" class="text-center"><?php echo $obj['selection1']['5']['name'];?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center bg-primary">ผลสลากกินแบ่งรัฐบาล ตรวจหวย รางวัลที่ 3</h4>
      <h2 id="price6" class="text-center"><?php echo $obj['selection1']['6']['name'];?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center bg-primary">ผลสลากกินแบ่งรัฐบาล ตรวจหวย รางวัลที่ 4</h4>
      <h2 id="price7" class="text-center"><?php echo $obj['selection1']['7']['name'];?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center bg-primary">ผลสลากกินแบ่งรัฐบาล ตรวจหวย รางวัลที่ 5</h4>
      <h2 id="price8" class="text-center"><?php echo $obj['selection1']['8']['name'];?></h2>
    </div>
  </div>

</div>



</body>
