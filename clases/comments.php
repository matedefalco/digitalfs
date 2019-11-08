<?php

class Comments
{
  private $username;
  private $comment;
  private $comment_likes;
  private $comment_date;


  function __construct($username, $comment, $comment_likes, $comment_date)
  {
    $this->username = $username;
    $this->comment = $comment;
    $this->comment_likes = $comment_likes;
    $this->comment_date = $comment_date;
  }

  public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getComment(){
		return $this->comment;
	}

	public function setComment($comment){
		$this->comment = $comment;
	}

	public function getComment_likes(){
		return $this->comment_likes;
	}

	public function setComment_likes($comment_likes){
		$this->comment_likes = $comment_likes;
	}

	public function getComment_date(){
		return $this->comment_date;
	}

	public function setComment_date($comment_date){
		$this->comment_date = $comment_date;
	}

}

?>
