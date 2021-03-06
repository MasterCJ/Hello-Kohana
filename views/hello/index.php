<!DOCTYPE html>
<html>
<head>
<title>Hello Demo - Index</title>
</head>
<body>
<p>Nothing too fancy here, just a few examples of this in action.</p>
<ol>
	<li><a href="<?php echo Request::instance()->uri(array('action' => 'demo', 'id' => 1)); ?>">Demo 1</a></li>
	<li><a href="<?php echo Request::instance()->uri(array('action' => 'demo', 'id' => 2)); ?>">Demo 2</a></li>
	<li><a href="<?php echo Request::instance()->uri(array('action' => 'demo', 'id' => 3)); ?>">Demo 3</a></li>
	<li><a href="<?php echo Request::instance()->uri(array('action' => 'demo', 'id' => 4)); ?>">Demo 4</a></li>
</ol>
<p>Here's the readme.</p>
<pre>
Hello, Kohana!
==============

Overview
--------

This is a very simple example plugin for Kohana. It does nearly nothing, but
shows all the basics of a Kohana plugin. It uses the Kohana config interface to
get its configuration options, has all the correct class structures and is
commented thoroughly. With this, it should be easy to see how a plugin is
structured and may even be a good starting point for a plugin of your own!

Installation
------------

1. `git submodule add git://github.com/MasterCJ/kohana-hello.git modules/hello`
2. Enable 'hello' in your bootstrap file
3. Use the Hello class in your project

Usage
-----

	$hello = new Hello();
	$text = $hello->say_something();

	$hello = new Hello('rude');
	$insult = $hello->say_something();

	$hello = new Hello(false, array(
		'phrases' => array(
			'I am custom text!',
			'Salutations, programmer!',
		),
	));
	$text = $hello->say_something();

u mad?
------

This one is nice and simple by design, so I'm not sure if anyone could have any
trouble understanding it. If however you do find yourself scratching your head
over any of this plugin, let me know and I'll be happy to call you a duck. You
can reach me at mastercj@mastercj.net or through github.
</pre>
</body>
</html>