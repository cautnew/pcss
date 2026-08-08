<?php

namespace CN\PCSS;

class RULE
{
  private string $originalSelector;
  private array $originalSelectors;
  private array $selectorTree;
  private DECLARATION $originalDeclararions;
  private DECLARATION $declarationsOnHover;
  private DECLARATION $declarationsOnFocus;

  /**
   * Summary of __construct
   * @param array|string|null $selector
   * @param array|null $declarations
   */
  public function __construct(array|string|null $selector = null, ?DECLARATION $declaration = null)
  {
    $this->originalSelectors = [];
    $this->selectorTree = [];
    $this->originalDeclararions = ['principal' => []];
    $this->addSelectors($selector);
    $this->addDeclaration($declaration);
  }

  public function addSelector(?string $selector): self
  {
    if (empty($selector)) {
      return $this;
    }

    $this->originalSelectors[] = $selector;

    return $this;
  }

  public function addSelectors(?array $selectors = null): self
  {
    if (empty($selector)) {
      return $this;
    }

    foreach ($selectors as $selector) {
      $this->addSelector($selector);
    }

    return $this;
  }

  public function addDeclaration(string $property, string $value): self
  {
    return $this;
  }
}
