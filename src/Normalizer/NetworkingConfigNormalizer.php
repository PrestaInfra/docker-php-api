<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NetworkingConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\NetworkingConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\NetworkingConfig' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\NetworkingConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('EndpointsConfig', $data) && null !== $data['EndpointsConfig']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['EndpointsConfig'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\EndpointSettings', 'json', $context);
            }
            $object->setEndpointsConfig($values);
        } elseif (\array_key_exists('EndpointsConfig', $data) && null === $data['EndpointsConfig']) {
            $object->setEndpointsConfig(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getEndpointsConfig()) {
            $values = [];
            foreach ($object->getEndpointsConfig() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['EndpointsConfig'] = $values;
        }

        return $data;
    }
}
