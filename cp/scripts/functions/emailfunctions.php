<?php
function getEmailTemplate($YourSubject, $YourName, $YourEmail, $YourComment) {
	$emailTemplate = "
	<html>
	<body>
	  <table width='552' border='1' bordercolor='#000000' cellspacing='0' cellpadding='0' style='border: 2px solid #000000;' align='center'>
		<tr>
		  <td>
			<table width='552' border='0' cellspacing='0' cellpadding='0' align='center'>
			  <tr bgcolor='#FFFFFF'>
				<td width='552' height='143' align='center' valign='top'><a href='http://420cannabismerch.com' target='_blank'><img src='http://420cannabismerch.com/images/ProfileImage.jpg' alt='420cannabismerch' border='0' style='display: block;'></a></td>
			  </tr>
			  <tr bgcolor='#EEEEEE'>
				<td align='center' valign='top' height='20' style='padding: 5px; color: #000000; font-family: Arial; border-top: 2px solid #000000; border-bottom: 2px solid #000000;'><strong>".$YourSubject."</strong></td>
			  </tr>
			  <tr>
				<td valign='top' style='padding: 5px; font-family: Arial;'>
				  <table width='540' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr>
					  <td width='82' valign='top' style='font-family: Arial; font-size: 12px;'><strong>Name</strong></td>
					  <td width='458' valign='top' style='font-family: Arial; font-size: 12px;'>".$YourName."</td>
					</tr>
					<tr><td colspan='2'><hr style='height: 1px; color: #000000;'></td></tr>
					<tr>
					  <td valign='top' style='font-family: Arial; font-size: 12px;'><strong>Email</strong></td>
					  <td valign='top' style='font-family: Arial; font-size: 12px;'>".$YourEmail."</td>
					</tr>
					<tr><td colspan='2'><hr style='height: 1px; color: #000000;'></td></tr>
					<tr>
					  <td valign='top' style='font-family: Arial; font-size: 12px;'><strong>Message</strong></td>
					  <td valign='top' style='font-family: Arial; font-size: 12px;'>".$YourComment."</td>
					</tr>
				  </table>
				</td>
			  </tr>
			  <tr>
				<td height='20' align='center' valign='middle' bgcolor='#EEEEEE' style='border-top: 2px solid #000000;'><a href='http://420cannabismerch.com' target='_blank' style='color: #000000; font-size: 10px; font-family: Arial; text-decoration: none;'><strong>420 Cannabis Merch</strong></a></td>
			  </tr>
			</table>
		  </td>
		</tr>
	  </table>
	  <p align= 'center' style='font-size: 8px; font-family: Arial;'>420CannabisMerch.com &copy; ".gmdate("Y")." All rights reserved.</p>
	</body>
	</html>
	";			
	return $emailTemplate;
}

?>