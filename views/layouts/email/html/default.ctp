<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts.email.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
	<title><?php echo $title_for_layout;?></title>
</head>

<body>
	<?php echo $content_for_layout;?>

<?php
	if($invitee['Event']['has_reservations'] == 'Yes'){
?>
	<span style="font: 14pt;">
		<p><?php
			__('To R.S.V.P. for this event click ');
			echo $this->Html->link('Here.',$url.'/reservations/add/'.$id);
		?>
		</p>
	</span>
<?php
	}
?>
	<p>This email was sent using Event Notifier & Guest Tracker
If You no longer want to recieve emails from the Event Notifier & Guest Tracker
Click the following link to <?php echo $this->Html->link('Opt Out',$url.'/Invites/optOut/'.$id);?> 
	</p>
</body>
</html>
