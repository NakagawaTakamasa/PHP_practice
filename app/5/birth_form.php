<html>
<body>

<h1>生年月日を入力するフォームを作ろう</h1>

<label for="year">西暦</label>
<select name="year" id="year">
<?php
$now = date("Y");
for($i = 1950; $i <= $now; $i++){ ?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php } ?>
</select>年
<br>

<select name="month">
<?php for($i = 1; $i <= 12; $i++){ ?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php } ?>
</select>月

<!-- <select name="month">
<option value="1">1</option>
<option value="2">2</option>
</select>月 -->

<select name="day">
<?php for($i = 1; $i <= 31; $i++){ ?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php } ?>
</select>日

</body>
</html>
