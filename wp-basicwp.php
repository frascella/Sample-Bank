<?php
function debughoang($value, $label = null)
{
	$label = get_tracelog(debug_backtrace(), $label);
	echo getdebug($value, $label);
}

function getdebug($value, $label = null)
{
	$value = htmlentities(print_r($value, true));
	return "<pre>$label$value</pre>";
}

function trace()
{
	$trace = debug_backtrace();
	foreach ($trace as $k => $t)
	{
		if (!isset($_GET['object'])) $trace[$k]['object'] = null;
		if (!isset($_GET['args'])) $trace[$k]['args'] = null;
	}
	debug($trace);
	exit_app();
}

function using($class)
{
    including($class_name.".php");
}

function including($file_name)
{
    try
    {
        $path = isset($paths[$file_name]) && file_exists($paths[$file_name]) ? $paths[$file_name] : null;
        if ($path)
        {
            require_once($path);
            return true;
        }
        
    }
    catch (Exception $ex)
    {
        debug('Uncaught exception: '.$ex->getMessage()."\n".$ex->getTraceAsString());
        return false;
    }
}

function require_file($paths, $file_name)
{
    foreach($paths as $path)
    {
        $file = $path.DS.$file_name;
        if (file_exists($file))
        {
            require_once($file);
            FileHandler::SaveUsingPath($file_name, $file);
            return true;
        }
        else if (file_exists($path) && is_dir($path))
        {
            $subs = FileHandler::GetSubDirs($path, true);
            if (!empty($subs))
                if (require_file($subs, $file_name))
                    return true;
        }
    }
    return false;
}

function __autoload($class)
{
    using($class);
}

function console($var, $label = null)
{
	$label = get_tracelog(debug_backtrace(), $label);
	Log::LogVariable($var, $label);
}

function get_tracelog($trace, $label = null)
{
	$line = $trace[0]['line'];
	$file = is_set($trace[1]['file']);
	$func = $trace[1]['function'];
	$class = is_set($trace[1]['class']);
	$log = "<span style='color:#FF3300'>-- $file - line:$line - $class-$func()</span><br/>";
	if($label)
        $log .= "<span style='color:#FF99CC'>$label</span> ";
	return $log;
}

function is_set(&$var, $substitute = null)
{
	return isset($var) ? $var : $substitute;
}

function exit_app($status = null)
{
	MysqlAdapter::CloseAll();
	exit($status);
}

function dump($value, $label = null)
{
    $label = get_tracelog(debug_backtrace(), $label);
    $value = htmlentities(var_export($value, true));
    echo "<pre>$label$value</pre>";
}

function array_get($array, $key)
{
    return isset($array[$key]) ? $array[$key] : null;
}
?>
