<?php

class Playlist 
{
  public $songs = [];
  
  public function addSong(Song $song): void
  {
    $this->songs[] = $song;
  }

  public function getLength(): int
  {
  	// return count($this->songs);
  	return '4 songs';
  }

}
