<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ChartsController extends BaseController
{
    public function chart2_json(Request $request, Response $response, $args) {
        // grab 10 most recent values, sort in asc order
        try {
            $user_no = $_GET['user_no'];
            $sensor_no = $_GET['sensor_no'];
            $type = $_GET['type'];
            $view_type = $_GET['view_type'];

            if($type == 0){
                if($view_type == 0){
                    $sql = "SELECT * 
                    from Air_data 
                    WHERE sensor_no = :sensor_no
                    ORDER BY time_in
                    LIMIT 10";
                    $stmt = $this->em->getConnection()->prepare($sql);
                    $params['sensor_no'] = $sensor_no;
                    $stmt->execute($params);
                }
                else{
                    $start_date = $_GET['start_date'];
                    $end_date = $_GET['end_date'];
                    $sql = "SELECT * 
                            FROM Air_data 
                            WHERE sensor_no = :sensor_no 
                            AND STR_TO_DATE(time_in, '%Y-%m-%d %H:%i:%s')
                                BETWEEN STR_TO_DATE(:start_date, '%Y-%m-%d %H:%i:%s')
                                    AND STR_TO_DATE(:end_date, '%Y-%m-%d %H:%i:%s')";
                    $stmt = $this->em->getConnection()->prepare($sql);
                    $params['sensor_no'] = $sensor_no;
                    $params['start_date'] = $start_date;
                    $params['end_date'] = $end_date;
                    $stmt->execute($params);
                }
            }
            else if($type == 1){
                if($view_type == 0){
                    $sql = "SELECT * 
                            FROM (SELECT * 
                                FROM Heart_data 
                                WHERE user_no = :user_no 
                                ORDER BY time_in DESC LIMIT 10) A ORDER BY A.time_in";
                    $stmt = $this->em->getConnection()->prepare($sql);
                    $params['user_no'] = $user_no;
                    $stmt->execute($params);
                }
                else{
                    $start_date = $_GET['start_date'];
                    $end_date = $_GET['end_date'];
                    $sql = "SELECT * 
                            FROM Heart_data 
                            WHERE sensor_no = :sensor_no 
                                AND STR_TO_DATE(time_in, '%Y-%m-%d %H:%i:%s')
                                BETWEEN STR_TO_DATE(:start_date, '%Y-%m-%d %H:%i:%s')
                                    AND STR_TO_DATE(:end_date, '%Y-%m-%d %H:%i:%s')";
                    $stmt = $this->em->getConnection()->prepare($sql);
                    $params['sensor_no'] = $sensor_no;
                    $params['start_date'] = $start_date;
                    $params['end_date'] = $end_date;
                    $stmt->execute($params);
                }
            }
            
            $result = $stmt->fetchAll();
            
            if ($result && $type == 0) {
                $json_array['cols'] = array(
                    array('id'=>'', 'label'=>'date/time', 'type'=>'string'),
                    array('id'=>'', 'label'=>'CO', 'type'=>'number'),
                    array('id'=>'', 'label'=>'SO2', 'type'=>'number'),
                    array('id'=>'', 'label'=>'O3', 'type'=>'number'),
                    array('id'=>'', 'label'=>'PM2.5', 'type'=>'number'),
                    array('id'=>'', 'label'=>'NO2', 'type'=>'number')
                );

                foreach ($result as $row) {
                    $sensor_array = array();
                    $sensor_array[] = array('v'=>$row['time_in']);
                        $sensor_array[] = array('v'=>$row['CO_aqi']);
                        $sensor_array[] = array('v'=>$row['SO2_aqi']);
                        $sensor_array[] = array('v'=>$row['O3_aqi']);
                        $sensor_array[] = array('v'=>$row['PM2.5_aqi']);
                        $sensor_array[] = array('v'=>$row['NO2_aqi']);
                   
                    $rows[] = array('c'=>$sensor_array);
                }
            
                $json_array['rows'] = $rows;
                
                return $response->withHeader('Content-type', 'application/json')
                ->write(json_encode($json_array, JSON_NUMERIC_CHECK))
                ->withStatus(200);
            } 
            else if ($result && $type == 1) {
                $json_array['cols'] = array(
                    array('id'=>'', 'label'=>'date/time', 'type'=>'string'),
                    array('id'=>'', 'label'=>'heart', 'type'=>'number'),
                    array('id'=>'', 'label'=>'rr_interval', 'type'=>'number')
                );

                foreach ($result as $row) {
                    $sensor_array = array();
                    $sensor_array[] = array('v'=>$row['time_in']);
                    $sensor_array[] = array('v'=>$row['heart']);
                    $sensor_array[] = array('v'=>$row['rr_interval']);
                   
                    $rows[] = array('c'=>$sensor_array);
                }
            
                $json_array['rows'] = $rows;
                
                return $response->withHeader('Content-type', 'application/json')
                ->write(json_encode($json_array, JSON_NUMERIC_CHECK))
                ->withStatus(200);
            }
            else {
                $response = $response->withStatus(404);
            }
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
   } 

    public function heart_chart(Request $request, Response $response, $args) {
        $user_no = $_SESSION['user_no'];
        $sql = "SELECT username, email FROM Users WHERE Users.user_no = $user_no;";
		$stmt= $this->em->getConnection()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();

		$username = $result['username'];
		$email = $result['email'];
        
        $response = $this->view->render($response, 'heart_chart.twig', ['username'=>$username, 'email'=>$email, 'user_no'=>$user_no]);
        return $response;
    }    

    public function air_chart(Request $request, Response $response, $args) {
        $user_no = $_SESSION['user_no'];
        $sql = "SELECT username, email FROM Users WHERE Users.user_no = $user_no;";
		$stmt= $this->em->getConnection()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();

		$username = $result['username'];
		$email = $result['email'];
        
        $response = $this->view->render($response, 'air_chart.twig', ['email'=>$email, 'username'=>$username, 'user_no'=>$user_no, 'flag'=>0, 'sensor_no'=>1]);
        return $response;
    }    

    public function receive_combobox(Request $request, Response $response, $args) {
        $user_no = $_GET['user_no'];
        $type = $_GET['type'];
        //air data receive
        
        if($type == 0){
            $sql = "SELECT sensor_no from Sensors WHERE user_no = :user_no AND type = 'A'";
            $stmt = $this->em->getConnection()->prepare($sql);
            $params['user_no'] = $user_no;
            $stmt->execute($params);
        }
        //heart data receive
        else if($type == 1){
            $sql = "SELECT sensor_no from Sensors WHERE user_no = :user_no AND type = 'H' LIMIT 1";
            $stmt = $this->em->getConnection()->prepare($sql);
            $params['user_no'] = $user_no;
            $stmt->execute($params);
        }
        else{
            $sql = "SELECT * from Sensors WHERE user_no = :user_no ORDER BY type DESC";
            $stmt = $this->em->getConnection()->prepare($sql);
            $params['user_no'] = $user_no;
            $stmt->execute($params);
        }

        try {
            $result = $stmt->fetchAll();
            if($type == 2){
                $sensor_list = [];
				foreach ($result as $sensor) {
                    $sensor_list[] =
					array(
                        "sensor_no"=>$sensor['sensor_no'],
                        "sname"=>$sensor['sname'],
                        "type"=>$sensor['type']
                    );
                }
                
                return $response->withHeader('Content-type', 'application/json')
                ->write(json_encode($sensor_list, JSON_NUMERIC_CHECK))
                ->withStatus(200);
            }
            else if ($result) {
                $combobox = [];
				foreach ($result as $combo) {
                    $combobox[] =
					array(
                        "sensor_no"=>$combo['sensor_no']
                    );
                }
                
                return $response->withHeader('Content-type', 'application/json')
                ->write(json_encode($combobox, JSON_NUMERIC_CHECK))
                ->withStatus(200);

            } else {
                echo "ERROR";
                $response = $response->withStatus(404);
            }
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    } 
}
