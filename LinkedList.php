<?php

class LinkedList
{
    private $head = null;

    private static function createNode($val)
    {
        return new class($val)
        {
            public $val = null;
            public $next = null;

            public function __construct($val)
            {
                $this->val = $val;
            }
        };
    }

    private function _add($val, $node) {
        if (!$node) {
            return self::createNode($val);
        } else {
            $node->next = $this->_add($val, $node->next);

            return $node;
        }
    }

    public function add($val) {
        $this->head = $this->_add($val, $this->head);
    }

    private static function _remove($val, $node) {
        if (!$node)
            return null;

        if ($val === $node->val)
            return $node->next;
        else
            $node->next = self::_remove($val, $node->next);

        return $node;
    }

    public function remove($val) {
        self::_remove($val, $this->head);
    }

    private static function _toString($node) {
        return $node
            ? $node->val . ' ' . self::_toString($node->next)
            : '';
    }

    #[\Override]
    public function __toString()
    {
        return self::_toString($this->head);
    }
}
