<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="Form.aspx.vb" Inherits="epc.Form" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>AGA | Email Preference Center</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #2D2D2D;
}
body {
	background-image: url(http://www.highroadsolution.com/clients/aga/epc/back.jpg);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.title {
	font-size: 18px;
	font-weight: bold;
}
.title_news {
	font-size: 14px;
	font-weight: bold;
	color: #14387F;
}
.footer {font-size: 11px}

a:link {
	color: #0F4CC3;
	text-decoration: none;
}
a:visited {
	color: #0F4CC3;
}
.style1 {
	font-size: 9px;
	color: #D8D4D2;
}
.style2 {color: #C3561D}
-->
</style>
<script src="scripts/ui/jquery-1.3.2.js" type="text/javascript"></script>
<script language="javascript" src="scripts/ui/my_code.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(
        function() {

            // global opt-out
            $("#chkOptOut").click(globalOptOut);
            $(':checkbox').click(uncheckGlobalOptOut);

        }
     )


</script>
</head>

<body>
    <form id="form1" runat="server">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><a href="http://www.gastro.org/"><img src="http://www.highroadsolution.com/clients/aga/epc/header.jpg" width="960" height="155" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.highroadsolution.com/clients/aga/epc/bar.jpg" width="960" height="49" /></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="21">&nbsp;</td>
    <td width="919"><span class="title">Manage your E-mail Preferences </span></td>
    <td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td><img src="http://www.highroadsolution.com/clients/aga/epc/title_line.jpg" width="489" height="12" /></td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="441">
      <tr>
        <td width="48">E-Mail : </td>
        <td width="377">
            <asp:TextBox ID="txtEmail" runat="server" Width="338px"></asp:TextBox>
          </td>
        </tr>
      <tr>
        <td>Format: </td>
        <td><input name="format_text" type="radio" value="text" checked="checked" />
text&nbsp;
<input name="format_html" type="radio" value="html" />
html</td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="title">E-Mail Communications</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3">&nbsp;</td>
    <td><img src="http://www.highroadsolution.com/clients/aga/epc/title_line.jpg" width="489" height="12" /></td>
    <td rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>If you no longer wish to receive one or more of the e-mail communications listed below, simply uncheck the box next to the e-communication, and click the update profile button to save your preferences.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><table width="917">
      <tr>
        <td colspan="2" valign="top"><span class="title_news">E-Newsletters (AGA Members Only)</span></td>
        <td colspan="2" valign="top" class="title_news">Advocacy (AGA Members Only)</td>
        </tr>
      <tr>
        <td width="24" valign="top">
            <asp:CheckBox ID="chkEDigest" runat="server" />
          </td>
        <td width="479">AGA eDigest</td>
        <td width="24" valign="top">
            <asp:CheckBox ID="chkPac" runat="server" />
          </td>
        <td width="370">AGA PAC</td>
        </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkQuarterlyQuality" runat="server" />
          </td>
        <td>AGA Quarterly: Quality</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td valign="top">
            <asp:CheckBox ID="chkQuarterlyPractice" runat="server" />
            </td>
        <td>AGA Quarterly: Practice Management </td>
        <td colspan="2" valign="top" class="title_news">Research (AGA Members Only)</td>
        
        </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkEducation" runat="server" />
          </td>
        <td>Education Bulletin</td>
        <td valign="top">
            <asp:CheckBox ID="chkResearch" runat="server" />
          </td>
        <td>Research Awards</td>
        </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">
            <asp:CheckBox ID="chkDirectory" runat="server" />
          </td>
        <td>AGA Researcher Directory </td>
        </tr>
      <tr>
        <td colspan="2" valign="top" class="title_news">AGA Education</td>
        <td valign="top"></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkLiveMeetings" runat="server" />
          </td>
        <td>Live Meetings</td>
        <td colspan="2" valign="top" class="title_news">Miscellaneous</td>
        </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkOnlineEducation" runat="server" />
          </td>
        <td>Online Education</td>
        <td valign="top">
            <asp:CheckBox ID="chkCareer" runat="server" />
          </td>
        <td>Career-Related Information and Opportunities</td>
        </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkEducationalResources" runat="server" />
          </td>
        <td>Educational Resources</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkGiTraining" runat="server" />
          </td>
        <td>GI Training</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top" class="title_news">AGA Practice Resources</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkPracticeManagement" runat="server" />
          </td>
        <td>Practice Management </td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkQuality" runat="server" />
          </td>
        <td>Quality </td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkDigestive" runat="server" />
          </td>
        <td>AGA Digestive Health Outcomes Registry</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkBooks" runat="server" />
          </td>
        <td>Patient Education Books and Materials</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">
            <asp:CheckBox ID="chkOptOut" runat="server" />
          </td>
        <td colspan="3"><span class="style2">I wish to globally opt-out of all e-mail communications. AGA Members: This EXCLUDES correspondence pertaining to your membership.</span></td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
        <asp:Button ID="cmdUpdate" runat="server" Text="UPDATE PROFILE" />
&nbsp;</div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="footer">© 2011 American Gastroenterological Association. All rights reserved.</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.highroadsolution.com/clients/aga/epc/footer_line.jpg" width="960" height="7" /></td>
  </tr>
  <tr>
    <td class="footer">&nbsp;</td>
    <td class="footer"><a href="http://www.gastro.org/">Home</a> <span class="style1">&nbsp;|&nbsp;</span> <a href="http://www.gastro.org/sitemap">Sitemap </a><span class="style1">&nbsp;|&nbsp;</span> <a href="http://www.gastro.org/privacy-policy">Privacy Policy </a><span class="style1">&nbsp;|&nbsp;</span> <a href="http://www.gastro.org/rss">RSS Feed </a><span class="style1">&nbsp;|&nbsp;</span> <a href="http://www.gastro.org/about-aga/contact-us">Contact Us</a></td>
    <td class="footer">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
    </form>
</body>
</html>

