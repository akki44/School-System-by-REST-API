<?php include('header.php') ?>
<!------ Include the above in your HEAD tag ---------->

 <script type="text/javascript">

 jQuery(document).ready(function() {

               

      jQuery.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "http://localhost/MYAPI/Student-Fetch-records.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            jQuery(".well").html(response); 
            //alert(response);
        }

    });

});

</script>

<div class="container">
  <div class="row">
  

<div class="btn-toolbar">
    <button class="btn btn-primary">New User</button>
    <button id="display" class="btn">View All Students</button>
</div>
<div class="well">
    <!--<table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Tompson</td>
          <td>the_mark7</td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        
      </tbody>
    </table> -->
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>


</div>
</div>

<?php include('footer.php') ?>