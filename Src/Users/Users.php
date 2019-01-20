<?php
namespace App\Users;
use PDO;
Class Users{
	public $id='';
	public $stu_name='';
	public $stu_dob='';
	public $stu_dept='';
	public $keyword='';
	public $pdo='';
	public function __construct(){
		session_start();
		$this->pdo=new PDO('mysql:host=localhost;dbname=studentinfo','root','');
	}
	public function setData($data=''){
		if (array_key_exists('id', $data)) {
			$this->id=$data['id'];
		}
                if (array_key_exists('stu_name', $data)) {
			$this->stu_name=$data['stu_name'];
		}
			if (array_key_exists('stu_dob', $data)) {
			$this->stu_dob=$data['stu_dob'];
		}
		if (array_key_exists('stu_dept', $data)) {
			$this->stu_dept=$data['stu_dept'];
		}
                if (array_key_exists('keyword', $data)) {
			$this->keyword=$data['keyword'];
		}
	return $this;
	}
	public function store(){
		try{
	
			$data="INSERT INTO students_info(`id`,`stu_name`,`stu_dob`,`stu_dept`)VALUES(:id,:stu_name,:stu_dob,:stu_dept)";
			$stmt=$this->pdo->prepare($data);
			$stmt->execute(
				 array(
				 		':id'=>$this->id,
				 		':stu_name'=>$this->stu_name,
				 		':stu_dob'=>$this->stu_dob,
				 		':stu_dept'=>$this->stu_dept
				 		 )
				);
			if ($stmt) {
			
				$_SESSION['message']="Data successfully added";
			header('Location:index.php');
			}

		}catch(PDOException $e){
			echo "ERROR".$e->getMessage();
		}
	
	}
            public function validity()
    {
        try {
            $query = "SELECT  * FROM `students_info` where id='$this->id'";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function searchResult(){
      
        		try{
			
			$query="SELECT * FROM `students_info` WHERE id="."'".$this->keyword."'"."OR stu_dept="."'".$this->keyword."'";
                       
			$stmt=$this->pdo->prepare($query);
			$stmt->execute();
			$data=$stmt->fetchAll();
//                        echo '<pre>';
//                        print_r($data);
//                        die();
         
			return $data;
	
		}catch(PDOException $e){
			echo "ERROR".$e->getMessage();	
		}
    }
  
          public function show() {
        try {
            $query = "SELECT * FROM `students_info` Where id=".$this->id;
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();
            // print_r($data);
            // die();
            return $data;
        } catch (PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
      public function update() {

        try {

            $data = "UPDATE `students_info` SET 
                    `id`=:id,
                    `stu_name`=:stu_name,
                    `stu_dob`=:stu_dob,
                    `stu_dept`=:stu_dept 
                    WHERE `id`=:id";
            $stmt = $this->pdo->prepare($data);
            $stmt->execute(
                    array(':id' => $this->id,
                        ':stu_name' => $this->stu_name,
                        ':stu_dob' => $this->stu_dob,
                        ':stu_dept' => $this->stu_dept
                    )
            );
            if ($stmt) {

                $_SESSION['message'] = "Data successfully Updated";
                header('Location:edit.php');
            }
        } catch (PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
      }
    
        	public function delete(){
				
			try{
	
			$query= "DELETE FROM `students_info` WHERE `students_info`.`id` =".$this->id;
			$stmt=$this->pdo->query($query);
			$stmt->execute();
			// print_r($data);
			// die();
		if ($stmt) {
		
				$_SESSION['fail']="Data successfully deleted";
			header('Location:search.php');
			}
		}catch(PDOException $e){
			echo "ERROR".$e->getMessage();	
		}	
			}
        

}  