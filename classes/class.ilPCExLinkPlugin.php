<?php

include_once("./Services/COPage/classes/class.ilPageComponentPlugin.php");
 
/**
 * Example user interface plugin
 *
 * @author Mohammed Helwani <mhd_helwani@hotmail.com>
 * @version $Id$
 *
 */
class ilPCExLinkPlugin extends ilPageComponentPlugin
{
	/**
	 * Get plugin name 
	 *
	 * @return string
	 */
	function getPluginName()
	{
		return "PCExLink";
	}
	
	function isValidParentType($a_parent_type)
	{
		return false;
	}
	
	
	/**
	 * Get css files
	 */
	function getCssFiles()
	{
		return array("css/exlink.css");
	}

}

?>
