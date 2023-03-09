<?php
require_once 'vendor/autoload.php';

use OpenAI\Api\SpeechApi;

// Set up the API client
$client = new SpeechApi();
$client->getConfig()->setApiKey('sk-');

// Get the transcription from the POST data
$transcription = $_POST['transcript'];

// Call the API to transcribe the audio
$result = $client->speechToText($transcription);

// Return the transcription result as JSON
echo json_encode($result->getTranscription());
?>