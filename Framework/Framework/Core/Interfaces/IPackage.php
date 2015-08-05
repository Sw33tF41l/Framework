<?php
interface IPlugin {
	public function initialize($Host);
	public function install();
	public function update();
	public function uninstall();
	public function main($args);
}