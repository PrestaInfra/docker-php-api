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

class GenericResourcesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\GenericResourcesItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\GenericResourcesItem' === $data::class;
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
        $object = new \Docker\API\Model\GenericResourcesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NamedResourceSpec', $data) && null !== $data['NamedResourceSpec']) {
            $object->setNamedResourceSpec($this->denormalizer->denormalize($data['NamedResourceSpec'], 'Docker\\API\\Model\\GenericResourcesItemNamedResourceSpec', 'json', $context));
        } elseif (\array_key_exists('NamedResourceSpec', $data) && null === $data['NamedResourceSpec']) {
            $object->setNamedResourceSpec(null);
        }
        if (\array_key_exists('DiscreteResourceSpec', $data) && null !== $data['DiscreteResourceSpec']) {
            $object->setDiscreteResourceSpec($this->denormalizer->denormalize($data['DiscreteResourceSpec'], 'Docker\\API\\Model\\GenericResourcesItemDiscreteResourceSpec', 'json', $context));
        } elseif (\array_key_exists('DiscreteResourceSpec', $data) && null === $data['DiscreteResourceSpec']) {
            $object->setDiscreteResourceSpec(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNamedResourceSpec()) {
            $data['NamedResourceSpec'] = $this->normalizer->normalize($object->getNamedResourceSpec(), 'json', $context);
        }
        if (null !== $object->getDiscreteResourceSpec()) {
            $data['DiscreteResourceSpec'] = $this->normalizer->normalize($object->getDiscreteResourceSpec(), 'json', $context);
        }

        return $data;
    }
}
