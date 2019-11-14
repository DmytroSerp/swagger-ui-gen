<?php

namespace PhpSolution\SwaggerUIGen\Component\Model;

class Components
{
    /**
     * @var \PhpSolution\SwaggerUIGen\Component\Model\SecurityScheme[]|array
     */
    private $securitySchemes = [];

    /**
     * @var \PhpSolution\SwaggerUIGen\Component\Model\Schema[]|array
     */
    private $schemes = [];

    /**
     * @return \PhpSolution\SwaggerUIGen\Component\Model\SecurityScheme[]|array
     */
    public function getSecuritySchemes(): array
    {
        return $this->securitySchemes;
    }

    public function setSecuritySchemes($securitySchemes): void
    {
        $this->securitySchemes = $securitySchemes;
    }

    /**
     * @return \PhpSolution\SwaggerUIGen\Component\Model\Schema[]|array
     */
    public function getSchemes(): array
    {
        return $this->schemes;
    }

    public function setSchemes($schemes): void
    {
        $this->schemes = $schemes;
    }

    public function addScheme(string $name, Schema $schema): void
    {
        $this->schemes[$name] = $schema;
    }
}