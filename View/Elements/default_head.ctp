<?php
echo $this->fetch('meta');

// CakePHP Generic CSS
// echo $this->Html->css('cake.generic.css');
// Debugging CSS
echo $this->Html->css('debugging.css');

// Main CSS
echo $this->Html->css('main.css');

// Polymer CSS
echo $this->element('polymer_css');

echo $this->fetch('css');

// Polymer dependencies
echo $this->Html->script('/third-party/webcomponentsjs/webcomponents-lite.min.js');
echo $this->element('imports');

// Main JavaScript
echo $this->Html->script('main.js');

echo $this->fetch('script');
?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->
