<?php


namespace TuchSoft\CommonMarkHeadingShifter;

use League\CommonMark\Node\Node;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Node\Query;
use League\CommonMark\Event\DocumentParsedEvent;


class CommonMarkHeadingShifter
{
    private int $shiftBy;

    public function __construct(int $shiftBy = 1)
    {
        $this->shiftBy = $shiftBy;
    }


    public function onDocumentParsed(DocumentParsedEvent $e): void
    {
        $document = $e->getDocument();
        $query = (new Query())->where( function (Node $node): bool {
                return $node instanceof Heading;
            });
        
        foreach ($query->findAll($document) as $node) {
                $newLevel = $node->getLevel() + $this->shiftBy;
                $node->setLevel(max(1,  min(6, $newLevel)));    
        }
    }


}
