<?php
// Class
class Cars{

}
$my_class=get_declared_classes();
foreach ($my_class as $class) {
    echo $class.'<br>';
}
?>