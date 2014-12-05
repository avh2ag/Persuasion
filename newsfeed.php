<html>
<head></head>
<body>
  <style>
   .status{
    border: 1px solid black;
    min-height: 50px;
    width: 400px; 
    display: block;
    margin-left: 35%;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 3px;
   }
   .status-content{
    margin-left: 15px;
    margin-top: 10px;
    margin-right: 15px;
    margin-bottom: 15px;
    border: 1px solid black;
    border-radius: 5px;
    padding: 4px;
   }
   .footer{
      background: #f9f9f9;
      border-bottom: 1px solid;
      border-radius: 5px;
      min-height: 20px;
      padding-left: 5px;
      padding-left: 5px;
   }
   .people{
      display: inline-block; /*fix this then switch over */
   }
   .person-from{
    margin-left: 10px;
    display: inline-block;
   }
   .person-to{
    display: inline-block;
   }
   .arrow{
    font-weight: bold;
    font-size: large;
   }
  </style>
<?php
//Must Create Connection/Iterate through the category
  $mysqli = new mysqli("dbm2.itc.virginia.edu","publicread","","MDST3703F14_cmm4kd");
  if ($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
  }
  //distinguish post from status just by adding person from
  $status1 = '<div class="status">';
  $people = '<div class="people">';
  $open_person_from = '<h3 class="person-from">'; //add "from"
  $close_h3 = '</h3>';
  $arrow = '<span class="arrow"> > </span>';
  $open_person_to = '<h3 class="person-to">';
  $open_status_content = '<div class="status-content">';
  $open_footer = '<div class="footer">';
  $close_div = '</div>';

  //test




  //add filter later.
  $sql = "SELECT * from interactions";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $content = $row["content"];
      $to = $row["sent_to"];
      $from = $row["sent_from"];
      $chapter = $row["chapter"];
      $order = $row["order"];
      $type = $row["type"];
      //create div
      echo $status1;
      echo $people;
      echo $open_person_from;
      echo $from;
      echo $close_h3;
      if ($type =="post"){
        echo $arrow;
        echo $open_person_to;
        echo $to;
        echo $close_h3;
      }
      echo $close_div; // end people
      echo $open_status_content;
      echo $content;
      echo $close_div; //end status content
      echo $open_footer;
      echo "Write a comment...";
      echo $close_div; //end footer

      echo $close_div; // end status
    }
  }  

  $mysqli->close();
?>
</body>
</html>