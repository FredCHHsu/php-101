<?php

interface ResourceInterface
{
	public function getAll();
}

class DatabaseResource implements ResourceInterface
{
	/*
	 * @return array all rows of ......
	 */
	public function getAll()
	{
	........
	}
}

class Message
{

	public function __construct(ResourceInterface $resource)
	{

	}
}

$message = new Message(new DatabaseResource);
$message = new Message(new FileResource);