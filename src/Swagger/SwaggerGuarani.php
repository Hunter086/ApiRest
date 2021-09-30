<?php
// src/Swagger/SwaggerGuarani.php
declare(strict_types=1);

namespace App\Swagger;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class SwaggerGuarani implements NormalizerInterface
{
    private NormalizerInterface $decorated;

    public function __construct(NormalizerInterface $decorated)
    {
        $this->decorated = $decorated;
    }

    public function supportsNormalization($data, string $format = null): bool
    {
        return $this->decorated->supportsNormalization($data, $format);
    }

    public function normalize($object, string $format = null, array $context = [])
    {
        $docs = $this->decorated->normalize($object, $format, $context);

        $docs['components']['schemas']['Blog'] = [
            'type' => 'object',
            'properties' => [
                'blog' => [
                    'type' => 'string',
                    'readOnly' => true,
                ],
            ],
        ];

        $GuaranieDocumentation = [
            'paths' => [
                '/blog' => [
                    'get' => [
                        'tags' => ['Consulta Guaranie'],
                        'summary' => 'Ver los',
                        'requestBody' => [
                            'description' => 'ver blog',
                            
                        ],
                        'responses' => [
                            Response::HTTP_OK => [
                                'description' => 'Get Blog',
                                'content' => [
                                    'application/json' => [
                                        
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        return array_merge_recursive($docs, $GuaranieDocumentation);
    }
}