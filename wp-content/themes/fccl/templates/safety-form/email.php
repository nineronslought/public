<?php ob_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<table bgcolor="#fafafa" style=" width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, 'Lucida Grande', sans-serif;  font-size: 100%; line-height: 1.6;">
<tr>
<td></td>
<td bgcolor="#FFFFFF" style="border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;"><div style="padding:20px; max-width:600px; margin:0 auto; display:block;">
<table style="width: 100%;">
<tr>
<td>
<p style="text-align: center; display: block;  padding-bottom:20px;  margin-bottom:20px; border-bottom:1px solid #dddddd;"><img src="https://familycrisiscenterswp.allthingsinternet.com/wp-content/uploads/2023/10/cropped-favicon-2.png" style="max-height: 100px;"/></p>

<?php $link = home_url('/safety-planning-tool?id='.session_id()); ?>
<p> Here is a link to your safety plan. The link is only available for 24 hours. </p>
<?php echo $link; ?>

<p style="text-align: center; display: block;  padding-top:20px;  margin-top:20px; border-top:1px solid #dddddd;">All rights reserved.</p>
</td>
</tr>
</table>
</div></td>
<td></td>
</tr>
</table>
</body>
</html>
<?php $email_template = ob_get_clean(); ?>