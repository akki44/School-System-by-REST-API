<?php include('header.php') ?>

<div class="container">
<div class="col-md-offset-3 col-md-5">
    <div class="form-area">  
        <form role="form" id="StudentReg" method="post" action="">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Student Registration Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" >
					</div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" >
                    </div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" >
					</div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="standard" name="standard" placeholder="Standard" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" >
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="address" name="address" placeholder="Address" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" >
					</div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="location" name="location" placeholder="Location" >
                    </div>
					            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>

<script>
jQuery("#StudentReg").on("submit",function(event){
      event.preventDefault();

    jQuery.ajax({
                    type: "POST",
                    url: "http://localhost/MYAPI/Student/CreateStudent.php",
                    data: jQuery(this).serialize(),
                    success: function(data) {
                        var responsecode = data.status;

                        if(data.status="success"){
                                alert("data successfully inseted");
                        }
                        else {
                            alert("data not inseted");
                        }
                        //jQuery("#chatbox").append(data+"<br/>");//instead this line here you can call some function to read database values and display
                        

                },
            });
});

</script>

</div>
</div>

</body>
</html>

<?php include('footer.php') ?>