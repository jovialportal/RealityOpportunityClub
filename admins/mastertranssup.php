<?php include("../connect/session.php"); $uname=$_SESSION['adminlogin']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="none" />
<title>ROP Club : Administrator</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="66" height="185" align="left" valign="top"><img id="mlm_01" src="images/mlm_01.jpg" width="66" height="185" alt="" /></td>
    <td width="838" height="185" align="left" valign="top" background="images/mlm_13.jpg"><?php include("banner.php"); ?></td>
    <td width="76" height="185" align="left" valign="top"><img id="mlm_03" src="images/mlm_03.jpg" width="76" height="185" alt="" /></td>
  </tr>
  <tr>
    <td width="66" height="700" align="left" valign="top" background="images/mlm_07.jpg">&nbsp;</td>
    <td width="838" height="700" align="left" valign="top" bgcolor="#F4FEFD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%" height="41" align="left" valign="top">&nbsp;</td>
        <td width="76%" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><?php include("menu.php"); ?></td>
        <td align="left" valign="top">
        
        <form id="top" name="top" method="post" action="addolcreditsupplier.php">
          <table width="500" height="72" border="0" cellpadding="3" cellspacing="0" class="Contents">
            <tr>
              <td width="102">Supplier </td>
              <td width="386"><select name="store" id="store"  class="select-notfirst">
                <option selected="selected">- select -</option>
                <?php 
$qry=mysql_query("select suppl_id,Name from olsupplier order by suppl_id asc");
$fsd=mysql_num_rows($qry);
while($qrys=mysql_fetch_array($qry))
{
?>
                <option value="<?php echo $qrys['suppl_id']; ?>" ><?php echo $qrys['suppl_id']." - ".$qrys['Name']; ?></option>
                <?php } ?>
              </select></td>
              </tr>
            <tr>
              <td>Particulars</td>
              <td><input name="particulars" type="text" id="particulars" size="25" class="jsrequired"/></td>
            </tr>
            <tr>
              <td>Credit</td>
              <td><input name="crval" type="text" id="crval" value="0" size="10" class="jsrequired"/> 
                /-</td>
              </tr>
            <tr>
              <td>Debit</td>
              <td><input name="deb" type="text" id="deb" value="0" size="10" class="jsrequired"/> 
                /-</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="button2" id="button2" value="Reset" /></td>
            </tr>
          </table>
                </form>
        
        </td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76" height="700" align="left" valign="top" background="images/mlm_09.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td width="66" height="58" align="left" valign="top"><img id="mlm_10" src="images/mlm_10.jpg" width="66" height="58" alt="" /></td>
    <td width="838" height="58" align="left" valign="top" background="images/mlm_14.jpg">&nbsp;</td>
    <td width="76" height="58" align="left" valign="top"><img id="mlm_12" src="images/mlm_12.jpg" width="76" height="58" alt="" /></td>
  </tr>
</table>
</body>
</html>
