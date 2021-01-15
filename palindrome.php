<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
Palindrome or Not Palindrome String Check</title>

    <style>

        .system_developmen{
            width: 500px;
            height: 400px;
            margin: auto;
            background-color: skyblue;
            padding-left: 50px;
            padding-top: 20px;
        
        }

        .body{
            
            margin: 0;
            padding: 0;
        }
    
    
    </style>
    
</head>

<body>

<?php 

    if( isset( $_POST['submit'] ) ){

        $str = $_POST['number'];
        
        function IsPalindromeStr($string){

            if(strlen($string) <= 1){
                return true;
            }else{
                
                if(substr($string,0,1) == substr($string, (strlen($string) -1), 1)){

                    return IsPalindromeStr(substr($string, 1, strlen($string) - 2));
                }else{
                    return false;
                }

            }


        }
            
     $is_palindrome = IsPalindromeStr($str);
     
    }

?>



    
    
    <div class="system_developmen">


    <div class="row">
        <div class="col-md-12">

                <div class="shipping">
                <div class="card">
                <div class="card-header">
                    <h2 class=" card-header text-center">Palindrome or Not Palindrome String Check </h2>
                </div>
                <div class="card-body">
                   <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">



                  

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                        <label for="validationDefault01"><strong>Please Enter a String</strong></label>
                        <input name="number" type="text" class="form-control" placeholder="Enter a string">
                        </div>
                        
                    </div>


                   

                   

                    <div class="form-group">
                        
                        <input name="submit" class="btn btn-block btn-info" value="Culculate" type="submit">
                    </div>

                        <hr>
                   

            <div class="input-group">
                <div class=" input-group-prepend">
                    <div class="input-group-text">
                        <strong>Result is = </strong>
                    </div>
                </div>

            


                        <div style="height: 119px; width: 440px; background-color:	#E8E8E8; overflow:auto; padding: 10px; margin-top: 15px;" > 

                        <?php 

                     

                        if($is_palindrome ){

                            echo "Palindrome";
                        }else{

                            echo "Not Palindrome";
                        }
                        
                       
                        
                        
                        
                        ?>
                        
                        </div>

                      
               


                    
            </div>
        </div>
    </form>

                </div>
                <br> <br>
                <div class="card-footer">
                    <a class=" card-link font-weight-bold" href="https://www.ddad-bd.com">
                    Dokane Dokane Ad
                </a>
                </div>
            </div>
                </div>
           



        </div>
    </div>

    
    </div>


    <!-- Jquery Link -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </script>

</body>

</html>