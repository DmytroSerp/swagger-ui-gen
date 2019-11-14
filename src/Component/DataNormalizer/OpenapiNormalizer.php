<?php

namespace PhpSolution\SwaggerUIGen\Component\DataNormalizer;

use PhpSolution\SwaggerUIGen\Component\SchemaValidator\SwaggerValidator;

/**
 * Class OpenapiNormalizer
 *
 * @package PhpSolution\SwaggerUIGen\Component\DataNormalizer
 */
class OpenapiNormalizer implements DataNormalizerInterface
{
    private const PROPERTIES = [
        'openapi',
        'servers',
        'schemes',
        'components',
        'consumes',
        'produces',
        'info',
        'paths',
        'definitions',
        'parameters',
        'responses',
        'securityDefinitions',
        'security',
        'tags',
        'externalDocs',
    ];

    /**
     * @param array $config
     *
     * @return array
     *
     * @throws NormalizationException
     */
    public function normalize(array $config): array
    {
        $normalizeConfig = array_filter(
            $config,
            static function ($value, $key) {
                return $value !== null && \in_array($key, self::PROPERTIES, true);
            },
            ARRAY_FILTER_USE_BOTH
        );

        return $normalizeConfig;
    }
}