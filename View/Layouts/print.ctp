<!DOCTYPE html>
<html>
    <head>
        <?php
        echo $this->Html->charset();
        echo $this->Html->meta('description', '');
        echo $this->Html->meta('author', '');
        echo $this->Html->meta('icon');
        ?>
        <title><?php echo $title_for_layout; ?></title>
        <style>
            @page  
            { 
                size: auto;   /* auto is the initial value */ 

                /* this affects the margin in the printer settings */ 
                margin: 25mm 25mm 25mm 25mm;  
            } 
            body { 
                background: white; 
                font-size: 12pt; 
                /* this affects the margin on the content before sending to printer */ 
                margin: 0px;  
            }
            a:link, 
            a:visited { 
                color: #520; 
                background: transparent; 
                font-weight: bold; 
                text-decoration: underline; 
            }
        </style>
    </head>
    <body>
        <?php echo $this->fetch('content'); ?>
    </body>
</html>