<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
    
    body {
        
     width: 90%;
    margin: 20px auto;
    }
    
    h1 {
     text-align: center;   
    }
    
    section {
     
        padding: 10px;
        margin: 10px 0;
        
    }
    </style>
    
    
    <script>
    function wrong(id) {
        console.log(id)
      
        console.log(id);
        document.getElementById(id).style.backgroundColor= "#ffd9d9";
    }
        
         function right(id) {
        console.log(id)
      
        console.log(id);
        document.getElementById(id).style.backgroundColor= "#d9ffe8";
    }
    </script> 
</head>

<body>

    
    
    <h1>Super fun quiz</h1>
    <form method="post" action="trivia.php">
        
        <section id="panda"> 
   <label>What is the name of the baby Panda that was just born at the National Zoo? </label> 
    <div class="radio">
  <label>
    <input type="radio" name="panda" value="baobao">
    Bao Bao
  </label>
</div>
        
        <div class="radio">
  <label>
    <input type="radio" name="panda" value="beibei">
   Bei Bei
  </label>
</div>
        
         <div class="radio">
  <label>
    <input type="radio" name="panda" value="booboo">
   Boo Boo
  </label>
</div>
            
</section>

<section id="sun">     
        
         <label>How far away is the earth from the sun? </label>
    <div class="radio">
  <label>
    <input type="radio" name="sun" value="92">
    92.96 million miles
  </label>
</div>
        
        <div class="radio">
  <label>
    <input type="radio" name="sun" value="3.1">
   3.1 billion miles
  </label>
</div>
        
         <div class="radio">
  <label>
    <input type="radio" name="sun" value="64">
   64.34 million miles
  </label>
</div>
    
</section>    

<section id="king">       
        
         <label>In what year did Dr. Martin Luther King Jr have a dream? </label>
    <div class="radio">
  <label>
    <input type="radio" name="king" value="28">
    August 28th, 1963
  </label>
</div>
        
        <div class="radio">
  <label>
    <input type="radio" name="king" value="10">
   August 10th, 1962
  </label>
</div>
        
         <div class="radio">
  <label>
    <input type="radio" name="king" value="23">
   June 23rd, 1963
  </label>
</div>
    </section>  
        
        <input type="submit" name="submit" value="Submit!"  class="btn btn-primary" />
    </form> <br />
    
        
    <?php 

$correct = 0;

  if(isset($_POST['submit']))
      
  {
      if(!empty ($_POST['panda']) && !empty ($_POST['sun'])  && !empty ($_POST['king'])) {
          
        if ($_POST['panda']=="beibei")
        {
            $correct = $correct + 1;
             echo "<script>right('panda');</script>";
        }
          
          else {
              
              echo "<script>wrong('panda');</script>";
          }
          
           if ($_POST['sun']=="92")
        {
            $correct = $correct + 1;
            echo "<script>right('sun');</script>";
        }
          
         
             else {
              
              echo "<script>wrong('sun');</script>";
          }  
          
          
          if ($_POST['king']=="28")
        {
            $correct = $correct + 1;
             echo "<script>right('king');</script>";
            
        }
          
           else {
              
              echo "<script>wrong('king');</script>";
          }
          
             $percentage = round(($correct/3)*100, 0, PHP_ROUND_HALF_DOWN);
        echo "<div class=\"alert alert-success\">You got " . $percentage . "% of the questions correct.</div>";  
        
      }
       else {
           
           echo "<div class=\"alert alert-danger\">You didn't answer all the questions.</div>"; }
   
  }
      
      ?>
    
   
</body>
</html>
