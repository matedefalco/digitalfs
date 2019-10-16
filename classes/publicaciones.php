<?php
include "comments.php";

class Publicaciones
{
  private $image_name;
  private $image_path;
  private $image_likes;
  private $image_date;
  private $comments;


  function __construct($image_name, $image_path, $image_likes, $image_date, $comments)
  {
    $this->image_name = $image_name;
    $this->image_path = $image_path;
    $this->image_likes = $image_likes;
    $this->image_date = $image_date;
    $this->comments = $comments;
  }

  public function getImage_name(){
		return $this->image_name;
	}

	public function setImage_name($image_name){
		$this->image_name = $image_name;
	}

	public function getImage_path(){
		return $this->image_path;
	}

	public function setImage_path($image_path){
		$this->image_path = $image_path;
	}

	public function getImage_likes(){
		return $this->image_likes;
	}

	public function setImage_likes($image_likes){
		$this->image_likes = $image_likes;
	}

  public function getImage_date(){
		return $this->image_date;
	}

	public function setImage_date($image_date){
		$this->image_date = $image_date;
	}


	public function getComments(){
		return $this->comments;
	}

	public function setComments($comments){
		$this->comments = $comments;
	}

}




 ?>
