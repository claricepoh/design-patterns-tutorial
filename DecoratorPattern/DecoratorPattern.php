<?php

// Interface defines common behavior to both primary component and optional decorators
interface InterfaceRenderer {
  public function render(): void;
}

// Concrete component acts as primary component,  defines base behavior of outputting HTML tags 
class RendererHtmlTag implements InterfaceRenderer {
  public function render(): void {
    echo "Rendering html tags \n";
  }
}

// Base decorator class holds a reference to a wrapped object. i.e RendererHTMLTag object
// serve as wrapping interface for all subclasses decorators 
class RendererHtmlDecorator implements InterfaceRenderer {
  // Declaration of data member with the component interface type
  // so that it allows linking between concrete component and decorators
  protected InterfaceRenderer $htmlWrappedObj;

  public function __construct(InterfaceRenderer $htmlObj) {
    $this->htmlWrappedObj = $htmlObj;
  }

  // Base decorator delegates all work to the wrapped object
  public function render(): void {
    $this->htmlWrappedObj->render();
  }
}  

// Concrete decorators to implement additional behaviors
class RendererPlainText extends RendererHtmlDecorator {
  public function render(): void {
    parent::render();
    echo "Rendering Plain Text into html tags \n"; 
  }
}

// Concrete decorators to implement additional behaviors
class RendererJpeg extends RendererHtmlDecorator {
  public function render(): void {
    parent::render();
    echo "Rendering images into html tags \n"; 
  }
}

// Client code use the decorators to extend the functionality of the RendererHtmlTag
$html = new RendererHtmlTag();
$htmlWithText = new RendererPlainText($html);
$htmlWithTextAndImage = new RendererJpeg($htmlWithText);

echo $htmlWithTextAndImage->render();
echo "\n\n";