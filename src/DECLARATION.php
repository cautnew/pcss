<?php

namespace CN\PCSS;

class DECLARATION
{
  private array $declarations;
  private string $name;

  /**
   * Summary of __construct
   * @param array|null $declarations
   */
  public function __construct(array|null $declarations = null, ?string $name = null)
  {
    $this->declarations = [];
    $this->addDeclarations($declarations);

    if (!empty($name)) {
      $this->defineName($name);
    }
  }

  public function __tostring()
  {
    return $this->render();
  }

  public function render(): string
  {
    return json_encode($this->declarations, JSON_FORCE_OBJECT) . "\n";
  }

  public function defineName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function setName(string $name): self
  {
    return $this->defineName($name);
  }

  public function setDeclaration(string $property, ?string $value = null): self
  {
    return $this->addDeclaration($property, $value);
  }

  public function addDeclaration(string $property, ?string $value = null): self
  {
    if ($value === null) {
      return $this->removeDeclaration($property);
    }

    $this->declarations[$property] = $value;

    return $this;
  }

  public function setDeclarations(?array $declarations = null): self
  {
    return $this->addDeclarations($declarations);
  }

  public function addDeclarations(?array $declarations = null): self
  {
    if (empty($declarations)) {
      return $this;
    }

    foreach ($declarations as $property => $value) {
      $this->addDeclaration($property, $value);
    }

    return $this;
  }

  public function removeDeclaration(string $property): self
  {
    if (isset($this->declarations[$property])) {
      unset($this->declarations[$property]);
    }

    return $this;
  }
}
