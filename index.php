<?php ob_start();
session_start();?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<?php include "includes/connection.php" ?>
<?php include "includes/function.php" ?>

<?php include "includes/connect.php" ?>


<?php 
    
    if (isset($_GET['source'])) {
        
        $source=$_GET['source'];
    }
    else
    {
        $source="";
    }

    switch ($source) 
    {
       
        case 'property-forsale':
             include "includes/property-main.php"; 
            break;
        case 'property-forrent':
             include "includes/property-main.php"; 
            break;
        case 'property-foreclosure':
             include "includes/property-main.php"; 
            break;
        case 'property-newdevelopment':
             include "includes/property-main.php"; 
            break;
        case 'property-page':
             include "includes/property-page.php"; 
            break;
        case 'loginandregister':
             include "includes/login-register.php"; 
            break;
        case 'propertyadvertise':
             include "includes/propertyadvertise.php"; 
            break;
        case 'postproperty':
             include "includes/post-property.php";
             break;
        case 'property-success':
             include "includes/property-success.php"; 
            break;  
        case 'profile':
             include "includes/profile.php"; 
            break; 
        case 'profile-view':
             include "includes/profile-view.php"; 
            break; 
        case 'profile-success':
             include "includes/profile-success.php"; 
            break;   

          
        default:
            include "includes/homepage-search.php";
             include "includes/homepage-property.php"; 
             include "includes/homepage-welcome.php"; 
             include "includes/homepage-countarea.php"; 
             include "includes/homepage-buyandsell.php";
             
        break;
    } 
?>




<?php include "includes/footer.php" ?>
     
      

    

      