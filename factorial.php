<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>

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

        $number = $_POST['number'];
       
        
       
            function getFact($n){
                if(!is_numeric($n)){
                    $factoril =  "Fild Must Not be Empty !";
                    return $factoril;
                }
                $factoril = 1;
    
                if ($n == 0 )
                 return $factoril;
                
    
                for($i = $n; $i>=1 ; $i --){
                    $factoril = $factoril * $i;
                }
                
    
                return $factoril;
            }
    
            $factoril = getFact($number);
     

           

               
            
            



    }

?>



    
    
    <div class="system_developmen">


    <div class="row">
        <div class="col-md-12">

                <div class="shipping">
                <div class="card">
                <div class="card-header">
                    <h2 class=" card-header text-center">Factorial Calculator </h2>
                </div>
                <div class="card-body">
                   <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">



                  

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                        <label for="validationDefault01"><strong>Please Enter a Number</strong></label>
                        <input name="number" type="number" class="form-control" placeholder="Enter a number">
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

                        error_reporting(0);

                        echo $factoril ; 



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


  

</body>

</html>