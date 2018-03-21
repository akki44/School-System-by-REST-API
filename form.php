<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="span3">
        <h2>Sign Up</h2>
            <form id="registration" method="post" action="">
                <label>Name</label>
                <input type="text" name="name" class="span3">
                <label>Description</label>
                <input type="text" name="description" class="span3">
                <label>Price</label>
                <input type="text" name="price" class="span3">
                <label>Category Id</label>
                <input type="text" name="category_id" class="span3">
                <label>created</label>
                <input type="text" name="created" value="2014-06-01 01:12:26" class="span3">
                <label>modified</label>
                <input type="text" name="modified" value="2014-06-01 01:12:26" class="span3">
                <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                <input type="submit" name="buttonid" id="buttonid" value="Sign up" class="btn btn-primary pull-right">
                <div class="clearfix"></div>
            </form>
    </div>

<script>
jQuery("#registration").on("submit",function(event){
      event.preventDefault();

    jQuery.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: jQuery(this).serialize(),
                    success: function(data) {
                        //jQuery("#chatbox").append(data+"<br/>");//instead this line here you can call some function to read database values and display
                        alert(data);

                },
            });
});

</script>