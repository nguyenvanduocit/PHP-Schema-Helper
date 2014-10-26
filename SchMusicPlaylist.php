<?php
class SchMusicPlaylist extends SchCreativeWork{
	protected $numTracks	=	'Integer';
	protected $track	=	'MusicRecording';
	function __construct(){$this->namespace = "MusicPlaylist";}
}