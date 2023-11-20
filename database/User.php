<?php
class User {
    private $user_id;
	private $user_name;
	private $user_email;
	private $user_password;
	private $user_status;
	private $user_created_at;
	private $user_verification_code;
	private $user_login_status;
	private $user_token;
	private $user_connection_id;
	public $connect;
    public $success = false, $error=false;

	public function __construct()
	{
		require_once('Database_connection.php');

		$database_object = new Database_connection;

		$this->connect = $database_object->connect();
	}

    /*Setters*/
    public function set_user_name($user_name) {
        $this->user_name = $user_name;
    }

    public function set_email($user_email) {
        $this->user_email = $user_email;
    }

    public function set_password($user_password) {
        $this->user_password = $user_password;
    }

    public function set_status($user_status) {
        $this->user_status = $user_status;
    }

    public function set_created_at($user_created_at) {
        $this->user_created_at = $user_created_at;
    }

    /*Getters*/

    public function get_user() {
        return $this->user_name;
    }

    public function get_user_email() {
        return $this->user_email;
    }
    public function get_passwordr() {
        return $this->user_password;
    }
    public function get_status() {
        return $this->user_status;
    }
    public function get_created_at() {
        return $this->user_created_at;
    }

    function setUserVerificationCode($user_verification_code)
	{
		$this->user_verification_code = $user_verification_code;
	}

	function getUserVerificationCode()
	{
		return $this->user_verification_code;
	}

    //Register data
    function save_data()
	{
		$query = "
		INSERT INTO user (user, email, password, user_verification_code, status) VALUES (:user_name, :user_email, :user_password, :user_verification_code, :status)
		";
		$statement = $this->connect->prepare($query);

		$statement->bindParam(':user_name', $this->user_name);

		$statement->bindParam(':user_email', $this->user_email);

		$statement->bindParam(':user_password', $this->user_password);

        $statement->bindParam(':user_verification_code', $this->user_verification_code);

		$statement->bindParam(':status', $this->user_status);


		if($statement->execute())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

    function is_valid_email_verification_code()
	{
		$query = "
		SELECT * FROM user WHERE user_verification_code = :user_verification_code
		";

		$statement = $this->connect->prepare($query);

		$statement->bindParam(':user_verification_code', $this->user_verification_code);

		$statement->execute();

		if($statement->rowCount() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

    function setUserStatus($user_status)
	{
		$this->user_status = $user_status;
	}

    function enable_user_account()
	{
		$query = "
		UPDATE user 
		SET status = :status 
		WHERE user_verification_code = :user_verification_code
		";

		$statement = $this->connect->prepare($query);

		$statement->bindParam(':status', $this->user_status);

		$statement->bindParam(':user_verification_code', $this->user_verification_code);

		if($statement->execute())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function login() {
		$query = "
		SELECT * FROM user WHERE (email =:user_email OR user.user =:user) AND password=:user_password
		";

		$statement = $this->connect->prepare($query);

		$statement->bindParam(':user_email', $this->user_email);
		$statement->bindParam(':user', $this->user_email);
		$statement->bindParam(':user_password', $this->user_password);

		if($statement->execute())
		{
			$user_data = $statement->fetchAll(PDO::FETCH_ASSOC);
		}
		return $user_data;
	}
}