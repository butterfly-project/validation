<?php

namespace Butterfly\Component\Validation\String;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
class StringLengthEqual extends AbstractStringLengthValidator
{
    /**
     * @param int $value
     * @return bool
     * @throws \InvalidArgumentException if incorrect value type
     */
    public function check($value)
    {
        return $this->getValueLength($value) == $this->length;
    }
}
