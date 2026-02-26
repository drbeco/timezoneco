<?php
/**
 * Options for the timezone plugin
 *
 * @author Ruben Carlo Benante <rcb@beco.cc>
 */


$meta['timezone'] = array('multichoice', '_choices' => array_merge(array(''), timezone_identifiers_list()));

