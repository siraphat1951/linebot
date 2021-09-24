 <?php
  

function send_LINE($msg){
 $access_token = 'sOMuD9NeLoVAAcTx1DTaYbIY/A06ShGFU2U2NGwt39wrEjHy49MDG5WARirIjOAgRAKJRL0Or9tB7P1c+GvLd1kc+cvX//LVRgbCJEZCFUzvMn+CZKnYQDwAO8wIa13q5hWJMEU/coc6jUgj5vCDpQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uceac8a8892aeb9b1f30c97cb6bdbf99d',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
