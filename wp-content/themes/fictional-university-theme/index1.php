<?php 
    function myFirstFunction() {
        echo "<p>Hello, This is my first function.</p>";
    }
    myFirstFunction();
?>

<?php 
    function greet($name, $color) {
        echo "<p>Hi my $name is blank, my favorite color is $color.</>";
    }
    greet('John', 'green');
    greet('Mary', 'red');
?>

<h1><?php bloginfo( 'name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php 
    // while循环
    $count = 0;
    while($count <= 10) {
        echo "<li>$count</li>";
        $count++;
    }

?>
<?php 

    // 数组
    $names = array('Colin', 'Mary', 'Jane', 'Black');
    $count01 = 0;
    while($count01 < count($names)) {
        echo "<li>Hi, my name is $names[$count01] </li>";
        $count01++;
    }
?>

