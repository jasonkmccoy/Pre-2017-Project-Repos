<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="Default.aspx.vb" Inherits="epc._Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
   <title>AGA | Email Preference Center</title>
<style type="text/css">
<!--
body,td,th {
	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #ffffff;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body a {color: #2763A5; text-decoration: none;}
body a:hover {color: #6191C5; text-decoration: underline;}
.advice {
	font-size: 9px;
	color: #07478F;
}
.title {
	font-size: 14px;
	font-weight: bold;
	color: #07478F;
}
.news_title {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #07478F;
}
.text_news {color: #333333}

#center {
width:800px;
height:270px;
position:absolute;
top:50%;
left:50%;
margin-top:-135px;
margin-left:-400px;
}
-->
</style>
<script type="text/javascript">
function showmessage() {
    window.setTimeout(moveon,500);
}

function moveon() {
    document.form1.Button1.click();
}

window.onload=showmessage;

</script>
</head>

<body>
    <form id="form1" runat="server">
    <img src="slices/loading.gif" name="center" width="300" height="300" border="0" id="center"/>
        <asp:Button ID="Button1" runat="server" 
        Text="Button" BackColor="#DEECF4" 
            BorderColor="#DEECF4" BorderStyle="None" ForeColor="#DEECF4" Height="16px" 
            Width="16px" />
    </form>
</body>
</html>