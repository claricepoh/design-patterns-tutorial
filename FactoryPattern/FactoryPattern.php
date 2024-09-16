<?php

// Creator (Factory class) defines a factory method as a substitution for direct constructor call of creating renderer objects
// this enables changing the type of renderer being created by its subclassess
abstract class ViewHelper {
  // factory method, returns the abstract renderer
  // allows subclassess return any concrete renderers without breaking the superclass's contract
  abstract public function getRenderer(): InterfaceRenderer;

  public function render(): void {
    // call the factory method to create renderer object
    $renderer = $this->getRenderer();
    $renderer->render();
  }
}

// Concrete creator implements the factory method to produce specific HTML object 
class HTMLView extends ViewHelper {
  public function getRenderer(): InterfaceRenderer {
    return new Renderer_HTML();
  } 
}

// Concrete creator implements the factory method to produce specific XML object
class XMLView extends ViewHelper {
  public function getRenderer(): InterfaceRenderer {
    return new Renderer_XML();
  } 
}

// Renderer interface (Product) that defines common behavior of various types of renderer to be created by the factory method 
interface InterfaceRenderer {
  public function render(): void;
}

// Concrete product 
class Renderer_HTML implements InterfaceRenderer {
  public function render(): void {
    echo "This is html renderer";
  }
}

// Concrete product
class Renderer_XML implements InterfaceRenderer {
  public function render(): void {
    echo "This is xml renderer";
  }
}

// Client code can work with any subclass of ViewHelper due to independent from concrete classes
function clientCode(ViewHelper $creator) {
  $creator->render();
}


echo "Testing Concrete Creator HTML: \n";
clientCode(new HTMLView());
echo "\n\n";

echo "Testing Concrete Creator XML: \n";
clientCode(new XMLView());
echo "\n\n";
