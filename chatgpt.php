<?php 

$prompt = "What is ChatGPT? Is AI bad?";

$data = array( 
	"prompt" => $prompt, // Chat-GPT prompt
	"max_tokens" => 500
);
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/engines/davinci-codex/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
 
$headers = array();
$api_key = "1111111-22222";
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer ' . $api_key;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $response;

?>
