<?php
    $name1=$_POST['name'];
	$email1=$_POST['mail'];
	$address1=$_POST['address'];
	$state1=$_POST['state'];
	$check_in1=$_POST['CHECK_IN'];
	$check_out1=$_POST['CHECK_OUT'];
	$num_of_rooms1=$_POST['no_of_rooms'];
	$cost_of_each_room=4500;
	$amt=$num_of_rooms1*$cost_of_each_room;
	echo "<center><h2 style='background-color:powderblue'><font color='black'>Total amount to be paid is : $amt</font></h2></center>";
?>
<div id="bodyc"style="background-image: url(https://thumbs.dreamstime.com/b/blue-sky-clouds-abstract-art-background-watercolor-digital-artwork-136551201.jpg); width: 100%; height: 560px; "><br><br><br>

	<form name="Myform" id="form" method="post" action="payment.php">
		<h3> Confirm Details:</h3>
	<input name='name'<?php echo (isset($name1)) ? ('value = "'.$name1.'"') : "value = \"\""; ?>/>
 	<input name='email'<?php echo (isset($email1)) ? ('value = "'.$email1.'"') : "value = \"\""; ?>/>
 	<input name='address'<?php echo (isset($address1)) ? ('value = "'.$address1.'"') : "value = \"\""; ?>/>
 	<input name='state'<?php echo (isset($state1)) ? ('value = "'.$state1.'"') : "value = \"\""; ?>/>
 	<input name='check_in'<?php echo (isset($check_in1)) ? ('value = "'.$check_in1.'"') : "value = \"\""; ?>/>
 	<input name='check_out'<?php echo (isset($check_out1)) ? ('value = "'.$check_out1.'"') : "value = \"\""; ?>/>
 	<input name='num_of_rooms'<?php echo (isset($num_of_rooms1)) ? ('value = "'.$num_of_rooms1.'"') : "value = \"\""; ?>/>
 	<h3>Change Details:<a href="mystay.html">Go Back</a></h3>
 	<h3>Choose Payment Method:</h3>
 	<input type="radio" id="card" name="payment" value="Debit card/Credit Card">Debit card/Credit Card</value><br>
 	<span id="result1"></span><br><br>
	<input type="radio" id="others" name="payment" value="GooglePay/paytm/PhonePe">GooglePay/paytm/PhonePe</value><br>
	<span id="result2"></span><br><br>
    <input type="submit" name="submit" value="PAY" style="border-radius: 0 15px;background-color:powderblue;opacity:3.0                     ;padding-left: 1rem;margin-left: 630px;height: 35px;width:150px;font-weight: bold">
</form>
 	<script>
 		
 var result11 = document.getElementById('result1');
 var result12 = document.getElementById('result2');

var option = document.Myform.payment;
var prev = null;

for(var i = 0; i < option.length; i++) 
{
    option[i].onclick = function() 
    {
        console.log(this.value);
        if(this !== prev) 
        {
            prev = this;
            if(this.value=="GooglePay/paytm/PhonePe")
            {
            	document.getElementById('result1').innerHTML=" ";
            	var textdata = document.createTextNode("Enter Moblie number :  ");
            	var textfield = document.createElement("input");
        		 textfield.type = "text";
        		 textfield.value = "";
        		 result12.appendChild(textdata);
        		 result12.appendChild(textfield);

            }
            else if(this.value=="Debit card/Credit Card")
            {
            	document.getElementById('result2').innerHTML=" ";
            	var textdata1 = document.createTextNode("Card number :  ");
            	var textdata2 = document.createTextNode("CVV :  ");
            	var textdata3 = document.createTextNode("Expiry date(Month/Year) : ");
            	 var textfield1 = document.createElement("input");
        		 textfield1.type = "text";
        		 textfield1.value = "";
        		 var textfield2 = document.createElement("input");
        		 textfield2.type = "text";
        		 textfield2.value = "";
        		 var textfield3 = document.createElement("input");
        		 textfield3.type = "text";
        		 textfield3.value = "";
        		 result11.appendChild(textdata1);
        		 result11.appendChild(textfield1);
        		 result11.appendChild(textdata2);
        		 result11.appendChild(textfield2);
        		 result11.appendChild(textdata3);
        		 result11.appendChild(textfield3);
            }
        }
    };
}
</script>

</div>

  						  		  
	








	



