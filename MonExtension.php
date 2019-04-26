<?php

class MonExtension extends Twig_Extension {
  public function getFilters(){
    return [
      new Twig_SimpleFilter('markdown',[$this, 'markdownParse'], ['is_safe'=>['html']])
    ];
  }

  public function markdownParse($value){
    return \Michelf\MarkdownExtra::defaultTransform($value);
  }
}

?>