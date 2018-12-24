<?
	class Mail
	{
		public $to, $theme, $name, $surname, $message, $phone, $email, $emailmess;
		public $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";

		function __construct($to, $theme, $name, $surname, $message, $phone, $email)
		{
			$this->to = $to;
			$this->theme = $theme;
			$this->name = $name;
			$this->surname = $surname;
			$this->message = $message;
			$this->phone = $phone;
			$this->email = $email;
			$this->emailmess = "<table>";
			if(!empty($this->name)){
				$this->emailmess .= "<tr><td style='border:1px solid;padding:6px;'>Имя: </td><td style='border:1px solid;padding:6px;'>".$this->name."</td></tr>";
			}
			if(!empty($this->surname)){
				$this->emailmess .= "<tr><td style='border:1px solid;padding:6px;'>Фамилия: </td><td style='border:1px solid;padding:6px;'>".$this->surname."</td></tr>";
			}
			if(!empty($this->message)){
				$this->emailmess .= "<tr><td style='border:1px solid;padding:6px;'>Сообщение: </td><td style='border:1px solid;padding:6px;'>".$this->message."</td></tr>";
			}
			if(!empty($this->phone)){
				$this->emailmess .= "<tr><td style='border:1px solid;padding:6px;'>Телефон: </td><td style='border:1px solid;padding:6px;'>".$this->phone."</td></tr>";
			}
			if(!empty($this->email)){
				$this->emailmess .= "<tr><td style='border:1px solid;padding:6px;'>Email: </td><td style='border:1px solid;padding:6px;'>".$this->email."</td></tr>";
			}
			$this->emailmess .= "</table>";
		}


		function sendMail()
		{
			if (isset($_POST['name']) && !empty($this->name))
			{
				mail($this->to, $this->theme, $this->emailmess, $this->headers);
				header('Location: /thanks.html');
			}
			else
			{
				header("Location: /");
			}
		}
	}
?>
