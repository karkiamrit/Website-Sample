<?php
       
          $username=$_POST['uname'];
  
          $pass=$_POST['psw'];
          $errors=array();

          if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$username)) 
          {
              $errors['uname']="Invalid Email";
            
              
          } 
          if(!preg_match('/^[A-Za-z]\w{4,14}$/',$pass)) 
          {
              $errors['psw']="Invalid Password";
            
              
          } 
      
           
           if(count($errors)!=0) 
           {
                header('Location:signup.php?errors='.serialize($errors));
           }   
           else{
            header('Location:index.php');
           }

?>