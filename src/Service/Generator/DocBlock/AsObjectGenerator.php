<?php


namespace FmTod\IdeHelperLaravelActions\Service\Generator\DocBlock;

use Lorisleiva\Actions\Concerns\AsObject;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use FmTod\IdeHelperLaravelActions\Service\ActionInfo;

class AsObjectGenerator extends DocBlockGeneratorBase
{
    protected string $context = AsObject::class;

    /**
     * @param  \FmTod\IdeHelperLaravelActions\Service\ActionInfo  $info
     * @return \phpDocumentor\Reflection\DocBlock\Tag[]
     */
    public function generate(ActionInfo $info): array
    {
        /** @var Method $method */
        $method = $this->findMethod($info, 'handle');

        return $method == null ? [] : [new Custom\Method('run', $method->getArguments(), $method->getReturnType(), true)];
    }
}
