<?php
	
	require_once("api.php");
	//error_reporting(0);

	function getWord($word)
	{
		$app_id = "12533548";
        $app_key = "236ad2a6ad9eb6d509a89e264b96fce8";
		$url = '///https://od-api.oxforddictionaries.com/api/v1';
		
		$language = "en";
        $target_lang = "nso";
        $word_id = strtolower($word); //word id is case sensitive and lowercase is required
		
		$url= "https://od-api.oxforddictionaries.com:443/api/v1/entries/" . $language . "/" . $word_id . "/translations=" . $target_lang;
        $headers = array('app_id: ' .$app_id, "app_key: " . $app_key,'Accept","application/json' );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        //Need to fix this error curl_setopt($ch, CURLOPT_GET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch)); 
        }
        // Close connection
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
		
		if($code == 200)
		{
			return $result;
		}
		else
		{
			return "Not found";
		}
		
        
	}
	

	
		$word_type="";
		$word="";
		$setswana_example="";
		$english_example="";
		$english_word="";

		if(isset($_GET['word']))
		{
			/*$word= $setup->search_word($_GET['word']);
			if($word=="error")
			{
				echo"word not found";
			}
			else
			{
				echo $word[1].";".$word[2];
			}*/

			$word = $_GET['word'];
					
			$json = getWord($word);

			if($json == "Not found")
			{
				echo $word . " not found on the Sepedi dictionary check your spelling";
			}

			else
			{
				$result = json_decode ($json);
											
				$word_type = $result->results[0]->lexicalEntries[0]->lexicalCategory;
						
				if(isset($result->results[0]->lexicalEntries[0]->entries[0]->senses[0]->examples[0]))
				{
					$setswana_example = $result->results[0]->lexicalEntries[0]->entries[0]->senses[0]->examples[0]->text;
					$english_example = $result->results[0]->lexicalEntries[0]->entries[0]->senses[0]->examples[0]->translations[0]->text;
					$english_word = $result->results[0]->lexicalEntries[0]->entries[0]->senses[0]->translations[0]->text;
							
				}
				else
				{
					$setswana_example = $result->results[1]->lexicalEntries[0]->entries[0]->senses[0]->examples[0]->text;
					$english_example = $result->results[1]->lexicalEntries[0]->entries[0]->senses[0]->examples[0]->translations[0]->text;
					$english_word = $result->results[1]->lexicalEntries[0]->entries[0]->senses[0]->translations[0]->text;
				}
						
				
						
				//$word_type = $word . " is a " . strtolower($word_type);
				//$trans_of="Translation of ";
				$translated=$word_type.";".$english_example.";".$setswana_example.";".$english_word;
				//$translated_word=json_encode($translated);
				//echo $translated_word;
			
					
			}
		}
	

?>