<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $sitename = 'OpenShift Example Joomla Installation';
	public $editor = 'tinymce';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $host = '';
	public $user = '';
	public $password = '';
	public $db = '';
	public $dbprefix = 'tt7ki_';
	public $live_site = '';
	public $secret = 'UnX75NMoFOpLpSn6';
	public $gzip = '0';
	public $error_reporting = '-1';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '127.0.0.1';
	public $ftp_port = '21';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $offset_user = 'UTC';
	public $mailer = 'mail';
	public $mailfrom = 'admin@admin.com';
	public $fromname = 'OpenShift Example Joomla Installation';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaAuthor = '1';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $log_path = '';
	public $tmp_path = '';
	public $lifetime = '15';
	public $session_handler = 'database';

	public function __construct() {
		$this->host = getenv("OPENSHIFT_DB_HOST").":".getenv("OPENSHIFT_DB_PORT");
		$this->user = getenv("OPENSHIFT_DB_USERNAME");
		$this->password = getenv("OPENSHIFT_DB_PASSWORD");
		$this->db = getenv("OPENSHIFT_APP_NAME");
		$this->log_path = getenv("OPENSHIFT_LOG_DIR");
		$this->tmp_path = getenv("OPENSHIFT_TMP_DIR");
	}
}
