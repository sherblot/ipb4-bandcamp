//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook2 extends _HOOK_CLASS_
{
	
  public function  content() {
    $content = parent::content();
    return $this->_replaceText($content);
  }
  
  /**
	 * Do the actual replacement
	 *
	 * @access	protected
	 * @param	string		$txt	Parsed text from database to be edited
	 * @return	string				BBCode content, ready for editing
	 */
	protected function _replaceText( $txt )
	{	
		$orig	= $txt;
		$txt	= preg_replace_callback( '#(\[bandcamp([^\]]+?)?\])#is' , array( $this, '_parseCode' ), $txt );

		return $txt;
	}
	
	/**
	 * Generating the output code for each bandcamp bbcode sections.
	 *
	 * @access	protected
	 * @param	string		$txt	Parsed text from database to be edited
	 * @return	string				BBCode content, ready for editing
	 */
	protected function _parseCode($txt)
	{
		$_orig	= $txt;
		$txt = $txt[1];

		if ( ! $txt )
		{
			return '';
		}
		
		$album = 0;
		$track = 0;
		
		if (preg_match('#album=([0-9]+)#is', $txt, $matches)) {
			$album = 'album='.$matches[1].'/';
		}
		
		if (preg_match('#track=([0-9]+)#is', $txt, $matches)) {
			$track = 'track='.$matches[1].'/';
		}
		
		if (!empty($album) || !empty($track)) {
			return '<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/'
				.$album.'size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/'.$track.'transparent=true/" seamless></iframe>';
		}
		
		return '';		
	}

}
