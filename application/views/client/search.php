<?php
form_open(‘books/search’);?>
<?php $search = array(‘name’=>’search’,'id’=>’search’,'value’=>”,);?>
<?php form_input($search);?><input type=submit value=’Search’ /></p>
<?=form_close();
?>