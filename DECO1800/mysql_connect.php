<?php
    
    if($_GET["fun"]=="insert"){
      $param['score'] = $_GET["score"];
      $param['name'] = $_GET["name"];
      insert($param);
    } else if($_GET["fun"]=="read"){
        read();
    }
    function insert($param){
        $mysqli = mysqli_connect("127.0.0.1", "u2bic_jodi", "!QAZ2wsx#EDC", "u2bic_quiz_score");
        $date=date("Y-m-d H:i");
        $result = $mysqli->query("insert INTO score(name,score,time ) values ('".$param["name"]."', '".$param['score']."','".$date."')");
        echo json_encode($result) ;
    }
    function read(){
        $mysqli = mysqli_connect("127.0.0.1", "u2bic_jodi", "!QAZ2wsx#EDC", "u2bic_quiz_score");
        $result = $mysqli->query("SELECT * FROM score ORDER BY  score DESC limit 10");
        if($result){
           while ($row = $result->fetch_object()){
               $user_arr[] = $row;
           }           
          
       }
        echo json_encode($user_arr);
    }
  

?>