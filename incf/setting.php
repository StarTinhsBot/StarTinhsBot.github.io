    <?php
include '../incf/config.php';
mysql_query("CREATE TABLE IF NOT EXISTS `setting` (
        `tiencamxuc` varchar(255) NOT NULL,
        `tienthuong` varchar(225) NOT NULL,
        `tiencmt` varchar(225) NOT NULL,
        `tiencmtimg` varchar(225) NOT NULL
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
     ");
     mysql_query("CREATE TABLE IF NOT EXISTS `khachhangcmt` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(255) NOT NULL,
      `name` varchar(225) NOT NULL,
      `battatcmt` varchar(225) NOT NULL,
      `fb_dtsg` text NOT NULL,
      `noidungcmt` text NOT NULL,
      `cookie` text NOT NULL,
      `token` text NOT NULL,
      `timeadd` varchar(225) NOT NULL,
      `timemua` varchar(225) NOT NULL,
      `time` varchar(225) NOT NULL,
      `useradd` varchar(225) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
     mysql_query("CREATE TABLE IF NOT EXISTS `khachhangcmtimg` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(255) NOT NULL,
      `name` varchar(225) NOT NULL,
      `battatcmt` varchar(225) NOT NULL,
      `fb_dtsg` text NOT NULL,
      `noidungcmt` text NOT NULL,
      `cookie` text NOT NULL,
      `token` text NOT NULL,
      `image` text NOT NULL,
      `timeadd` varchar(225) NOT NULL,
      `timemua` varchar(225) NOT NULL,
      `time` varchar(225) NOT NULL,
      `useradd` varchar(225) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
		mysql_query("CREATE TABLE IF NOT EXISTS `user` (
	      `id` int(11) NOT NULL AUTO_INCREMENT,
	      `username` varchar(255) NOT NULL,
	      `password` varchar(225) NOT NULL,
	      `tien` varchar(225) NOT NULL,
	      `ip` text,
	      `ngaytao` varchar(225) NOT NULL,
	      `type` varchar(225) NOT NULL,
   ");
echo 'Done';