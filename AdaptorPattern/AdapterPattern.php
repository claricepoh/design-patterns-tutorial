<?php

/** Use Adapter Pattern to transform JSON data to XML format required by third-party system */

// Define target interface
interface IExportFormat {
  public function export();
}

// Define adaptee class that handles JSON data
class JSONData {
  private $data;

  public function __construct($data) {
    $this->data = $data;
  }

  public function getJSON() {
    return json_encode($this->data);
  }
}

// Adaptor that holds reference to a wrapped object of adaptee
class JSONToXMLAdapter implements IExportFormat {
  private $jsonData;

  public function __construct(JSONData $jsonData) {
    $this->jsonData = $jsonData;
  }

  public function export() {
    // Convert JSON to an associative array
    $arrayData = json_decode($this->jsonData->getJSON(), true);
      
    // Convert associative array to XML format
    $xml = new SimpleXMLElement('<root/>');
    $this->arrayToXML($arrayData, $xml);
    return $xml->asXML();
  }

  private function arrayToXML($data, &$xml) {
    foreach ($data as $key => $value) {
      if (is_array($value)) {
        $subnode = $xml->addChild($key);
        $this->arrayToXML($value, $subnode);
      } else {
        $xml->addChild("$key", htmlspecialchars("$value"));
      }
    }
  }
}

// Existing JSON data
$data = [
  'title' => 'Harry Potter',
  'author' => 'J.K.Rowling',
  'genre' => 'fantasy literature',
];

$jsonData = new JSONData($data);

// Use the adapter to convert JSON to XML format
$adapter = new JSONToXMLAdapter($jsonData);
$xmlOutput = $adapter->export();

echo $xmlOutput;