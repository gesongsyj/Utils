<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="jQuery EasyUI Forum - Index" />
	<meta name="keywords" content="PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum" />
	<script language="JavaScript" type="text/javascript" src="http://jeasyui.com/forum/Themes/default/script.js?fin11"></script>
	<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
		var smf_theme_url = "http://jeasyui.com/forum/Themes/default";
		var smf_images_url = "http://jeasyui.com/forum/Themes/default/images";
		var smf_scripturl = "http://www.jeasyui.com/forum/index.php";
		var smf_iso_case_folding = false;
		var smf_charset = "UTF-8";
	// ]]></script>
	<title>jQuery EasyUI Forum - Index</title>
	<link rel="stylesheet" type="text/css" href="http://jeasyui.com/forum/Themes/default/style.css?fin11" />
	<link rel="stylesheet" type="text/css" href="http://jeasyui.com/forum/Themes/default/print.css?fin11" media="print" />
	<link rel="help" href="http://www.jeasyui.com/forum/index.php?action=help" target="_blank" />
	<link rel="search" href="http://www.jeasyui.com/forum/index.php?action=search" />
	<link rel="contents" href="http://www.jeasyui.com/forum/index.php" />
	<link rel="alternate" type="application/rss+xml" title="jQuery EasyUI Forum - RSS" href="http://www.jeasyui.com/forum/index.php?type=rss;action=.xml" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

	<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
		var current_header = false;

		function shrinkHeader(mode)
		{
			document.cookie = "upshrink=" + (mode ? 1 : 0);
			document.getElementById("upshrink").src = smf_images_url + (mode ? "/upshrink2.gif" : "/upshrink.gif");

			document.getElementById("upshrinkHeader").style.display = mode ? "none" : "";
			document.getElementById("upshrinkHeader2").style.display = mode ? "none" : "";

			current_header = mode;
		}
	// ]]></script>
		<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
			var current_header_ic = false;

			function shrinkHeaderIC(mode)
			{
				document.cookie = "upshrinkIC=" + (mode ? 1 : 0);
				document.getElementById("upshrink_ic").src = smf_images_url + (mode ? "/expand.gif" : "/collapse.gif");

				document.getElementById("upshrinkHeaderIC").style.display = mode ? "none" : "";

				current_header_ic = mode;
			}
		// ]]></script>
