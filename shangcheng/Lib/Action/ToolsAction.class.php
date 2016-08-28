<?php
class ToolsAction extends Action{
	public function getCurrentUser(){
		echo $_SESSION["username"]."00000000000000";
	}
}