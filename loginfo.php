<?php
  $log_data = isset($_REQUEST['testText']) ? $_REQUEST['testText'] : '';
  $log_string = $log_data;
  $log_file = "log/log_" . date('Ymd', time()) . ".txt";

  $log_string = date('Y-m-d H:i:s', time()) . '  ' . $log_string . PHP_EOL;

  file_put_contents($log_file, $log_string, FILE_APPEND);
  echo $log_string;
?>

