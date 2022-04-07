<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Maelstorm Dealer Order Sheet</title>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<link rel="stylesheet" type="text/css" href="common.css"/>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript'>
//<![CDATA[ 

$(function() {
    // Stick the #nav to the top of the window
    var nav = $('#nav');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
});

//]]>  
</script>

</head>

<body marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" bgcolor="#f7fafa" style="-moz-text-size-adjust:none !important; padding:0px !important; -webkit-text-size-adjust:none !important; margin:0px ! important; -ms-text-size-adjust:none !important; white-space: wrap;">
		
<fieldset>
			<form action="order-processing.php" method="post">
<table class="code4email_wrapper" width="850" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody>
        <!--MAIN MENU STARTS HERE-->
        <tr>
          <td align="center" valign="middle" width="850" bgcolor="#2CBCF7" style="margin:0px; width:850px; padding:10px; line-height:28px; font-size:21px;"><a href="#" target="_blank" style="font-size:21px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; text-transform: none; color:#ffffff;">Maelstorm Dealer Order E-sheet</a></td>
        </tr>
        <tr>
          <td align="left" valign="top" style="line-height:12px; padding:0px; margin:0px; font-size:12px; width:850px;"><table class="code4email_wrapper" align="center" border="0" cellpadding="0" cellspacing="0" width="850" style="width:850px;">
              <tbody><tr>
                <td align="left" valign="top" width="58" height="91" bgcolor="#FFFFFE" style="margin:0px; padding:0px; height:91px; width:58px; line-height:12px; font-size:12px;" class="code4email_hide"> </td>
                <td align="center" valign="middle" width="569" height="91" bgcolor="#FFFFFE" style="width:569px; margin:0px; height:91px; padding-bottom:10px; padding-top:10px; font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 14px; mso-line-height-rule:exactly; white-space: wrap; line-height:0px;" class="code4email_center">
				<table><tbody>
				<tr><td style="font-family: Arial, Helvetica, sans-serif; font-size:14px;">Organization<span style="color:red;">*</span>: </td><td><input type="text" name="organ" required="required"></td></tr><tr>
				<td style="font-family: Arial, Helvetica, sans-serif; font-size:14px;">Consignee<span style="color:red;">*</span>: </td><td><input type="text" name="delivery1" required="required"></td></tr>
				<tr><td style="font-family: Arial, Helvetica, sans-serif; font-size:14px;">Address<span style="color:red;">*</span>: </td><td><input type="text" name="delivery2" required="required" style="width:600px;"></td></tr>
				<tr><td style="font-family: Arial, Helvetica, sans-serif; font-size:14px;">Tel<span style="color:red;">*</span>: </td><td><input type="text" name="delivery3"  required="required"></td></tr>
				<tr><td colspan="2"><span style="font-family: Arial, Helvetica, sans-serif; font-size:12px;color:red;font-style:italic;">* above information is required before proceeding to next page.</span></td></tr>
				</table>
				</span></td>
                <td align="left" valign="top" width="58" height="91" bgcolor="#FFFFFE" style="margin:0px; padding:0px; height:91px; width:58px; line-height:12px; font-size:12px;" class="code4email_hide"> </td>
              </tr>
            </tbody></table></td>
        </tr>
		
        <tr>
          <td align="left" valign="top" style="line-height:12px; padding:0px; margin:0px; font-size:12px; width:850px;"><table class="code4email_wrapper" align="center" border="0" cellpadding="0" cellspacing="0" width="850" style="width:850px;background-color:rgb(44, 188, 247);">
              <tbody><tr>
                <td align="center" valign="middle" height="60" style="margin:0px; height:60px; padding-bottom:10px; padding-top:10px; font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 14px; mso-line-height-rule:exactly; white-space: wrap; line-height:20px;" class="code4email_center">
					<div id="navWrap">				
						<div id="nav">
							<ul>
								<li><a href="#1" class="smoothScroll">Kites & Bags</a></li>
								<li><a href="#3" class="smoothScroll">Sunglasses</a></li>
								<li><a href="#5" class="smoothScroll">Helmets</a></li>
								<li><a href="#6" class="smoothScroll">Impact Vests</a></li>
								<li><a href="#7" class="smoothScroll">Kite Lines</a></li>
								<li><a href="#8" class="smoothScroll">Surf Fins</a></li>
								<li><a href="#9" class="smoothScroll">Surf Pads</a></li>
								<li><a href="#10" class="smoothScroll">SUP Paddle</a></li>				
							</ul>    
							<br class="clearLeft" />
						</div>
					</div>
				</td>
              </tr>
            </tbody></table></td>
        </tr>
		
