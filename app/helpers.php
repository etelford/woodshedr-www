<?php

function classForRoute($name)
{
	$mainRoute = explode("/", app('request')->route()->getUri())[0];

	return ($mainRoute === $name) ? 'active' : '';
}