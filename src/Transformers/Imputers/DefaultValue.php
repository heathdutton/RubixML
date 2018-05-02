<?php

namespace Rubix\Engine\Transformers\Imputers;

use InvalidArgumentException;
use RuntimeException;

class DefaultValue implements Categorical, Continuous
{
    /**
     * The default value to impute.
     *
     * @var string
     */
    protected $value;

    /**
     * @param  string  $categorical
     * @param  mixed  $continuous
     * @return void
     */
    public function __construct($value)
    {
        if (!is_int($value) && !is_float($value) && !is_string($value)) {
            throw new InvalidArgumentException('Default value must be either a string, integer, or float.');
        }

        $this->value = $value;
    }

    /**
     * Needs no fiting.
     *
     * @param  array  $values
     * @return mixed
     */
    public function fit(array $values) : void
    {
        //
    }

    /**
     * Impute the default value.
     *
     * @return mixed
     */
    public function impute()
    {
        return $this->value;
    }
}
