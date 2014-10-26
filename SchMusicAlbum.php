<?php
class SchMusicAlbum extends SchMusicPlaylist{
	protected $byArtist	=	'MusicGroup';
	function __construct(){$this->namespace = "MusicAlbum";}
}