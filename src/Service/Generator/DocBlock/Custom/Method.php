<?php

namespace FmTod\IdeHelperLaravelActions\Service\Generator\DocBlock\Custom;

use phpDocumentor\Reflection\DocBlock\Tags\BaseTag;
use phpDocumentor\Reflection\Php\Argument;
use phpDocumentor\Reflection\Type;

class Method extends BaseTag
{
    protected $name = 'method';

    /**
     * @param  string  $methodName
     * @param  array<\phpDocumentor\Reflection\Php\Argument>  $arguments
     * @param  \phpDocumentor\Reflection\Type|null  $returnType
     * @param  bool  $static
     * @param  null  $description
     */
    public function __construct(
        protected string $methodName,
        protected array $arguments = [],
        protected ?Type $returnType = null,
        protected bool $static = false,
        protected $description = null
    ) {

    }

    public function __toString(): string
    {
        $s = '';
        if($this->static){
            $s .= 'static ';
        }

        if($this->returnType){
            $s .= (string) $this->returnType . ' ';
        }


        $s .= $this->methodName . '(';

        $s .= collect($this->arguments)->map(fn(Argument $arg) => $this->stringifyArgument($arg))->implode(', ');

        $s .= ')';

        return $s;
    }

    protected function stringifyArgument(Argument $argument): string
    {
        $s = "";
        $type = $argument->getType();
        if ($type) {
            $s .= (string) $type." ";
        }

        if ($argument->isVariadic()) {
            $s .= "...";
        }

        if ($argument->isByReference()) {
            $s .= "&";
        }

        $s .= '$'.$argument->getName();

        $default = $argument->getDefault();
        if ($default) {
            $s .= ' = ' . $default;
        }

        return $s;
    }

    public static function create(string $body)
    {
        // TODO: Implement create() method.
    }
}
