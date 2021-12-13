<?php
function tinh_chi_so_BMI($chieu_cao,$can_nang)
{
	$chieu_cao = $chieu_cao/100;
	$chieu_cao = $chieu_cao * $chieu_cao;
	$BMI = $can_nang / $chieu_cao;
	$BMI = round($BMI,2);
	return $BMI;
}
function the_trang_suc_khoe($BMI)
{
	$result = '';
	if($BMI < 18.5){$result = '<b> UNDERWEIGHT</b> <br>
								<h4>Health Suggestions:</h4>
								1. When you are underweight, you may feel full faster. Eat five to six smaller meals during the day rather than two or three large meals.<br>
								2. Eating a variety of fruit and vegetables every day.<br>
								3. Basing meals on potatoes, bread, rice, pasta or other starchy carbohydrates.<br>
								4. Snack on nuts, peanut butter, cheese, dried fruits and avocados.<br>
								5. Drinking plenty of fluids. The government recommends 6 to 8 glasses a day. But try not to have drinks just before meals to avoid feeling too full to eat.<br>
								6. Exercise, especially strength training, can help you gain weight by building up your muscles. Exercise may also stimulate your appetite.<br>';} 

	if(18.5 <= $BMI && $BMI < 25){$result = '<b>NORMAL (healthy weight)</b><br>
								<h4> Tips to Maintain a Healthy Weight: </h4>
								* Make healthy living a priority for yourself and your family<br>
								* Choose to eat good, healthy food<br>
								* Think ‘2 fruit and 5 vegies’ every day<br>
								* Drink water instead of sugary drinks<br>
								* Be active for at least 30 minutes every day<br>
								* Sit less and move more<br>
								* Limit alcohol intake<br>
								* Make healthier choices when eating out<br>
								* Eat breakfast everyday';}

	if(25 <= $BMI && $BMI < 30 ){$result = '<b>OVERWEIGHT</b><br>
								<h4>Health Suggestions:</h4>
								1. Do not skip breakfast. Skipping breakfast will not help you lose weight. You could miss out on essential nutrients and you may end up snacking more throughout the day because you feel hungry.<br>
								2. Eating at regular times during the day helps burn calories at a faster rate. It also reduces the temptation to snack on foods high in fat and sugar.<br>
								3. Eat plent of fruit and veggies because they are low in calories and fat, and high in fibre – 3 essential ingredients for successful weight loss. <br>
								4. Exercise- being active is key to losing weight.<br>
								5. Using smaller plates can help you eat smaller portions.<br>
								6. To avoid temptation, do not stock junk food – such as chocolate, biscuits, crisps and sweet fizzy drinks – at home.<br>
								7. Cut down on alcohol. A standard glass of wine can contain as many calories as a piece of chocolate. Over time, drinking too much can easily contribute to weight gain.';}

	if($BMI >= 30){$result = '<b>OBESE</b><br>
								<h4><Health Suggestions:</h4>
								1. A diet that includes a variety of foods, such as vegetables, fruits, low-fat dairy products, lean meats and other sources of protein, and whole grains.<br>
								2. Limiting or avoiding foods that are high in calories and low in nutrients such as highly processed or fried foods; refined carbohydrates, such as cakes, cookies, and white breads; packaged snack foods; and fatty cuts of meat<br>
								3. Drinking plenty of water helps you feel full and avoid overeating when you’re trying to lose weight<br>
								4. Limit or avoid drinks that are high in calories and added sugar, such as sodas, fruit juices, sports drinks, and alcoholic beverages<br>
								5. Avoid eating in front of the television or in a car, it can distract you from thinking about what and how much you’re eating. Sitting down for meals at a table can make you more aware.<br>
								6. Regular physical activity promotes weight loss by burning calories and increasing your metabolic rate.<br>';}
	return $result;
}
?>
<html>
<head>
	<title>Calculate Your BMI - Standard BMI Calculator</title>
	<style>
	body {
	background-image:url("Images/b2.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}
ul{
	position: absolute;
	top: 550px;
	left: 550px;
}


ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: black;
	padding: 5px 20px;
	border: 1px solid transparent;
}
ul li a:hover{
	background-color: #fff;
	color: #000;

}

.button{
	position: absolute;
	top: 550px;
	left: 550px;


}
.btn{
	border: 5px solid black;
	padding: 10px 30px;
	color: black;
	text-decoration: none;

}
.btn:hover{
	background-color: #fff;
	color: #000;
}



</style>


	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="description" content="Calculate Your BMI" />
	<meta name="keywords" content="Body Max Index, BMI, Quetelet index, height, weight, Calculator, healthy" />
</head>
<body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	  $(".BMI").submit(function (e){
		if ($("#chieu_cao").val() == ""){
		  $("#chieu_cao").css('box-shadow', '0px 0px 2px red');
		  alert('Please input your height');
		  e.preventDefault(); 
		}
		if ($("#can_nang").val() == ""){
		  $("#can_nang").css('box-shadow', '0px 0px 2px red');
		  alert('Please input you weight');
		  e.preventDefault(); 
		}
	  });
	});
	</script>
	<p align="center"><span style="font-size:30px"><b>CALCULATE YOUR BMI</b></span></p><br>
	<div align="center">
	<form method="post" class="BMI">
		<table border="0">
			<tr>
				<td><label for="chieu_cao"><font size="5">Your Height (cm):</font></label></td>
				<td><input type="text" name="chieu_cao" id="chieu_cao" value=""></td>
			</tr>
			<tr>
				<td><label for="can_nang"><font size="5">Your Weight (kg):</font></label></td>
				<td><input type="text" name="can_nang" id="can_nang" value=""></td>		
			</tr>
			<tr>
				<td></td>
				<td align="right"><input type="submit" value="COMPUTE BMI"></td>
			</tr>
		</table>
	</form>
	</div>
	<?php
		if (isset($_POST['chieu_cao'])){
			$chieu_cao = $_POST['chieu_cao'];
			$can_nang = $_POST['can_nang'];
			$BMI = tinh_chi_so_BMI($chieu_cao,$can_nang);
			$the_trang = the_trang_suc_khoe($BMI);
			echo "<div align='left' style='padding-left:10%; padding-bottom:30px;'>";
			echo "<font face='Arial' size='5'>";
			echo "Your BMI: ".$BMI;
			echo "<br>";
			echo "Condition Of Your Body: ".$the_trang;
			echo "</div>"; 
			echo "</font>";
			//echo "</b>";
			
			$id = $_GET['txtid'];
			
			?>

			<table align="center"><form method="post" action="bmicalc_exe.php">
    	    <?php
				if($BMI < 18.5)
				{
					$res = 'UNDERWEIGHT';
				}
				if(18.5 <= $BMI && $BMI < 25)
				{
					$res = 'NORMAL';
				}
				if(25 <= $BMI && $BMI < 30 )
				{
					$res = 'OVERWEIGHT';
				}
				if($BMI >= 30)
				{
					$res = 'OBESE';
				}
				?>
			<td><input type="hidden" name="txtid" value="<?php echo $id;?>"/></td>
            <td><input type="hidden" name="txtbmi" value="<?php echo $BMI.' - '.$the_trang;?>"/></td>
			<td><input type="hidden" name="txtbmi2" value="<?php echo $res;?>"/></td>
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            </td>
        </tr>
	</form></table> <?php
		}
	?>
	<div class="quangcao">
		<center>
			<script type="text/javascript"><!--
			google_ad_client = "ca-pub-1020443662623638";
			/* 336x280_1 */
			google_ad_slot = "2827231852";
			google_ad_width = 336;
			google_ad_height = 280;
			//-->
			</script>
			<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</center>
	</div>
</body>
</html>

