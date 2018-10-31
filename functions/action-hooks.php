<?php
/*
b4st Action Hooks
=================
Designed to be used by a child theme.
*/

// Header
function b4st_action_header_before() {
  do_action('b4st_action_header_before');
}
function b4st_action_header_after() {
  do_action('b4st_action_header_after');
}

// Main
function b4st_action_main_before() {
  do_action('b4st_action_main_before');
}
function b4st_action_main_after() {
  do_action('b4st_action_main_after');
}

// Sidebar (within Main -- only used when sidebar has 1 widget or more)
function b4st_action_sidebar_before() {
  do_action('b4st_action_sidebar_before');
}
function b4st_action_sidebar_after() {
  do_action('b4st_action_sidebar_after');
}

// Footer
function b4st_action_footer_before() {
  do_action('b4st_action_footer_before');
}
function b4st_action_footer_after() {
  do_action('b4st_action_footer_after');
}
