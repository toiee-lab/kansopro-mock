<?php

$list = glob( 'uikit-3.2.2/tests/*.html' );
foreach ( $list as $l ) {
    $fname = basename( $l );
    echo '<li><a href="'.$l.'">' . $fname . '</a></li>'."\n";
}