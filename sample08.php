<?php
$tax = 1.1;
const TAX = 1.1;

define(TAX, 10);
//defineよりconstで使用するのが吉か
echo "消費税は、{$tax}%です";
echo "消費税は、", TAX, "%です";