<?php
require_once("products.php");
?>

            </tbody></table></td>
        </tr>
		
		<tr>
            <td align="left" valign="top" style="line-height:12px; padding:0px; margin:0px; font-size:12px; width:850px;"><table class="code4email_wrapper" align="center" border="0" cellpadding="0" cellspacing="0" width="850" style="width:850px;">
                                            <tbody><tr>
			<td align="center" valign="middle" width="850" height="37" bgcolor="#94C11E" style="margin:0px; padding:0px; height:37px; width:850px;"><input type="submit" value="Produce My Order List" style="height:37px;font-family: Arial, Helvetica, sans-serif; background-color:#94C11E; color: #FFFFFE; font-size: 14px; text-decoration: none; font-weight: bold; text-transform: uppercase; width:100%; display:inline-block;cursor:pointer;">
			
			</td>
                                            </tr>
                                          </tbody></table></td>
        </tr>
		
									  
		
		<!--bottom bar STARTS HERE-->
		<tr>                                         
          <td align="left" valign="top" style="line-height:12px; padding:0px; margin:0px; font-size:12px; width:850px;"><table class="code4email_wrapper" align="center" border="0" cellpadding="0" cellspacing="0" width="850" style="width:850px;">
                                            <tbody><tr>
											
                <td align="left" valign="top" width="58" height="91" bgcolor="#FFFFFE" style="margin:0px; padding:0px; height:91px; width:58px; line-height:12px; font-size:12px;"> </td>
                <td align="center" valign="middle" width="569" height="91" bgcolor="#FFFFFE" style="width:569px; margin:0px; height:91px; padding-bottom:10px; padding-top:10px; font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 14px; mso-line-height-rule:exactly; white-space: wrap; line-height:20px;" class="code4email_center"><span style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 14px; text-decoration: none;"><p>Step 1 of 2: To place your order, please choose the products you like and fill in the quantity boxes. Then, press the green bar "Produce My Order List" at the bottom of this page to review your order.</p>
				</span></td>	   
                <td align="left" valign="top" width="58" height="91" bgcolor="#FFFFFE" style="margin:0px; padding:0px; height:91px; width:58px; line-height:12px; font-size:12px;"> </td>
                                            </tr>
                                          </tbody></table>
			</td>
        </tr>
		<!--bottom bar STARTS HERE-->
		
		<!--bottom bar reminder STARTS HERE-->
        <tr>
          <td align="left" valign="top" style="line-height:12px; padding:0px; margin:0px; font-size:12px; width:850px;"><table align="center" border="0" cellpadding="0" cellspacing="0" width="850" style="width:850px;">
              <tbody><tr>
                <td align="left" valign="top" width="58" height="51" style="margin:0px; padding:0px; height:51px; width:58px; line-height:12px; font-size:12px;background-color:rgb(44, 188, 247);" class="code4email_hide"> </td>
                <td align="center" valign="middle" width="569" height="51" style="width:569px; margin:0px; height:51px; padding-bottom:10px; padding-top:10px; font-family: Arial, Helvetica, sans-serif; color: white; font-size: 14px; mso-line-height-rule:exactly; white-space: wrap; line-height:20px;background-color:rgb(44, 188, 247);" class="code4email_center"><span style="font-family: Arial, Helvetica, sans-serif; color: white; font-size: 13px; text-decoration: none;"><p style="font-family:Arial,sans-serif;color:white;font-size: 18px; text-align:center;line-height: 138%;font-weight: bold;">If you are interested customized watersports equipment or soft goods,</p>
	   <span style="font-size:12px;font-style:italic;color:black;">Click <a href="http://www.maelstormgear.com/sn/201610-exclusively-for-Australia/Maelstorm_Dealer_Order_Sheet_USD_20161001-20161031_exclusively_for_Australia.xls" style="text-decoration:none;color:red;font-weight:bold;font-size:15px;"  target="_blank">HERE</a> to download the sheet of some gear</span>
				
				</span></td>
                <td align="left" valign="top" width="58" height="51" style="margin:0px; padding:0px; height:51px; width:58px; line-height:12px; font-size:12px;background-color:rgb(44, 188, 247);" class="code4email_hide"> </td>
              </tr>
            </tbody></table></td>			
        </tr>
		<!--bottom bar reminder ENDS HERE-->			  

</tbody></table></td>
</tr>
</tbody></table>
								
	</form>
</fieldset>
</body></html>		
		
		
