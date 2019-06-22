<?php

/*import_request_variables("pgc","");*/

  if($boxaction=="")
  $boxaction="default";


switch ($boxaction)
  {
  case "confirm":

  include('confirm_data_form.php');

  break;

  case "display":

  include('dsp_data_form.php');

  break;

  case "default":

  include('entry_data_form.html');

}
?>