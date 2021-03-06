<?php

namespace Rubix\ML\CrossValidation;

use Rubix\ML\Learner;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\CrossValidation\Metrics\Metric;

interface Validator
{
    /**
    * Test the estimator with the supplied dataset and return a score.
    *
    * @param  \Rubix\ML\Learner  $estimator
    * @param  \Rubix\ML\Datasets\Labeled  $dataset
    * @param  \Rubix\ML\CrossValidation\Metrics\Metric  $metric
    * @return float
    */
    public function test(Learner $estimator, Labeled $dataset, Metric $metric) : float;
}
