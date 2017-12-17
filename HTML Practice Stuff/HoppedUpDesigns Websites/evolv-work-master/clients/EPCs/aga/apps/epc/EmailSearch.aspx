<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="EmailSearch.aspx.vb" Inherits="epc.EmailSearch" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>.::ERA eNewsletter Preference Page::.</title>
<style type="text/css">
<!--
body,td,th {
	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #D9DADC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(slices/back.jpg);
	background-repeat: repeat-x;
}
body a {color: #2763A5; text-decoration: none;}
body a:hover {color: #0067B1; text-decoration: underline;}
.advice {
	font-size: 9px;
	color: #0067B1;
}
.title {
	font-size: 14px;
	font-weight: bold;
	color: #0067B1;
}
.news_title {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #0067B1;
}
.text_news {color: #333333}
.footer {
	color: #ffffff;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	}
.footer a {color: #ffffff; text-decoration: none;}
. fotter a:hover {color: #ffffff; text-decoration: underline;}


-->
</style>
<script src="scripts/ui/jquery-1.3.2.js" type="text/javascript"></script>
<script language="javascript" src="scripts/ui/my_code.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(
        function() {

            // setup events

        }
     )


</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>

<body>
    <form id="form1" runat="server">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="slices/back_content1.jpg"><img src="slices/left1.jpg" width="17" height="475" /></td>
    <td colspan="4" valign="top" bgcolor="#FFFFFF"><table width="200" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td bgcolor="#FFFFFF"><a href="http://retailing.org/"><img src="slices/header2.jpg" alt="Home" width="980" height="174" border="0" /></a></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="897" valign="bottom">&nbsp;</td>
          </tr>
          <tr>
            <td valign="bottom">Please enter your email address below and click the SEARCH button to lookup your existing email profile or to create an email profile to receive email marketing communications from Electronic Retailing Association (ERA).</td>
          </tr>
          <tr>
            <td><table width="739" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="109">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td>E-mail Address :</td>
                  <td width="270" valign="bottom"><asp:TextBox ID="txtEmail" runat="server" Width="269px"></asp:TextBox>                  </td>
                  <td width="59">&nbsp;</td>
                  <td width="96"></td>
                  <td width="205" valign="bottom">&nbsp;</td>
                </tr>
                <tr>
                  <td height="20" class="text">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2" valign="bottom">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center">
                <asp:Button ID="cmdSearch" runat="server" Text="SEARCH" />        
              &nbsp;</div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="13" valign="top" background="slices/back_content2.jpg"><img src="slices/right1.jpg" width="13" height="475" /></td>
  </tr>
  
  <tr>
    <td background="slices/footer.jpg"><img src="slices/space.png" width="10" height="35" /></td>
    <td width="10" background="slices/back_footer.jpg"><img src="slices/space.png" width="10" height="35" /></td>
    <td width="485" background="slices/back_footer.jpg"><span class="footer"><a href="http://www.retailing.org/privacy-policy" title="Privacy Policy">Privacy Policy | </a><a href="http://www.retailing.org/about/contact-us" title="">Contact ERA | </a><a target="_blank" href="http://www.eraeurope.org" title="">Contact ERA Europe</a></span></td>
    <td width="479" background="slices/back_footer.jpg"><div align="right" class="footer">&copy; Electronic Retailing Association</div></td>
    <td width="6" background="slices/back_footer.jpg"><img src="slices/space.png" width="10" height="35" /></td>
    <td background="slices/footer.jpg"><img src="slices/space.png" width="10" height="35" /></td>
  </tr>
</table>
    <p>&nbsp;</p>
    </form>
</body>
</html>
