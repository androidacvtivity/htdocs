<?php

require_once 'connection.php'; 
/**
 * This class will contain methods to receive our http requests, manipulate the
 *  database and send
 * resultcu back to the client
 */
class Cl_caem2{
    /**
     * 1. CONNECT TO DATABASE.
     * 2. RETURN CONNECTION OBJECT
     * 3. IF NO CONNECTION THEN RETURN NULL.
     */
    public function connectvw()
    {
        $con=new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,
        Constants::$DB_NAME);
        if($con->connect_error) {
            return null;
        }else{
            return $con;
        }
    }

    
    
   
    /**
     * This method will:
     * 1. Connect to MySQL.
     * 2. Select all data from database.
     * 3. Return those data as a response.
     */
    public function selectvw()
    {
        $con=$this->connectvw();
        if($con != null)
        {
            $resultcu=$con->query(Constants::$SQL_SELECT_ALL_6);
            if($resultcu->num_rows > 0)
            {
                $cl_caem2 = array();
                while($row=$resultcu->fetch_array())
                {
                    array_push($cl_caem2, array("id"=>$row['id'],"CODUL"=>$row['CODUL'],
					"DENUMIRE"=>$row['DENUMIRE'],"GRUPA"=>$row['GRUPA'],"ORDINE"=>$row['ORDINE']
					,"FULL_CODE"=>$row['FULL_CODE'],"NUM_CODE"=>$row['NUM_CODE'],"PRIM"=>$row['PRIM']));
					
                }
                print(json_encode(array("codecu" => 1,"messagecu"=>"Success", "resultcu"=>$cl_caem2)));
            }else{
                print(json_encode(array("codecu" => 0, "messagecu"=>"Data Not Found")));
            }
            $con->close();

        }else{
            print(json_encode(array('codecu' =>3,
            'messagecu' => 'ERROR: PHP WAS UNABLE TO CONNECT TO MYSQL DUE TO NULL CONNECTION.')));
        }
    }
    
	
	
	
	
	public function search_caem2()
    {
		$querycu=$_POST['querycu'];
		$limitcu=$_POST['limitcu'];
        $startcu=$_POST['startcu'];

		$sql="SELECT * FROM cl_caem2	
		
		
		WHERE 
		 
		 CODUL LIKE '%$querycu%' 
		 OR 
		 DENUMIRE LIKE '%$querycu%' 
		 OR 
		 full_code LIKE CONCAT('%','%$querycu%',';%')

         ORDER BY id
	     LIMIT
         $limitcu OFFSET $startcu
		 ";

        $con=$this->connectvw();
        if($con != null)
        {
            $resultcu=$con->query($sql);
            if($resultcu->num_rows>0)
            {
                $cl_caem2=array();
                while($row=$resultcu->fetch_array())
                {
                   
					
					 array_push($cl_caem2, array("id"=>$row['id'],"CODUL"=>$row['CODUL'],
					"DENUMIRE"=>$row['DENUMIRE'],"GRUPA"=>$row['GRUPA'],"ORDINE"=>$row['ORDINE']
					,"FULL_CODE"=>$row['FULL_CODE'],"NUM_CODE"=>$row['NUM_CODE'],"PRIM"=>$row['PRIM']));
					
					
					
					
                }
                print(json_encode(array("codecu" => 1, "messagecu"=>"Success", "resultcu"=>$cl_caem2)));
            }else{
                print(json_encode(array("codecu" => 0, "messagecu"=>"Data Not Found")));
            }
            $con->close();

        }else{
            print(json_encode(array('codecu' =>3,
            'messagecu' => 'ERROR: PHP WAS UNABLE TO CONNECT TO MYSQL DUE TO NULL CONNECTION.')));
        }
    }
	
	
	
    /**
     * This method will handle our HTTP Requests.
     * Basically it checks the request type and then determines the method that needs to be
     * executed. It's kind of a controller.
     */
    public function handleRequest() {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if (isset($_POST['actioncu'])) {

                $actioncu=$_POST['actioncu'];

                if($actioncu == 'INSERT'){
                    $this->insert();
                }else if($actioncu == 'UPDATE'){
                    $this->update();
                }else if($actioncu == 'DELETE'){
                    $this->delete();
				}else if($actioncu == 'GET_PAGINATEDCAEM2'){
                    $this->search_caem2();
				}else if($actioncu == 'GET_PAGINATED_SEARCHCAEM2'){
                    $this->search_caem2();
                }else{
					print(json_encode(array('codecu' =>4, 'messagecu' => 'INVALID REQUEST.')));
				}
            } else{
				print(json_encode(array('codecu' =>5, 'messagecu' => 'POST TYPE UNKNOWN.')));
            }

        }else{
            $this->selectvw();
        }
    }
}

//Outside the class. Instantiate Scientist then invoke the handleRequest() to listen to our requests.
$s=new Cl_caem2();
$s->handleRequest();

//end




