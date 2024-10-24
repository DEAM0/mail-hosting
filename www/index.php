<?php
include_once('../common_config.php');
global $language, $dir, $locale;
?>
<!DOCTYPE html><html lang="<?php echo $language; ?>" dir="<?php echo $dir; ?>"><head>
<title><?php echo _('E-Mail and XMPP'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Daniel Winzen">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo _('Get a free and anonymous E-Mail address and an XMPP/Jabber account'); ?>">
<link rel="canonical" href="<?php echo CANONICAL_URL; ?>">
<link rel="alternate" href="<?php echo CANONICAL_URL; ?>" hreflang="x-default">
<?php alt_links(); ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo _('E-Mail and XMPP'); ?>">
<meta property="og:description" content="<?php echo _('Get a free and anonymous E-Mail address and an XMPP/Jabber account'); ?>">
<meta property="og:url" content="<?php echo CANONICAL_URL; ?>">
<meta property="og:locale" content="<?php echo $locale; ?>">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"<?php echo _('E-Mail and XMPP'); ?>", "description": "<?php echo _('Get a free and anonymous E-Mail address and an XMPP/Jabber account'); ?>", "availableChannel": {"@type": "ServiceChannel", "serviceUrl": "<?php echo CANONICAL_URL; ?>"}}</script>
</head><body>
<main>
<p><?php echo _('Info'); ?> | <a href="<?php echo ROOT_URL; ?>register.php"><?php echo _('Register'); ?></a> | <a href="<?php echo ROOT_URL; ?>squirrelmail/src/login.php" target="_blank"><?php echo _('Webmail-Login'); ?></a> | <a href="<?php echo ROOT_URL; ?>manage_account.php"><?php echo _('Manage account'); ?></a> | <a href="<?php echo WEB_XMPP_URL; ?>" target="_blank" rel="noopener"><?php echo _('Web-XMPP'); ?></a></p>
<h2><?php echo _('What you will get'); ?></h2>
<p><?php printf(_('You get a free anonymous E-Mail address and an XMPP/Jabber account using the same details. Your Jabber ID is user@%1$s and can be connected to directly from clearnet or via Tor hidden service (%2$s).'), CLEARNET_SERVER, ONION_SERVER); ?></p>
<p><?php printf(_('You will have 50MB of disk space available for your mails. If you need more space, just <a href="%1$s">contact me</a>. Your E-Mail address will be %2$s'), CONTACT_URL, CLEARNET_SERVER); ?></p>
<p><?php echo _('For privacy, please use PGP mail encryption, if you can. This prevents others from reading your mails (including me and/or LEA). GnuPGs official home: <a href="https://gnupg.org" target="_blank" rel="noopener noreferrer">https://gnupg.org</a> Windows GUI: <a href="https://gpg4usb.org" target="_blank" rel="noopener noreferrer">https://gpg4usb.org</a>'); ?></p>
<h2><?php echo _('E-Mail Setup'); ?></h2>
<p>
    <?php printf(_('SMTP: %s Port 465 (SSL/TLS) or 587 (StartTLS)'), CLEARNET_SERVER); ?><br>
	<?php printf(_('IMAP: %s Port 993 (SSL/TLS) or 143 (StartTLS)'), CLEARNET_SERVER); ?><br>
	<?php printf(_('POP3: %s Port 995 (SSL/TLS) or 110 (StartTLS)'), CLEARNET_SERVER); ?><br>
	<?php echo _('Authentication: PLAIN, LOGIN'); ?>
</p>
<p><?php printf(_('You can also connect on the same ports via the Tor onion address %s, but you will have to accept an SSL certificate only valid for the clearnet domain.'), ONION_SERVER); ?></p>
<h2><?php echo _('XMPP setup'); ?></h2>
<p><?php printf(_('Domain: %s'), CLEARNET_SERVER); ?><br>
	<?php printf(_('Connect server: %s (optional for torification)'), ONION_SERVER); ?><br>
	<?php printf(_('File transfer proxy: %s'), XMPP_FILE_PROXY); ?><br>
	<?php printf(_('BOSH URL: %s (only enable if you have to, as it is slower than directly using xmpp)'), XMPP_BOSH_URL); ?></p>
</main>
</body></html>