</head>
<body>
	<div class="tborder" >
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td class="catbg" height="32">
					<span style="font-family: Verdana, sans-serif; font-size: 140%; ">jQuery EasyUI Forum</span>
				</td>
				<td align="right" class="catbg">
					<img src="http://jeasyui.com/forum/Themes/default/images/smflogo.gif" style="margin: 2px;" alt="" />
				</td>
			</tr>
		</table>
		<table width="100%" cellpadding="0" cellspacing="0" border="0" >
			<tr>
				<td class="titlebg2" height="32" align="right">
					<span class="smalltext">December 03, 2013, 07:45:10 PM</span>
					<a href="#" onclick="shrinkHeader(!current_header); return false;"><img id="upshrink" src="http://jeasyui.com/forum/Themes/default/images/upshrink.gif" alt="*" title="Shrink or expand the header." align="bottom" style="margin: 0 1ex;" /></a>
				</td>
			</tr>
			<tr id="upshrinkHeader">
				<td valign="top" colspan="2">
					<table width="100%" class="bordercolor" cellpadding="8" cellspacing="1" border="0" style="margin-top: 1px;">
						<tr>
							<td colspan="2" width="100%" valign="top" class="windowbg2"><span class="middletext">Welcome, <b>Guest</b>. Please <a href="http://www.jeasyui.com/forum/index.php?action=login">login</a> or <a href="http://www.jeasyui.com/forum/index.php?action=register">register</a>.				</span>
								<script language="JavaScript" type="text/javascript" src="http://jeasyui.com/forum/Themes/default/sha1.js"></script>

								<form action="http://www.jeasyui.com/forum/index.php?action=login2" method="post" accept-charset="UTF-8" class="middletext" style="margin: 3px 1ex 1px 0;" onsubmit="hashLoginPassword(this, '87567636ba319cd84229ae8506842496');">
									<input type="text" name="user" size="10" /> <input type="password" name="passwrd" size="10" />
									<select name="cookielength">
										<option value="60">1 Hour</option>
										<option value="1440">1 Day</option>
										<option value="10080">1 Week</option>
										<option value="43200">1 Month</option>
										<option value="-1" selected="selected">Forever</option>
									</select>
									<input type="submit" value="Login" /><br />
									<span class="middletext">Login with username, password and session length</span>
									<input type="hidden" name="hash_passwrd" value="" />
								</form>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table id="upshrinkHeader2" width="100%" cellpadding="4" cellspacing="0" border="0">
			<tr>
				<td width="90%" class="titlebg2">
					<span class="smalltext"><b>News</b>: </span>
				</td>
				<td class="titlebg2" align="right" nowrap="nowrap" valign="top">
					<form action="http://www.jeasyui.com/forum/index.php?action=search2" method="post" accept-charset="UTF-8" style="margin: 0;">
						<a href="http://www.jeasyui.com/forum/index.php?action=search;advanced"><img src="http://jeasyui.com/forum/Themes/default/images/filter.gif" align="middle" style="margin: 0 1ex;" alt="" /></a>
						<input type="text" name="search" value="" style="width: 190px;" />&nbsp;
						<input type="submit" name="submit" value="Search" style="width: 11ex;" />
						<input type="hidden" name="advanced" value="0" />
					</form>
				</td>
			</tr>
		</table>
	</div>
			<table cellpadding="0" cellspacing="0" border="0" style="margin-left: 10px;">
				<tr>
					<td class="maintab_first">&nbsp;</td><td class="maintab_active_first">&nbsp;</td>
				<td valign="top" class="maintab_active_back">
					<a href="http://www.jeasyui.com/forum/index.php">Home</a>
				</td><td class="maintab_active_last">&nbsp;</td>
				<td valign="top" class="maintab_back">
					<a href="http://www.jeasyui.com/forum/index.php?action=help">Help</a>
				</td>
				<td valign="top" class="maintab_back">
					<a href="http://www.jeasyui.com/forum/index.php?action=search">Search</a>
				</td>
				<td valign="top" class="maintab_back">
					<a href="http://www.jeasyui.com/forum/index.php?action=login">Login</a>
				</td>
				<td valign="top" class="maintab_back">
					<a href="http://www.jeasyui.com/forum/index.php?action=register">Register</a>
				</td>
				<td class="maintab_last">&nbsp;</td>
			</tr>
		</table>
	<div id="bodyarea" style="padding: 1ex 0px 2ex 0px;">
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="bottom"><div class="nav" style="font-size: smaller; margin-bottom: 2ex; margin-top: 2ex;"><b><a href="http://www.jeasyui.com/forum/index.php" class="nav">jQuery EasyUI Forum</a></b></div></td>
			<td align="right">
			</td>
		</tr>
	</table>
	<div class="tborder" style="margin-top: 0;">
		<div class="catbg" style="padding: 5px 5px 5px 10px;">
				<a name="1" href="http://www.jeasyui.com/forum/index.php#1">General Category</a>
		</div>
		<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor" style="margin-top: 1px;">
			<tr>
				<td  class="windowbg" width="6%" align="center" valign="top"><a href="http://www.jeasyui.com/forum/index.php?action=unread;board=5.0"><img src="http://jeasyui.com/forum/Themes/default/images/off.gif" alt="No New Posts" title="No New Posts" /></a>
				</td>
				<td class="windowbg2">
					<b><a href="http://www.jeasyui.com/forum/index.php?board=5.0" name="b5">News</a></b><br />
						About news &amp; announcements.
				</td>
				<td class="windowbg" valign="middle" align="center" style="width: 12ex;"><span class="smalltext">
					32 Posts <br />
					9 Topics
				</span></td>
				<td class="windowbg2" valign="middle" width="22%">
					<span class="smalltext">
						<b>Last post</b>  by <a href="http://www.jeasyui.com/forum/index.php?action=profile;u=86255">reems</a><br />
						in <a href="http://www.jeasyui.com/forum/index.php?topic=2061.msg5608#new" title="Re: jQuery EasyUI 1.3.4 Release">Re: jQuery EasyUI 1.3.4 ...</a><br />
						on September 02, 2013, 02:44:57 AM
					</span>
				</td>
			</tr>
			<tr>
				<td  class="windowbg" width="6%" align="center" valign="top"><a href="http://www.jeasyui.com/forum/index.php?action=unread;board=1.0"><img src="http://jeasyui.com/forum/Themes/default/images/off.gif" alt="No New Posts" title="No New Posts" /></a>
				</td>
				<td class="windowbg2">
					<b><a href="http://www.jeasyui.com/forum/index.php?board=1.0" name="b1">General Discussion</a></b><br />
						General discussion about easyui
				</td>
				<td class="windowbg" valign="middle" align="center" style="width: 12ex;"><span class="smalltext">
					427 Posts <br />
					154 Topics
				</span></td>
				<td class="windowbg2" valign="middle" width="22%">
					<span class="smalltext">
						<b>Last post</b>  by <a href="http://www.jeasyui.com/forum/index.php?action=profile;u=178188">codeguyross</a><br />
						in <a href="http://www.jeasyui.com/forum/index.php?topic=2465.msg5608#new" title="Creating ComboBox in datagrid at runtime and adding intial values">Creating ComboBox in dat...</a><br />
						on November 26, 2013, 10:31:32 AM
					</span>
				</td>
			</tr>
			<tr>
				<td  class="windowbg" width="6%" align="center" valign="top"><a href="http://www.jeasyui.com/forum/index.php?action=unread;board=2.0"><img src="http://jeasyui.com/forum/Themes/default/images/off.gif" alt="No New Posts" title="No New Posts" /></a>
				</td>
				<td class="windowbg2">
					<b><a href="http://www.jeasyui.com/forum/index.php?board=2.0" name="b2">Help for EasyUI</a></b><br />
						If you have a question in using easyui, you can post it and some one will help you.
				</td>
				<td class="windowbg" valign="middle" align="center" style="width: 12ex;"><span class="smalltext">
					2795 Posts <br />
					896 Topics
				</span></td>
				<td class="windowbg2" valign="middle" width="22%">
					<span class="smalltext">
						<b>Last post</b>  by <a href="http://www.jeasyui.com/forum/index.php?action=profile;u=182909">j_haus22</a><br />
						in <a href="http://www.jeasyui.com/forum/index.php?topic=2499.msg5608#new" title="file upload">file upload</a><br />
						on <b>Today</b> at 06:58:52 PM
					</span>
				</td>
			</tr>
			<tr>
				<td  class="windowbg" width="6%" align="center" valign="top"><a href="http://www.jeasyui.com/forum/index.php?action=unread;board=3.0"><img src="http://jeasyui.com/forum/Themes/default/images/off.gif" alt="No New Posts" title="No New Posts" /></a>
				</td>
				<td class="windowbg2">
					<b><a href="http://www.jeasyui.com/forum/index.php?board=3.0" name="b3">Bug Report</a></b><br />
						Reporting your bugs and we will fix it.
				</td>
				<td class="windowbg" valign="middle" align="center" style="width: 12ex;"><span class="smalltext">
					510 Posts <br />
					176 Topics
				</span></td>
				<td class="windowbg2" valign="middle" width="22%">
					<span class="smalltext">
						<b>Last post</b>  by <a href="http://www.jeasyui.com/forum/index.php?action=profile;u=177787">shanlujun</a><br />
						in <a href="http://www.jeasyui.com/forum/index.php?topic=2475.msg5608#new" title="Combogrid: not trigger the search when input Chinese word group">Combogrid: not trigger t...</a><br />
						on November 28, 2013, 11:39:21 PM
					</span>
				</td>
			</tr>
		</table>
	</div><br />
	<div class="tborder" >
		<div class="catbg" style="padding: 6px; vertical-align: middle; text-align: center; ">
			<a href="#" onclick="shrinkHeaderIC(!current_header_ic); return false;"><img id="upshrink_ic" src="http://jeasyui.com/forum/Themes/default/images/collapse.gif" alt="*" title="Shrink or expand the header." style="margin-right: 2ex;" align="right" /></a>
			jQuery EasyUI Forum - Info Center
		</div>
		<div id="upshrinkHeaderIC">
			<table border="0" width="100%" cellspacing="1" cellpadding="4" class="bordercolor">
				<tr>
					<td class="titlebg" colspan="2">Forum Stats</td>
				</tr>
				<tr>
					<td class="windowbg" width="20" valign="middle" align="center">
						<a href="http://www.jeasyui.com/forum/index.php?action=stats"><img src="http://jeasyui.com/forum/Themes/default/images/icons/info.gif" alt="Forum Stats" /></a>
					</td>
					<td class="windowbg2" width="100%">
						<span class="middletext">
							3764 Posts in 1235 Topics by 3183 Members. Latest Member: <b> <a href="http://www.jeasyui.com/forum/index.php?action=profile;u=182909">j_haus22</a></b>
							<br /> Latest Post: <b>&quot;<a href="http://www.jeasyui.com/forum/index.php?topic=2499.msg5608#new" title="file upload">file upload</a>&quot;</b>  ( <b>Today</b> at 06:58:52 PM )<br />
							<a href="http://www.jeasyui.com/forum/index.php?action=recent">View the most recent posts on the forum.</a><br />
							<a href="http://www.jeasyui.com/forum/index.php?action=stats">[More Stats]</a>
						</span>
					</td>
				</tr>
				<tr>
					<td class="titlebg" colspan="2">Users Online</td>
				</tr><tr>
					<td rowspan="2" class="windowbg" width="20" valign="middle" align="center">
						<img src="http://jeasyui.com/forum/Themes/default/images/icons/online.gif" alt="Users Online" />
					</td>
					<td class="windowbg2" width="100%">
						72 Guests, 1 User
						<div class="smalltext">
							Users active in past 15 minutes:<br /><a href="http://www.jeasyui.com/forum/index.php?action=profile;u=1" style="color: #FF0000;">stworthy</a>
							<br />
							
						</div>
					</td>
				</tr>
				<tr>
					<td class="windowbg2" width="100%">
						<span class="middletext">
							Most Online Today: <b>94</b>.
							Most Online Ever: 144 (May 08, 2013, 03:08:11 PM)
						</span>
					</td>
				</tr>
				<tr>
					<td class="titlebg" colspan="2">Login <a href="http://www.jeasyui.com/forum/index.php?action=reminder" class="smalltext">(Forgot your password?)</a></td>
				</tr>
				<tr>
					<td class="windowbg" width="20" align="center">
						<a href="http://www.jeasyui.com/forum/index.php?action=login"><img src="http://jeasyui.com/forum/Themes/default/images/icons/login.gif" alt="Login" /></a>
					</td>
					<td class="windowbg2" valign="middle">
						<form action="http://www.jeasyui.com/forum/index.php?action=login2" method="post" accept-charset="UTF-8" style="margin: 0;">
							<table border="0" cellpadding="2" cellspacing="0" align="center" width="100%"><tr>
								<td valign="middle" align="left">
									<label for="user"><b>Username:</b><br />
									<input type="text" name="user" id="user" size="15" /></label>
								</td>
								<td valign="middle" align="left">
									<label for="passwrd"><b>Password:</b><br />
									<input type="password" name="passwrd" id="passwrd" size="15" /></label>
								</td>
								<td valign="middle" align="left">
									<label for="cookielength"><b>Minutes to stay logged in:</b><br />
									<input type="text" name="cookielength" id="cookielength" size="4" maxlength="4" value="60" /></label>
								</td>
								<td valign="middle" align="left">
									<label for="cookieneverexp"><b>Always stay logged in:</b><br />
									<input type="checkbox" name="cookieneverexp" id="cookieneverexp" checked="checked" class="check" /></label>
								</td>
								<td valign="middle" align="left">
									<input type="submit" value="Login" />
								</td>
							</tr></table>
						</form>
					</td>
				</tr>
			</table>
		</div>
	</div>
	</div>

	<div id="footerarea" style="text-align: center; padding-bottom: 1ex;">
		<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
			function smfFooterHighlight(element, value)
			{
				element.src = smf_images_url + "/" + (value ? "h_" : "") + element.id + ".gif";
			}
		// ]]></script>
		<table cellspacing="0" cellpadding="3" border="0" align="center" width="100%">
			<tr>
				<td width="28%" valign="middle" align="right">
					<a href="http://www.mysql.com/" target="_blank"><img id="powered-mysql" src="http://jeasyui.com/forum/Themes/default/images/powered-mysql.gif" alt="Powered by MySQL" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a>
					<a href="http://www.php.net/" target="_blank"><img id="powered-php" src="http://jeasyui.com/forum/Themes/default/images/powered-php.gif" alt="Powered by PHP" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a>
				</td>
				<td valign="middle" align="center" style="white-space: nowrap;">
					
		<span class="smalltext" style="display: inline; visibility: visible; font-family: Verdana, Arial, sans-serif;"><a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by SMF 1.1.18</a> |
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2013, Simple Machines</a>
		</span>
				</td>
				<td width="28%" valign="middle" align="left">
					<a href="http://validator.w3.org/check/referer" target="_blank"><img id="valid-xhtml10" src="http://jeasyui.com/forum/Themes/default/images/valid-xhtml10.gif" alt="Valid XHTML 1.0!" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a>
					<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank"><img id="valid-css" src="http://jeasyui.com/forum/Themes/default/images/valid-css.gif" alt="Valid CSS!" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a>
				</td>
			</tr>
		</table>
	</div>
	<div id="ajax_in_progress" style="display: none;">Loading...</div>
</body></html>