<?php

  if ( !empty($_POST['firstname']) && 
       !empty($_POST['lastname']) &&
       !empty($_POST['email']) ) {
    $subject = "";
    $message = "Subscribe cmse-l ".$_POST['firstname']." ".$_POST['lastname']."\n\n";    

            mail("LISTSERV@LISTS.UFL.EDU", $subject, $message, "From: ".$_POST['email']);
echo "<b><center>Thank you for subscribing. Please check your email for confirmation.</b></center>";
    
  }
  else { 

}
?>
<html>
<title>Subscribe to the CMSE Newsletter</title>

<center>
  <h2>Join Our ListServ</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?page=joinlistserv">
    <table border=1>
      <tr>
        <td><table>
          <tr>
            <td> First Name*:</td>
            <td><input name="firstname" type="text"></td>
          </tr>
          <tr>
            <td> Last Name*:</td>
            <td><input name="lastname" type="text"></td>
          </tr>
          <tr>
            <td> E-mail*: </td>
            <td><input name="email" type="text"></td>
          </tr>
          <tr>
            <td></td>
            <td align=center><input type="submit" name="submit" value="Submit"></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <br>
    <br>
    *=required field
  </form>
  <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
  <script type="text/javascript">
_uacct = "UA-18786668-1";
urchinTracker();
</script>
</center>
</html>
