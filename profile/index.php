<?php
    require("../config.php");
    

     if(isset($_POST['submit']))
          {

            $text1=$_POST['firstname'];
            $text2=$_POST['lastname'];
            $text3=$_POST['birthday'];
			$text4=$_POST['country'];
            $text5=$_POST['height'];
            $text6=$_POST['weight'];
			$text7=$_POST['name'];
            $text8=$_POST['position'];
            $text9=$_POST['number'];
			$text10=$_POST['college'];
            $text11=$_POST['nba'];
			$text12=$_POST['image'];

             
            $query="insert into profile(firstname,lastname,birthday,country,height,weight,name,position,number,college,nba,image)values('$text1','$text2',$text3,'$text4','$text5','$text6','$text7','$text8','$text9','$text10','$text11', '$text12')";
           echo $query;

            if(mysqli_query($db,$query))
            {

                header("location:index.php");

                
            }
            else
            {
            echo"error occured=".mysqli_error($db);
            }
          }  

       
  mysqli_close($db);

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h4>PHOTO</h4></div>
    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center" >
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" name="image" id="image" class="text-center center-block file-upload">
      </div></hr><br>
	  

          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="firstname"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="first name" title="enter your first name if any." required="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="lastname"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last name" title="enter your last name if any." required="true">
                          </div>
                      </div>
					  <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="DATE"><h4>BirthDay</h4></label>
                              <input type="date" name="birthday" class="form-control datepicker" placeholder="Select date"  class="form-control" required="true">
                          </div>
                      </div>
					  
					  
                     <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="country"><h4>Country</h4></label>
                              <input type="text" class="form-control" name="country" id="country" placeholder="country" title="enter your last country if any." required="true">
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="height"><h4>height</h4></label>
                              <input type="text" class="form-control" name="height" id="height" placeholder="height" title="enter your last country if any." required="true">
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="weight"><h4>weight</h4></label>
                              <input type="text" class="form-control" name="weight" id="weight" placeholder="weight" title="enter your last country if any." required="true">
                          </div>
                      </div>
				
          
                     
                      <h4>Current Team<h4><hr/>
                      <div class="form-group">
                          
                          <div class="col-xs-4">
                              <label for="name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Name" title="enter your first name if any." required="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-4">
                              <label for="position"><h4>position</h4></label>
                              <input type="position" class="form-control" name="position" id="position" placeholder="somewhere" title="enter a location" required="true">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-4">
                              <label for="number"><h4>number</h4></label>
                              <input type="number" class="form-control" name="number" id="number" placeholder="number" title="enter your password." required="true">
                          </div>
                      </div>
					  
					  <h4>Mic<h4><hr/>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="college"><h4>College</h4></label>
                              <input type="text" class="form-control" name="college" id="college" placeholder="first name" title="enter your first name if any." required="true">
                          </div>
                      </div>
					  <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="nba"><h4>NBA Default</h4></label>
                              <input type="text" class="form-control" name="nba" id="nba" placeholder="NBA" title="enter your first name if any." required="true">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              </div>
             </div><!--/tab-pane-->
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
	<script>
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
	</script>