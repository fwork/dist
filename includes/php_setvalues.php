<?
@ini_set('session.gc_maxlifetime','1800');  
@ini_set('session.gc_probability','1');
@ini_set('session.gc_divisor','1');

@ini_set('file_uploads','On');
@ini_set('upload_max_filesize','2M');
@ini_set('fastcgi.logging','0');
@ini_set('magic_quotes_gpc','Off');

$res=MYSQLi_QUERY(db_conn,"select openbase_dir  from ".$prefix."_".$projname."_admin.admin_settings   ") ;
$row=@MYSQLi_fetch_array($res);
$opdir = $row["openbase_dir"];


@ini_set('open_basedir',$opdir);
@ini_set('register_globals','Off');

@ini_set('disable_functions','exec,passthru,shell_exec,system,proc_open,popen,curl_multi_exec,parse_ini_file,show_source,phpinfo');

@ini_set('asp_tags','off');
@ini_set('implicit_flush','On');
@ini_set('default_socket_timeout','60');

@ini_set('expose_php','Off');
@ini_set('display_errors','Off');
@ini_set('allow_url_fopen','Off');
@ini_set('allow_url_include','Off');
@ini_set('max_execution_time','30');
@ini_set('max_input_time','60');

@ini_set('memory_limit','128M');
@ini_set('max_input_nesting_level','64');
@ini_set('cgi.force_redirect','1');
@ini_set('session.save_path','/var/lib/php/session');
@ini_set('upload_tmp_dir','/var/lib/php/session');
@ini_set('session.entropy_length','16');

@ini_set('session.entropy_file','/dev/urandom');
@ini_set('session.hash_function','1');
@ini_set('session.use_only_cookies','1');

@ini_set('session.use_cookies','1');

@ini_set('session.use_trans_sid','0');

 
@ini_set('session.cookie_httponly','1');
@ini_set('session.cookie_lifetime','0');
@ini_set('session.cache_limiter','nocache');
?>
